<?php
session_start(); // Start the session

include 'db.php'; // Database connection

// Function to add an item to the wishlist
function addToWishlist($product_name, $product_price, $product_image) {
    global $conn;
   
    if (!isset($_SESSION['user_id'])) {
        die('You must be logged in to add items to your wishlist.');
    }

    $user_id = $_SESSION['user_id'];

    // Check if product is already in wishlist
    $stmt = $conn->prepare("SELECT * FROM wishlist_items WHERE user_id = ? AND product_name = ?");
    $stmt->bind_param("is", $user_id, $product_name);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 0) {
        // Add product if it's not already in the wishlist
        $stmt = $conn->prepare("INSERT INTO wishlist_items (user_id, product_name, product_price, product_image) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("isss", $user_id, $product_name, $product_price, $product_image);
        $stmt->execute();
    }
}

// Function to remove an item from the wishlist
function removeFromWishlist($product_name) {
    global $conn;

    if (!isset($_SESSION['user_id'])) {
        die('You must be logged in to remove items from your wishlist.');
    }

    $user_id = $_SESSION['user_id'];
    
    $stmt = $conn->prepare("DELETE FROM wishlist_items WHERE user_id = ? AND product_name = ?");
    $stmt->bind_param("is", $user_id, $product_name);
    $stmt->execute();
}

// Function to add an item to the cart
function addToCart($product_name, $product_price, $product_image) {
    global $conn;

    if (!isset($_SESSION['user_id'])) {
        die('You must be logged in to add items to your cart.');
    }

    $user_id = $_SESSION['user_id'];

    // Check if product is already in the cart
    $stmt = $conn->prepare("SELECT * FROM cart_items WHERE user_id = ? AND product_name = ?");
    $stmt->bind_param("is", $user_id, $product_name);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 0) {
        // Add product if it's not already in the cart
        $stmt = $conn->prepare("INSERT INTO cart_items (user_id, product_name, product_price, product_image) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("isss", $user_id, $product_name, $product_price, $product_image);
        $stmt->execute();
    }
}

// Move item from wishlist to cart
function moveToCart($product_name) {
    global $conn;
    $user_id = $_SESSION['user_id'];
    $stmt = $conn->prepare("SELECT product_name, product_price, product_image FROM wishlist_items WHERE user_id = ? AND product_name = ?");
    $stmt->bind_param("is", $user_id, $product_name);
    $stmt->execute();
    $result = $stmt->get_result();
    $item = $result->fetch_assoc();

    if ($item) {
        addToCart($item['product_name'], $item['product_price'], $item['product_image']);
        
        // Remove the item from the wishlist after adding to cart
        $stmt = $conn->prepare("DELETE FROM wishlist_items WHERE user_id = ? AND product_name = ?");
        $stmt->bind_param("is", $user_id, $product_name);
        $stmt->execute();
    }
}

// Handle form submissions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['add_to_wishlist'])) {
        $product_name = $_POST['product_name'];
        $product_price = $_POST['product_price'];
        $product_image = $_POST['product_image'];
        addToWishlist($product_name, $product_price, $product_image);
        header('Location: wishlist.php');
        exit();
    } elseif (isset($_POST['remove_from_wishlist'])) {
        $product_name = $_POST['product_name'];
        removeFromWishlist($product_name);
        header('Location: wishlist.php');
        exit();
    } elseif (isset($_POST['move_to_cart'])) {
        $product_name = $_POST['product_name'];
        moveToCart($product_name);
        header('Location: wishlist.php');
        exit();
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wishlist</title>
    <style>
           * {
          margin: 0;
          padding: 0;
      }
:root {
  --maroon: #800020;
  --gold: #FFD700;
}

body {
  background: linear-gradient(135deg, #f8f1e5, #fff5e6);
  font-family: 'Playfair Display', serif;
  margin: 0;
  padding: 20px;
  min-height: 100vh;
}

.container1 {
  background: rgba(255, 255, 255, 0.95);
  border-radius: 20px;
  padding: 40px;
  max-width: 1000px;
  margin: 20px auto;
  border: 3px solid var(--gold);
  box-shadow: 0 10px 30px rgba(128, 0, 32, 0.1);
}

h1 {
  color: var(--gold);
  text-align: center;
  font-size: 2.8em;
  margin-bottom: 40px;
  background: var(--maroon);
  padding: 20px;
  text-transform: uppercase;
  letter-spacing: 4px;
  border-radius: 12px;
}

.wishlist-item {
  display: flex;
  gap: 30px;
  background: white;
  padding: 25px;
  margin: 20px 0;
  border-radius: 15px;
  border: 2px solid var(--maroon);
  transition: transform 0.3s ease;
}

.wishlist-item:hover {
  transform: translateY(-5px);
}

.wishlist-item img {
  width: 200px;
  height: 200px;
  object-fit: cover;
  border-radius: 10px;
  border: 2px solid var(--gold);
}

.wishlist-item h2 {
  color: var(--maroon);
  margin: 0 0 15px 0;
  font-size: 1.8em;
  background: none;
  padding: 0;
}

.wishlist-item p {
  color: var(--maroon);
  font-size: 1.3em;
  margin: 10px 0;
}

.wishlist-actions {
  display: flex;
  gap: 15px;
  margin-top: 20px;
}

.wishlist-actions form {
  margin: 0;
}

button {
  background: var(--maroon);
  color: var(--gold);
  border: 2px solid var(--gold);
  padding: 12px 25px;
  border-radius: 8px;
  cursor: pointer;
  font-family: 'Playfair Display', serif;
  font-size: 1em;
  transition: all 0.3s ease;
}

button:hover {
  background: var(--gold);
  color: var(--maroon);
  border-color: var(--maroon);
}

@media (max-width: 768px) {
  .wishlist-item {
    flex-direction: column;
  }
  
  .wishlist-item img {
    width: 100%;
    height: 250px;
  }
  
  .container1 {
    padding: 20px;
    margin: 10px;
  }
  .empty-cart {
  text-align: center;
  padding: 50px;
}

.empty-cart-text {
  color: var(--maroon);
  font-size: 2em;
  margin-bottom: 30px;
  text-shadow: 2px 2px 4px rgba(128, 0, 32, 0.1);
}
  h1 {
    font-size: 2.2em;
  }
}
</style>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
<?php include 'header.php'; ?>

<div id="mainContent">
    <div class="container1">
        <?php
         $result = null;
        if (isset($_SESSION['user_id'])) {
            $user_id = $_SESSION['user_id'];
            $stmt = $conn->prepare("SELECT * FROM wishlist_items WHERE user_id = ?");
            $stmt->bind_param("i", $user_id);
            $stmt->execute();
            $result = $stmt->get_result();
        }

        if ($result && $result->num_rows > 0): ?>
            <h2 class="cart-header">Your Wishlist</h2>
            <?php while ($item = $result->fetch_assoc()): ?>
                <div class="wishlist-item">
                    <div class="image-container">
                        <img src="<?= htmlspecialchars($item['product_image']) ?>" alt="<?= htmlspecialchars($item['product_name']) ?>">
                        <div class="remove-btn-under-image">
                            <form action="" method="POST">
                                <input type="hidden" name="product_name" value="<?= htmlspecialchars($item['product_name']) ?>">
                                <button type="submit" name="remove_from_wishlist" class="btn btn-primary">Remove</button>
                            </form>
                            <form action="" method="POST">
                                <input type="hidden" name="product_name" value="<?= htmlspecialchars($item['product_name']) ?>">
                                <button type="submit" name="move_to_cart" class="btn btn-primary">Move to Cart</button>
                            </form>
                        </div>
                    </div>
                    <div class="item-details">
                        <p>Name: <?= htmlspecialchars($item['product_name']) ?></p>
                        <p>Price: ₹<?= htmlspecialchars($item['product_price']) ?></p>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <div class="empty-cart">
                <h2 class="empty-cart-text">YOUR WISHLIST IS EMPTY</h2>
                <a href="index.php" class="btn btn-primary">Continue Shopping</a>
            </div>
        <?php endif; ?>
    </div>
</div>



<?php include 'footer.php'; ?>

</body>
</html> 