<?php
session_start();
include 'db.php';  // Include the database connection

// Check if the order_id is available in the URL
$order_id = $_GET['order_id'] ?? '';

if (!$order_id) {
    echo "Invalid order ID.";
    exit();
}

// Fetch the order details
$order_query = $conn->prepare("SELECT * FROM orders WHERE order_id = ?");
$order_query->bind_param("i", $order_id);
$order_query->execute();
$order_result = $order_query->get_result();

if ($order_result->num_rows == 0) {
    echo "Order not found.";
    exit();
}

$order = $order_result->fetch_assoc();  // Fetch the order details

// Fetch the order items for the given order_id
$order_items_query = $conn->prepare("SELECT * FROM order_items WHERE order_id = ?");
$order_items_query->bind_param("i", $order_id);
$order_items_query->execute();
$order_items_result = $order_items_query->get_result();

if ($order_items_result->num_rows == 0) {
    echo "No items found for this order.";
    exit();
}

// Fetch order items into an array
$order_items = [];
while ($item = $order_items_result->fetch_assoc()) {
    $order_items[] = $item;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
    <style>
         :root {
            --gold: #D4AF37;
            --maroon: #800000;
            --light-gold: #F4E7BE;
            --cream: #FFF9F0;
        }

     .main-content {
            max-width: 900px;
            margin: 0 auto;
            padding: 40px 20px;
        }
        h2 {
            text-align: center;
            font-size: 2.8em;
            margin-bottom: 40px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
        }
        h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 200px;
            height: 3px;
            background: linear-gradient(90deg, transparent, var(--gold), transparent);
        }
    .order-container1 {
            background: white;
            border: 2px solid var(--gold);
            border-radius: 15px;
            padding: 35px;
            margin: 20px 0;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08);
            position: relative;
            overflow: hidden;
        }

        .order-container1::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, var(--maroon), var(--gold));
        }

        .thank-you {
            text-align: center;
            font-size: 1.4em;
            color: var(--maroon);
            margin: 30px 0;
            padding: 20px;
            background: linear-gradient(135deg, var(--light-gold) 0%, #fff 100%);
            border-radius: 10px;
            border: 1px solid var(--gold);
        }

        .details-grid {
            display: grid;
            grid-template-columns: auto 1fr;
            gap: 15px;
            margin: 25px 0;
            padding: 20px;
            background: rgba(255,255,255,0.7);
            border-radius: 10px;
        }

        .details-grid span:nth-child(odd) {
            font-weight: bold;
            color: var(--maroon);
            font-size: 1.1em;
            padding-right: 20px;
        }

        .details-grid span:nth-child(even) {
            color: #444;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            padding: 15px 20px;
            margin: 10px 0;
            background: linear-gradient(to right, white, var(--cream));
            border-left: 5px solid var(--gold);
            border-radius: 0 10px 10px 0;
            box-shadow: 0 3px 6px rgba(0,0,0,0.05);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        li:hover {
            transform: translateX(5px);
            box-shadow: 0 5px 10px rgba(0,0,0,0.1);
        }

        .price {
            color: var(--maroon);
            font-weight: bold;
            font-size: 1.1em;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-in {
            animation: fadeInUp 1s ease-out forwards;
        }

        h3 {
            font-size: 1.8em;
            color: var(--maroon);
            margin-top: 40px;
            padding-left: 15px;
            border-left: 4px solid var(--gold);
        }
    </style>
</head>
<body>
    
<?php include 'header.php'; ?>
<div class="main-content">
        <div class="order-container1 animate-in">
            <h2>Order Confirmation</h2>

            <div class="thank-you">
                Thank you for your purchase!
            </div>

            <h3>Order Details</h3>
            <div class="details-grid">
                <span>Order ID:</span>
                <span><?= htmlspecialchars($order['order_id']) ?></span>
                
                <span>Total Price:</span>
                <span class="price">₹<?= htmlspecialchars($order['total_price']) ?></span>
                
                <span>Payment Method:</span>
                <span><?= htmlspecialchars($order['payment_method']) ?></span>
            </div>

            <h3>Order Items</h3>
            <ul>
                <?php foreach ($order_items as $item): ?>
                    <li>
                        <?= htmlspecialchars($item['product_name']) ?> 
                        <span class="price">
                            - ₹<?= htmlspecialchars($item['product_price']) ?> x <?= htmlspecialchars($item['quantity']) ?>
                        </span>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

</body>
</html>
