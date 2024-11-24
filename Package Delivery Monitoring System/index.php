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
<html lang="en">
<head>
    <title>Package Delivery Monitoring</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>

    <div class="main">
        

        <div class="navbar">
            <div class="icon">
            <img src="photo/Paucek.jpg" alt="Logo" class="logo-img" > <!-- Your logo image -->
            </div>

            <div class="menu">
                <ul>
                    <li><a href="registration.php">HOME</a></li>
                    <li><a href="registration.php">ABOUT</a></li>
                    <li><a href="registration.php">SERVICE</a></li>
                    <li><a href="registration.php">DESIGN</a></li>
                    <li><a href="registration.php">CONTACT</a></li>
                </ul>
            </div>

            <div class="search">
                <input class="srch" type="search" name="" placeholder="Type To text">
                <a href="#"> <button class="btn">Search</button></a>
            </div>
        </div> 

        <div class="content" >
            <h1 style = "color: black;">Package <br><span> Delivery  </span> <br>Monitoring System</h1>
            <p  style = "color: black;" class="par">streamlines tracking and managing deliveries, providing real-time updates on package locations,
                <br> status, and estimated delivery times.
                 <br> It reduces uncertainties, optimizes logistics operations, and enhances customer satisfaction
                <br> by ensuring efficient, transparent package tracking from sender to recipient.</p>

                <a href="login.php" class="cn" id="joinBtn" style=" text-decoration:none; padding:15px; color: black;"> JOIN US</a>
                
           
               
            </div>
        </div>
    </div>

    
           
</html>
