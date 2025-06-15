
<html>
<head>
<style>
body {
  font-family: 'Roboto', sans-serif;
  margin: 0;
  padding: 0;
  color: #333;
  background-color: #f9f9f9;
  line-height: 1.6;
}

.container1 {
  display: flex;
  justify-content: center;
  align-items: center;
  max-width: 1200px;
  margin: 64px auto;
  padding: 0 15px;
}

.contact-form {
  background-color: #fff;
  border-radius: 15px;
  box-shadow: 0 10px 30px rgba(0,0,0,0.1);
  overflow: hidden;
  padding: 40px;
  width: 500px;
}

h2 {
  font-family: 'Playfair Display', serif;
  font-size: 32px;
  font-weight: 700;
  margin-top: 0;
  margin-bottom: 20px;
  color: #1a1a1a;
  text-align: center;
}

.form-group {
  margin-bottom: 25px;
}

label {
  display: block;
  margin-bottom: 8px;
  color: #4a4a4a;
  font-weight: 500;
}

input, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #d4d4d4;
  border-radius: 5px;
  font-size: 16px;
}

textarea {
  height: 150px;
  resize: vertical;
}

button {
  background-color: #b8860b;
  color: #fff;
  padding: 15px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 16px;
  font-weight: 700;
  width: 100%;
}

button:hover {
  background-color: #333;
}
</style>
</head>
<body>
<?php include 'header.php'; ?>

<div class="container1">
  <div class="contact-form">
    <h2>Contact Us</h2>
    <form id="contactForm" method="POST" action="thankyou.php">
      <div class="form-group">
        <label for="name">Your name:</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="mobile">Mobile:</label>
        <input type="tel" id="mobile" name="mobile" required>
      </div>
      <div class="form-group">
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="subject">Subject:</label>
        <input type="text" id="subject" name="subject" required>
      </div>
      <div class="form-group">
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>
      </div>
      <button type="submit" name="submit">Leave a message</button>
    </form>
  </div>
</div>

<?php include 'footer.php'; ?>

</body>
</html>

<?php
// Include your database connection
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Prepare and bind to insert data into the contact_messages table
    $stmt = $conn->prepare("INSERT INTO contact_messages (name, mobile, email, subject, message) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $mobile, $email, $subject, $message);

    if ($stmt->execute()) {
        echo "<script>alert('Thank you! Your message has been sent successfully.'); window.location.href='thankyou.php';</script>";
    } else {
        echo "<script>alert('There was an error submitting your message. Please try again.');</script>";
    }

    $stmt->close();
    $conn->close();
}
?>