<!DOCTYPE html>
<html lang="en">
<head>
    <title>Package Delivery Monitoring</title>
    <style>
        /* General Body Styles */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
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
            top:-20px;
        }

        .menu ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
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
    <!-- Navbar -->
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
</body>
</html>
