<?php
session_start();
include 'db.php';  // Include the database connection

// Ensure the user is logged in and the required data is available
$user_id = $_POST['user_id'] ?? '';
$total_price = $_POST['total_price'] ?? 0;
$payment_method = $_POST['payment_method'] ?? '';

// Ensure the user is logged in
if (!$user_id) {
    echo "You must be logged in to complete the order.";
    exit();
}

// Insert order into the orders table
$stmt = $conn->prepare("INSERT INTO orders (user_id, total_price, payment_method) VALUES (?, ?, ?)");
if ($stmt === false) {
    die("Error preparing order query: " . $conn->error);
}

$stmt->bind_param("ids", $user_id, $total_price, $payment_method);
if (!$stmt->execute()) {
    die("Error executing order query: " . $stmt->error);
}
$order_id = $stmt->insert_id;  // Get the order ID of the newly inserted order

// Fetch the cart items from the cart_items table for the user
$stmt = $conn->prepare("SELECT * FROM cart_items WHERE user_id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

// Check if there are any items in the cart
if ($result->num_rows == 0) {
    die("No items in the cart.");
}

// Insert each item in the cart into the order_items table
while ($item = $result->fetch_assoc()) {
    $product_name = $item['product_name'];
    $product_price = $item['product_price'];
    $quantity = $item['quantity'];

    // Prepare the SQL statement to insert into order_items table
    $stmt = $conn->prepare("INSERT INTO order_items (order_id, product_name, product_price, quantity) VALUES (?, ?, ?, ?)");
    if (!$stmt) {
        die("Error preparing SQL statement for order_items: " . $conn->error);
    }

    // Bind parameters
    if (!$stmt->bind_param("isdi", $order_id, $product_name, $product_price, $quantity)) {
        die("Error binding parameters for order_items: " . $stmt->error);
    }

    // Execute the query
    if (!$stmt->execute()) {
        die("Error executing query for order_items: " . $stmt->error);
    }
}

// After successful order placement, clear the cart items from the cart_items table
$stmt = $conn->prepare("DELETE FROM cart_items WHERE user_id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();

// Redirect to the order confirmation page
header("Location: order_confirmation.php?order_id=" . $order_id);
exit();

?>