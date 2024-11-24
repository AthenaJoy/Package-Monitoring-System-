<?php

include ("connection/conn.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];
    $decide = isset($_POST['role']) ? $_POST['role'] : '';

    // Set default photo
    $defaultPhoto = '../photo/default.avif'; // Replace with the filename of your default photo

    if ($decide == "admin") {
        // Admin registration
        $sql = "INSERT INTO admin (fullname, email, password, confirm_password, img) 
                VALUES ('$name', '$email', '$password', '$confirmPassword', '$defaultPhoto')";
    } else {
        // User registration
        $sql = "INSERT INTO costumer (fullname, email, password, confirm_password, img) 
                VALUES ('$name', '$email', '$password', '$confirmPassword', '$defaultPhoto')";
    }

    mysqli_query($conn, $sql);

   
}
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration</title> 
  
  <link rel="stylesheet" href="registration.css">
</head>
<body>
  <div class="wrapper">
    <h2>Registration</h2>
    <form action="registration.php" method="post">  
      <div class="input-box">
        <input type="text" name="name" placeholder="Enter your name" required>
      </div>
      <div class="input-box">
        <input type="text" name="email" placeholder="Enter your email" required>
      </div>
      <div class="input-box">
        <input type="password" name="password" placeholder="Create password" required>
      </div>
      <div class="input-box">
        <input type="password" name="confirm_password" placeholder="Confirm password" required>
      </div>
      <div class="input-box">
        <label for="role" style="color: black ; font-size: 14px; font-weight: 500;">Register as:</label>
        <select name="role" required>
          <option value="admin">Admin</option>
          <option value="user">Customer</option>
          
        </select>
      </div>
      <div class="input-box button">
        <input type="submit" value="Register Now">
      </div>
      <div class="text">
        <h3>Already have an account? <a href="login.php">Login now</a></h3>
      </div>
    </form>
  </div>
</body>
</html>
