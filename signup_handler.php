<?php
// signup_handler.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Connect to the database
    $host = 'localhost';
    $username = 'root';
    $password_db = '';  // Replace with your actual MySQL root password, if set
    $database = 'crystalaura';

    $conn = new mysqli($host, $username, $password_db, $database);

    // Check for connection error
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Hash the password for secure storage
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepare and execute the SQL statement
    $stmt = $conn->prepare("INSERT INTO users (first_name, last_name, email, password) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $first_name, $last_name, $email, $hashed_password);

    if ($stmt->execute()) {
        // Redirect to index.php with the user's name on success
        header("Location: index.php?first_name=" . urlencode($first_name) . "&last_name=" . urlencode($last_name));
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>
