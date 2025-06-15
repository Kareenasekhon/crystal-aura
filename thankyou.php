<!-- thankyou.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture and sanitize form data
    $name = htmlspecialchars($_POST['name']);
    $mobile = htmlspecialchars($_POST['mobile']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);
} else {
    // Redirect back to the form if accessed directly
    header("Location: contact.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            background-color: #f9f9f9;
        }

        .container1 {
            display: flex;
            justify-content: center;
            align-items: center;
            max-width: 1200px;
            margin: 64px auto;
            padding: 0 15px;
        }

        .thank-you-message {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            padding: 40px;
            text-align: center;
            max-width: 600px;
            width: 100%;
        }

        h2 {
            font-family: 'Playfair Display', serif;
            font-size: 32px;
            font-weight: 700;
            color: #1a1a1a;
        }

        p {
            font-size: 18px;
            margin: 15px 0;
        }

        .back-button {
            margin-top: 30px;
            background-color: #b8860b;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
        }

        .back-button:hover {
            background-color: #333;
        }
    </style>
</head>
<body>

<div class="container1">
    <div class="thank-you-message">
        <h2>Thank You, <?php echo $name; ?>!</h2>
        <p>Your message has been received. We will contact you soon at <strong><?php echo $email; ?></strong> or via mobile <strong><?php echo $mobile; ?></strong>.</p>
        <p><strong>Subject:</strong> <?php echo $subject; ?></p>
        <p><strong>Message:</strong></p>
        <p><?php echo nl2br($message); ?></p>

        <a class="back-button" href="contact us.php">Go Back</a>
    </div>
</div>

</body>
</html>
