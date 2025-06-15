<?php
$host = 'localhost';
$username = 'root';
$password = '';          // Leave blank if no password is set
$database = 'crystalaura';

try {
    $conn = new mysqli($host, $username, $password, $database);
    if ($conn->connect_error) {
        throw new Exception("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully!";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
$conn->close();
?>
