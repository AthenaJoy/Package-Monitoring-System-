<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['email'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile UI Design</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
  

.form-control:focus {
    box-shadow: none;
    border-color: #BA68C8
}

.profile-button {
    background: rgb(99, 39, 120);
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #682773
}

.profile-button:focus {
    background: #682773;
    box-shadow: none
}

.profile-button:active {
    background: #682773;
    box-shadow: none
}

.back:hover {
    color: #682773;
    cursor: pointer
}

.labels {
    font-size: 11px
}

.add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8
}

     /* Navbar Styling */
     .navbar {
            position: fixed; /* Fix the navbar at the top */
            top: 0;
            left: 0;
            width: 100%; /* Stretch the navbar to full width */
            height: 75px;
            background-color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1); /* Add subtle shadow */
            z-index: 1000; /* Ensure it stays above other content */
        }

        .icon img {
            height: 200px; /* Adjust logo size */
            top: -90px;
        }

        .menu ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            margin-top: -76px;
        }

        .menu ul li {
            margin-left: 20px;
        }

        .menu ul li a {
            text-decoration: none;
            color: black;
            font-size: 16px;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        .menu ul li a:hover {
            color: #ff7200;
        }

        /* Search Box Styling */
        .search {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-top: -130px;
        }

        .srch {
            height: 35px;
            padding: 5px 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .btn {
            height: 35px;
            padding: 5px 15px;
            background-color: #ff7200;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #e56700;
        }

        /* Settings Menu Styles */
        .settings-container {
            position: relative;
            left: -70px;
            margin-top: -123px;
        }

        .settings-btn {
            font-size: 24px;
            color: black;
            cursor: pointer;
            border: none;
            background: none;
        }

        .settings-dropdown {
            display: none;
            position: absolute;
            right: 0;
            background-color: white;
            min-width: 150px;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
            border-radius: 5px;
        }

        .settings-dropdown a {
            color: black;
            padding: 10px 15px;
            text-decoration: none;
            display: block;
            font-size: 14px;
        }

        .settings-dropdown a:hover {
            background-color: #f1f1f1;
        }

        /* Show dropdown on hover */
        .settings-container:hover .settings-dropdown {
            display: block;
        }
  </style>
  
</head>
<body>

<div class="navbar">
        <div class="icon">
            <img src="../photo/Paucek.jpg" alt="Logo" class="logo-img" style=" ;position: relative; left:50px;"> <!-- Your logo image -->
        </div>

        <div class="menu">
            <ul>
                <li><a href="#">HOME</a></li>
                <li><a href="#">ABOUT</a></li>
                <li><a href="#">SERVICE</a></li>
                <li><a href="#">DESIGN</a></li>
                <li><a href="#">CONTACT</a></li>
            </ul>
        </div>

        <div class="search">
            <input class="srch" type="search" name="" placeholder="Type to text">
            <a href="#"> <button class="btn">Search</button></a>
        </div>

        <!-- Settings Menu -->
        <div class="settings-container">
            <button class="settings-btn">
                <ion-icon name="settings-outline"></ion-icon>
            </button>
            <div class="settings-dropdown">
                <a href="admin_profile.php">
                    <ion-icon name="person-outline"></ion-icon> Profile
                </a>
                <a href="../index.php">
                    <ion-icon name="log-out-outline"></ion-icon> Logout
                </a>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
  
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">Edogaru</span><span class="text-black-50">edogaru@mail.com.my</span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control" placeholder="first name" name="name"></div>
                    <div class="col-md-6"><label class="labels">Middle Name</label><input type="text" class="form-control" name="mname" placeholder="Middle Name"></div>
                    <div class="col-md-6"><label class="labels">Surname</label><input type="text" class="form-control" name="surname" placeholder="surname"></div>
                    <div class="col-md-6"><label class="labels">Age</label><input type="text" class="form-control" name="age" placeholder="age"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" class="form-control" placeholder="enter phone number" name="number"></div>
                    <div class="col-md-12"><label class="labels">Address </label><input type="text" class="form-control" placeholder="enter address" name="address"></div>
                    
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Country</label><input type="text" class="form-control" placeholder="country" name="country"></div>
                    <div class="col-md-6"><label class="labels">State/Region</label><input type="text" class="form-control" name="state" placeholder="state"></div>
                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
            </div>
        </div>
        
    </div>
</div>
</div>
</div>
<script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css"></script>
  <script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src = "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
