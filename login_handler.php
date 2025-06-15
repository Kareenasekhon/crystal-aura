<?php
// Start a session to store user data if needed
session_start();


// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize form inputs
    $email = trim($_POST['email']);
    $password = $_POST['password']; // Keep the raw password for verification

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

    // Prepare the SQL statement to select user data based on the email
    $query = "SELECT first_name, email, password FROM users WHERE email = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    // Check if the user exists
    if ($stmt->num_rows > 0) {
        // Fetch the user's data
        $stmt->bind_result($first_name, $stored_email, $stored_password);
        $stmt->fetch();

        // Verify the password
        if (password_verify($password, $stored_password)) {
            // Successful login
            $_SESSION['logged_in'] = true;
            $_SESSION['user_name'] = $first_name; // Store the user's first name in session

            // Redirect to index.php with the user's name
            header("Location: index.php?name=" . urlencode($first_name));
            exit();
        } else {
            // Invalid password
            $_SESSION['error_message'] = "Invalid email or password!";
            header("Location: login.php");  // Redirect back to login page
            exit();
        }
    } else {
        // Handle user not found (invalid email)
        $_SESSION['error_message'] = "Invalid email or password!";
        header("Location: login.php");  // Redirect back to login page
        exit();
    }

    // Close the statement and the connection
    $stmt->close();
    $conn->close();
}
?>
