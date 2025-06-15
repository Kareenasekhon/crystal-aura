<?php
session_start();

include 'db.php';

// Check if user is logged in and get the user ID
if (!isset($_SESSION['user_id'])) {
    echo "You must be logged in to view the cart.";
    exit();
}

$user_id = $_SESSION['user_id'];

// Query the cart_items table to check if the cart is empty
$sql = "SELECT * FROM cart_items WHERE user_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id); // "i" stands for integer (user_id)
$stmt->execute();
$result = $stmt->get_result();

// If the cart is empty, show a message and exit
if ($result->num_rows == 0) {
    echo "<h2>Your cart is empty</h2>";
    echo "<a href='index.php'>Go back to shopping</a>";
    exit();
}

// Calculate the total price of all items in the cart
$total_price = 0;
$cart_items = [];
while ($item = $result->fetch_assoc()) {
    $cart_items[] = $item;
    $total_price += $item['product_price'] * $item['quantity'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
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

.container1 {
  background: white;
  border-radius: 15px;
  box-shadow: 0 8px 20px rgba(128, 0, 32, 0.15);
  padding: 40px;
  max-width: 800px;
  margin: 67px auto;
}

.cart-item {
  display: flex;
  flex-direction: column;
  gap: 15px;
  padding: 20px;
  background: linear-gradient(to right, rgba(128, 0, 32, 0.05), transparent);
  border-radius: 8px;
  margin: 15px 0;
}

.cart-item > div {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 10px 20px;
  background: rgba(255, 255, 255, 0.7);
  border-radius: 5px;
}

.cart-item-label {
  font-weight: bold;
  color: var(--maroon);
  font-size: 1.1em;
  min-width: 100px;
}

.cart-item-value {
  color: #444;
  font-size: 1.2em;
}

h2 {
  color: var(--maroon);
  text-align: center;
  font-size: 2.5em;
  margin-bottom: 30px;
  border-bottom: 3px solid var(--gold);
  padding-bottom: 15px;
  text-transform: uppercase;
  letter-spacing: 2px;
}

.total-price {
  font-size: 1.8em;
  color: var(--maroon);
  text-align: center;
  margin: 30px auto;
  padding: 20px;
  background: linear-gradient(to right, rgba(255, 215, 0, 0.2), rgba(255, 215, 0, 0.2));
  border-radius: 8px;
  max-width: 400px;
}

h3 {
  color: var(--maroon);
  font-size: 1.8em;
  margin: 25px 0;
  padding-left: 10px;
  border-left: 5px solid var(--gold);
}

hr {
  border: none;
  height: 2px;
  background: linear-gradient(to right, var(--gold), var(--maroon));
  margin: 20px 0;
}

.payment-methods {
  display: grid;
  grid-template-columns: 1fr;
  gap: 15px;
  margin: 25px 0;
}

.payment-option {
  display: flex;
  align-items: center;
  padding: 15px;
  background: linear-gradient(to right, rgba(128, 0, 32, 0.05), transparent);
  border-radius: 8px;
  transition: all 0.3s ease;
}

.payment-option:hover {
  transform: translateX(10px);
  background: linear-gradient(to right, rgba(128, 0, 32, 0.1), transparent);
}

input[type="radio"] {
  appearance: none;
  width: 20px;
  height: 20px;
  border: 2px solid var(--maroon);
  border-radius: 50%;
  margin-right: 15px;
  position: relative;
  cursor: pointer;
  transition: all 0.3s ease;
}

input[type="radio"]:checked {
  border: 2px solid var(--maroon);
  background: var(--gold);
  box-shadow: 0 0 10px var(--light-gold);
}

label {
  font-size: 1.2em;
  color: var(--maroon);
  cursor: pointer;
  flex-grow: 1;
}

.btn-primary {
  background: linear-gradient(45deg, var(--maroon), var(--light-maroon));
  color: var(--gold);
  padding: 15px 40px;
  border: none;
  border-radius: 8px;
  font-size: 1.2em;
  font-weight: bold;
  cursor: pointer;
  display: block;
  margin: 30px auto;
  transition: all 0.3s ease;
  box-shadow: 0 4px 15px rgba(128, 0, 32, 0.2);
  text-transform: uppercase;
  letter-spacing: 1px;
  width: 80%;
  max-width: 400px;
}

.btn-primary:hover {
  transform: translateY(-3px);
  box-shadow: 0 6px 20px rgba(128, 0, 32, 0.3);
  background: linear-gradient(45deg, var(--light-maroon), var(--maroon));
}

.btn-primary:active {
  transform: translateY(1px);
}

@media (max-width: 768px) {
  .container1 {
    padding: 20px;
    margin: 10px;
  }
  
  .cart-item {
    grid-template-columns: 1fr;
    gap: 10px;
  }
  
  h2 {
    font-size: 2em;
  }
  
  h3 {
    font-size: 1.5em;
  }
}
</style>
</head>
<body>

<?php include 'header.php'; ?>
<div class="container1">
    <h2>Checkout</h2>
    <?php foreach ($cart_items as $item): ?>
        <div class="cart-item">
            <div>
                <span class="cart-item-label">Product:</span>
                <span class="cart-item-value"><?= htmlspecialchars($item['product_name']) ?></span>
            </div>
            <div>
                <span class="cart-item-label">Price:</span>
                <span class="cart-item-value">₹<?= htmlspecialchars($item['product_price']) ?></span>
            </div>
            <div>
                <span class="cart-item-label">Quantity:</span>
                <span class="cart-item-value"><?= htmlspecialchars($item['quantity']) ?></span>
            </div>
        </div>
        <hr>
    <?php endforeach; ?>
    
    <div class="total-price">
        Total Price: ₹<?= htmlspecialchars($total_price) ?>
    </div>

    <h3>Select Payment Method</h3>
    <form action="process_payment.php" method="POST">
    <input type="hidden" name="total_price" value="<?= htmlspecialchars($total_price) ?>">
    <input type="hidden" name="user_id" value="<?= $_SESSION['user_id'] ?? '' ?>"> <!-- Assuming user is logged in -->
    
    <div class="payment-methods">
        <div class="payment-option">
            <input type="radio" id="credit_card" name="payment_method" value="credit_card" required>
            <label for="credit_card">Credit/Debit Card</label>
        </div>
        <div class="payment-option">
            <input type="radio" id="net_banking" name="payment_method" value="net_banking" required>
            <label for="net_banking">Net Banking</label>
        </div>
        <div class="payment-option">
            <input type="radio" id="upi" name="payment_method" value="upi" required>
            <label for="upi">UPI</label>
        </div>
    </div>
    <button type="submit" class="btn-primary">Proceed to Pay</button>
</form>

</div>

<?php include 'footer.php'; ?>

</body>
</html>

<?php
// Close the database connection
$stmt->close();
$conn->close();
?>