
<html><head>
<title>Signup</title>

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

.auth-container {
    background-color: white;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 2rem;
    max-width: 400px;
    width: 100%;
    margin:auto;
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
input[type="password"],
input[type="text"] {
    width: 100%;
    padding: 0.5rem;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 1rem;
}

button {
    background-color: #b99822;
    color: white;
    border: none;
    padding: 0.75rem;
    font-size: 1rem;
    cursor: pointer;
    border-radius: 4px;
    margin-top: 1rem;
}

button:hover {
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

.section-template--17173972156578__main-padding {
    padding-top: 27px;
    padding-bottom: 27px;
}

@media screen and (min-width: 750px) {
    .section-template--17173972156578__main-padding {
        padding-top: 36px;
        padding-bottom: 36px;
    }
}

/* Error message styling */
.error-message {
    color: red;
    font-size: 0.9rem;
    margin-top: 5px;
}
</style>

<script>
function validateForm() {
    let isValid = true;

    // Get form inputs
    const firstName = document.getElementById('RegisterForm-FirstName');
    const lastName = document.getElementById('RegisterForm-LastName');
    const email = document.getElementById('RegisterForm-email');
    const password = document.getElementById('RegisterForm-password');

    // Clear previous error messages
    document.querySelectorAll('.error-message').forEach(function(el) {
        el.innerHTML = '';
    });

    // Validate First Name
    if (firstName.value.trim() === '') {
        document.getElementById('first-name-error').innerHTML = 'First name is required';
        isValid = false;
    }

    // Validate Last Name
    if (lastName.value.trim() === '') {
        document.getElementById('last-name-error').innerHTML = 'Last name is required';
        isValid = false;
    }

    // Validate Email
    if (email.value.trim() === '') {
        document.getElementById('email-error').innerHTML = 'Email is required';
        isValid = false;
    }

    // Validate Password
    if (password.value.trim() === '') {
        document.getElementById('password-error').innerHTML = 'Password is required';
        isValid = false;
    }

    return isValid; // Only allow form submission if valid
}
</script>
</head>
<body>
<?php include 'header.php'; ?>
<main id="MainContent" class="content-for-layout focus-none" role="main" tabindex="-1">
    <div id="shopify-section-template--17173972156578__main" class="shopify-section">
        <div class="customer register section-template--17173972156578__main-padding">
            <div class="auth-container">
                <h1>Sign Up</h1>
                <form method="post" action="signup_handler.php" id="create_customer" accept-charset="UTF-8" novalidate="novalidate" onsubmit="return validateForm();">
                    <div class="field">
                        <label for="RegisterForm-FirstName">First Name</label>
                        <input type="text" name="first_name" id="RegisterForm-FirstName" autocomplete="given-name" required>
                        <div id="first-name-error" class="error-message"></div>
                    </div>
                    <div class="field">
                        <label for="RegisterForm-LastName">Last Name</label>
                        <input type="text" name="last_name" id="RegisterForm-LastName" autocomplete="family-name" required>
                        <div id="last-name-error" class="error-message"></div>
                    </div>
                    <div class="field">
                        <label for="RegisterForm-email">Email</label>
                        <input type="email" name="email" id="RegisterForm-email" required>
                        <div id="email-error" class="error-message"></div>
                    </div>
                    <div class="field">
                        <label for="RegisterForm-password">Password</label>
                        <input type="password" name="password" id="RegisterForm-password" required>
                        <div id="password-error" class="error-message"></div>
                    </div>
                    <button type="submit">Create Account</button>
                </form>
                <a id="login-redirect" href="login.php">Already have an account? Login here</a>
            </div>
        </div>
    </div>
</main>
<?php include 'footer.php'; ?>
</body>
</html>
