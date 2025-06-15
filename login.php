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
    $query = "SELECT user_id, first_name, email, password FROM users WHERE email = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    // Check if the user exists
    if ($stmt->num_rows > 0) {
        // Fetch the user's data
        $stmt->bind_result($user_id, $first_name, $stored_email, $stored_password);
        $stmt->fetch();

        // Verify the password
        if (password_verify($password, $stored_password)) {
            // Successful login
            $_SESSION['logged_in'] = true;
            $_SESSION['user_name'] = $first_name; // Store the user's first name in session
            $_SESSION['user_id'] = $user_id; // Store the user_id in session

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

<html>
<head>
<title>Login</title>
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
 body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
   
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

.auth-container1 {
    background-color: white;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 2rem;
    max-width: 400px;
    width: 100%;
    margin: 100px 36% 100px 36%;
}

h1 {
    color: #333;
    margin-bottom: 1rem;
    text-align: center;
}

form {
    display: flex;
    flex-direction: column;
}

.field {
    margin-bottom: 1rem;
}

label {
    font-weight: bold;
    margin-bottom: 0.5rem;
    display: block;
}

input[type="email"],
input[type="password"] {
    width: 100%;
    padding: 0.5rem;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 1rem;
}

button[type="submit"] {
    background-color: #b99822;
    color: white;
    border: none;
    padding: 0.75rem;
    font-size: 1rem;
    cursor: pointer;
    border-radius: 4px;
    margin-top: 1rem;
}

button[type="submit"]:hover {
    background-color: #a68820;
}

a {
    color: #b99822;
    text-decoration: none;
    margin-top: 1rem;
    display: inline-block;
}

a:hover {
    text-decoration: underline;
}

.hidden {
    display: none;
}

#toggle-forms {
    text-align: center;
    margin-top: 1rem;
}

p {
    text-align: center;
    margin-bottom: 1rem;
}
</style>
</head>
<body>
<?php include 'header.php'; ?>

<div class="auth-container1">
    <div id="login-form">
        <h1>Login</h1>
        
        <!-- Display error message if login fails -->
        <?php
        // Check if there is an error message in the session
        if (isset($_SESSION['error_message'])) {
            echo '<p style="color: red; text-align: center;">' . $_SESSION['error_message'] . '</p>';
            unset($_SESSION['error_message']); // Clear the error message after displaying it
        }
        ?>

        <form method="post" action="login.php" id="customer_login" accept-charset="UTF-8" novalidate="novalidate">
            <input type="hidden" name="form_type" value="customer_login">
            <input type="hidden" name="utf8" value="✓">

            <div class="field">
                <label for="CustomerEmail">Email</label>
                <input type="email" name="email" id="CustomerEmail" autocomplete="email" autocorrect="off" autocapitalize="off" placeholder="Enter your Email" required>
            </div>
            <div class="field">
                <label for="CustomerPassword">Password</label>
                <input type="password" name="password" id="CustomerPassword" autocomplete="current-password" placeholder="******" required>
            </div>
            <button type="submit">Login</button>
        </form>

        <div id="toggle-forms">
            <a href="#" id="show-reset">Forgot password?</a>
            <span> | </span>
            <a href="signup.php">Create a new account</a>
        </div>
    </div>

    <div id="reset-form" class="hidden">
        <h1>Reset your password</h1>
        <p>We will send you an email to reset your password</p>
        <form method="post" action="/account/recover" accept-charset="UTF-8">
            <input type="hidden" name="form_type" value="recover_customer_password">
            <input type="hidden" name="utf8" value="✓">

            <div class="field">
                <label for="RecoverEmail">Email</label>
                <input type="email" name="email" id="RecoverEmail" autocorrect="off" autocapitalize="off" autocomplete="email" placeholder="johndoe@xyz.com" required>
            </div>
            <button type="submit">Submit</button>
        </form>

        <div id="toggle-forms">
            <a href="#" id="show-login">Back to Login</a>
        </div>
    </div>
</div>

<script>
// JS for toggle between login and reset password forms
document.addEventListener('DOMContentLoaded', (event) => {
    const loginForm = document.getElementById('login-form');
    const resetForm = document.getElementById('reset-form');
    const showResetLink = document.getElementById('show-reset');
    const showLoginLink = document.getElementById('show-login');

    showResetLink.addEventListener('click', (e) => {
        e.preventDefault();
        loginForm.classList.add('hidden');
        resetForm.classList.remove('hidden');
    });

    showLoginLink.addEventListener('click', (e) => {
        e.preventDefault();
        resetForm.classList.add('hidden');
        loginForm.classList.remove('hidden');
    });
});
</script>

<?php include 'footer.php'; ?>
</body>
</html>
