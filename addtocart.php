<?php
session_start();
include 'db.php'; // Include the database connection

// Function to add an item to the cart or increase quantity
function addToCart($product_name, $product_price, $product_image) {
    global $conn;

    // Ensure the user is logged in (this is important for associating the cart with a user)
    if (!isset($_SESSION['user_id'])) {
        die('You must be logged in to add items to your cart.');
    }
    
    $user_id = $_SESSION['user_id'];
    
    // Check if the product is already in the user's cart
    $stmt = $conn->prepare("SELECT * FROM cart_items WHERE user_id = ? AND product_name = ?");
    $stmt->bind_param("is", $user_id, $product_name);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Product already in cart, update the quantity
        $stmt = $conn->prepare("UPDATE cart_items SET quantity = quantity + 1 WHERE user_id = ? AND product_name = ?");
        $stmt->bind_param("is", $user_id, $product_name);
        $stmt->execute();
    } else {
        // Product is not in the cart, add it
        // Assign quantity before passing it to bind_param
$quantity = 1;

// Prepare the SQL statement to add the product to the cart
$stmt = $conn->prepare("INSERT INTO cart_items (user_id, product_name, product_price, product_image, quantity) VALUES (?, ?, ?, ?, ?)");

// Now pass the variable $quantity correctly
$stmt->bind_param("isssi", $user_id, $product_name, $product_price, $product_image, $quantity);
$stmt->execute();
    }
}

// Function to remove an item from the cart
function removeFromCart($product_name) {
    global $conn;
    
    if (!isset($_SESSION['user_id'])) {
        die('You must be logged in to remove items from your cart.');
    }

    $user_id = $_SESSION['user_id'];
    
    // Delete the product from the cart
    $stmt = $conn->prepare("DELETE FROM cart_items WHERE user_id = ? AND product_name = ?");
    $stmt->bind_param("is", $user_id, $product_name);
    $stmt->execute();
}

// Function to adjust item quantity in the cart
function adjustQuantity($product_name, $adjustment) {
    global $conn;
    
    if (!isset($_SESSION['user_id'])) {
        die('You must be logged in to adjust item quantities.');
    }

    $user_id = $_SESSION['user_id'];
    
    // Adjust the quantity
    $stmt = $conn->prepare("UPDATE cart_items SET quantity = quantity + ? WHERE user_id = ? AND product_name = ?");
    $stmt->bind_param("iis", $adjustment, $user_id, $product_name);
    $stmt->execute();
    
    // If the quantity is zero or less, remove the item from the cart
    if ($adjustment < 0) {
        $stmt = $conn->prepare("DELETE FROM cart_items WHERE user_id = ? AND product_name = ? AND quantity <= 0");
        $stmt->bind_param("is", $user_id, $product_name);
        $stmt->execute();
    }
}

// Check if form is submitted to add, remove, or adjust item quantity
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['add_to_cart'])) {
        $product_name = $_POST['product_name'];
        $product_price = $_POST['product_price'];
        $product_image = $_POST['product_image'];
        addToCart($product_name, $product_price, $product_image);
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit();
    } elseif (isset($_POST['remove_from_cart'])) {
        $product_name = $_POST['product_name'];
        removeFromCart($product_name);
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit();
    } elseif (isset($_POST['adjust_quantity'])) {
        $product_name = $_POST['product_name'];
        $adjustment = (int)$_POST['adjustment'];
        adjustQuantity($product_name, $adjustment);
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <style>
:root {
  --maroon: #800020;
  --gold: #FFD700;
  --light-maroon: #a33;
  --light-gold: #ffe44d;
}

body {
  background: linear-gradient(135deg, #f8f1e5, #fff5e6);
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  margin: 0;
  padding: 20px;
}

#mainContent {
  max-width: 1200px;
  margin: 0 auto;
}

.container1 {
  background: white;
  border-radius: 15px;
  box-shadow: 0 0 20px rgba(128, 0, 32, 0.1);
  padding: 30px;
  margin: 67px auto;
}

.cart-header {
  color: var(--maroon);
  text-align: center;
  font-size: 2.5em;
  margin-bottom: 30px;
  border-bottom: 3px solid var(--gold);
  padding-bottom: 15px;
}

.cart-item {
  display: grid;
  grid-template-columns: 150px 200px auto;
  gap: 20px;
  padding: 20px;
  margin-bottom: 20px;
  border: 2px solid var(--light-maroon);
  border-radius: 10px;
  align-items: start;
  transition: transform 0.3s ease;
}

.cart-item img {
  width: 150px;
  height: 150px;
  object-fit: cover;
  border-radius: 8px;
  border: 2px solid var(--gold);
  margin-bottom: 10px;
}

.image-container {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 10px;
}

.remove-btn-under-image {
  width: 100%;
}

.remove-btn-under-image .btn {
  width: 100%;
  font-size: 0.9em;
  padding: 8px;
}

.item-details {
  display: flex;
  flex-direction: column;
  gap: 10px;
}

.cart-item p {
  margin: 5px 0;
  color: var(--maroon);
  font-size: 1.1em;
  padding: 5px 0;
  border-bottom: 1px solid var(--light-gold);
}

.button-group {
  display: flex;
  flex-direction: column;
  gap: 10px;
}

.btn {
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-weight: 600;
  transition: all 0.3s ease;
}

.btn-primary {
  background-color: var(--maroon);
  color: var(--gold);
  margin: 5px;
}

.btn-primary:hover {
  background-color: var(--light-maroon);
  color: var(--light-gold);
  transform: scale(1.05);
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

form {
  display: inline-block;
}

form[action="checkout.php"] .btn-primary {
  background: linear-gradient(45deg, var(--maroon), var(--light-maroon));
  border: 2px solid var(--gold);
  padding: 15px 40px;
  font-size: 1.2em;
  display: block;
  margin: 30px auto;
  animation: pulse 2s infinite;
}

@keyframes pulse {
  0% {
    transform: scale(1);
    box-shadow: 0 0 0 0 rgba(128, 0, 32, 0.4);
  }
  70% {
    transform: scale(1.05);
    box-shadow: 0 0 0 10px rgba(128, 0, 32, 0);
  }
  100% {
    transform: scale(1);
    box-shadow: 0 0 0 0 rgba(128, 0, 32, 0);
  }
}

@media (max-width: 768px) {
  .cart-item {
    grid-template-columns: 1fr;
    text-align: center;
  }
  
  .image-container {
    margin: 0 auto;
    width: 150px;
  }
  
  .btn {
    width: 100%;
    margin: 5px 0;
  }
}

.quantity-controls {
  display: flex;
  align-items: center;
  gap: 10px;
}

.quantity-btn {
  width: 30px;
  height: 30px;
  border-radius: 50%;
  border: 2px solid var(--maroon);
  background-color: white;
  color: var(--maroon);
  font-size: 1.2em;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all 0.3s ease;
}

.quantity-btn:hover {
  background-color: var(--maroon);
  color: var(--gold);
}

.quantity-display {
  display: flex;
  align-items: center;
  gap: 5px;
}
</style>
</head>
<body>

<?php include 'header.php'; ?>

<div id="mainContent">
    <div class="container1">
        <?php
         $result = null;
        // Fetch cart items for the logged-in user
        if (isset($_SESSION['user_id'])) {
            $user_id = $_SESSION['user_id'];
            $stmt = $conn->prepare("SELECT * FROM cart_items WHERE user_id = ?");
            $stmt->bind_param("i", $user_id);
            $stmt->execute();
            $result = $stmt->get_result();
        }

        if ($result && $result->num_rows > 0): ?>
            <h2 class="cart-header">Your Cart</h2>
            <?php while ($item = $result->fetch_assoc()): ?>
                <div class="cart-item">
                    <div class="image-container">
                        <img src="<?= htmlspecialchars($item['product_image']) ?>" alt="<?= htmlspecialchars($item['product_name']) ?>">
                        <div class="remove-btn-under-image">
                            <form action="" method="POST">
                                <input type="hidden" name="product_name" value="<?= htmlspecialchars($item['product_name']) ?>">
                                <button type="submit" name="remove_from_cart" class="btn btn-primary">Remove</button>
                            </form>
                        </div>
                    </div>
                    <div class="item-details">
                        <p>Name: <?= htmlspecialchars($item['product_name']) ?></p>
                        <p>Price: ₹<?= htmlspecialchars($item['product_price']) ?></p>
                        <div class="quantity-display">
                            <p>Quantity:</p>
                            <form action="" method="POST" style="margin: 0 5px;">
                                <input type="hidden" name="product_name" value="<?= htmlspecialchars($item['product_name']) ?>">
                                <input type="hidden" name="adjustment" value="-1">
                                <button type="submit" name="adjust_quantity" class="quantity-btn">-</button>
                            </form>
                            <span><?= htmlspecialchars($item['quantity']) ?></span>
                            <form action="" method="POST" style="margin: 0 5px;">
                                <input type="hidden" name="product_name" value="<?= htmlspecialchars($item['product_name']) ?>">
                                <input type="hidden" name="adjustment" value="1">
                                <button type="submit" name="adjust_quantity" class="quantity-btn">+</button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
            
            <form action="checkout.php" method="POST">
                <button type="submit" class="btn btn-primary">Buy Now</button>
            </form>

        <?php else: ?>
            <div class="empty-cart">
                <h2 class="empty-cart-text">YOUR CART IS EMPTY</h2>
                <a href="index.php" class="btn btn-primary">Continue Shopping</a>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php include 'footer.php'; ?>
</body>
</html>
