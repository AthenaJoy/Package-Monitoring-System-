<?php
session_start();
include ("connection/conn.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check admin table first
    $stmt = $conn->prepare("SELECT * FROM admin WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        
        // Verify admin password
        if ($password == $user['password']) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['role'] = 'admin';
            $_SESSION['email'] = $user['email'];
            header("Location: admin/admin_dashboard.php"); // Redirect to admin dashboard
            exit();
        } else {
            echo "Incorrect password for admin.";
        }
    } else {
        // Check customer table if not an admin
        $stmt = $conn->prepare("SELECT * FROM customer WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            
            // Verify customer password
            if ($password == $user['password']) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['role'] = 'customer';
                $_SESSION['email'] = $user['email'];
                header("Location: customer_dashboard.php"); // Redirect to customer dashboard
                exit();
            } else {
                echo "Incorrect password for customer.";
            }
        } else {
            echo "Email not registered in either admin or customer table.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title> 
  
  <link rel="stylesheet" href="registration.css">
</head>
<body>
  <div class="wrapper">
    <h2>Login</h2>
    <form action="login.php" method="post">  
      
      <div class="input-box">
        <input type="text" name="email" placeholder="Enter your email" required>
      </div>
     
      <div class="input-box">
        <input type="password" name="password" placeholder="Password" required>
      </div>
      
      <div class="input-box button">
        <input type="submit" value="Login">
      </div>
      <div class="text">
        <h3>Dont have an account? <a href="registration.php">Register Here</a></h3>
      </div>
    </form>
  </div>
</body>
</html>