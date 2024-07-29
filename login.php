<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check username and password (This is a basic example, in practice, you should hash passwords and perform proper validation)
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Example validation
    if ($username === 'user' && $password === 'userpassword') {
        // Set user type in session for student
        $_SESSION['userType'] = 'user';
        
        // Redirect student to clubs.php
        header("Location: index.php");
        exit;
    } elseif ($username === 'admin' && $password === 'adminpassword') {
        // Set user type in session for admin
        $_SESSION['userType'] = 'admin';
        
        // Redirect admin to clubsadmin.php
        header("Location: index.php");
        exit;
    } else {
        // Invalid login credentials
        $error = "Invalid username or password";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calm in minutes </title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- FontAwesome via CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
    <section class="header">
        <nav>
            <a href="index.html"><img src="logo.jpg"></a>
            <div class="nav-links" id="navLinks">
                <!-- You can use the "fas" prefix for solid icons -->
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                <li>
                    <a href="index.php"><b>HOME</b></a></li>
                    <li><a href="about.php"><b>ABOUT US</b></a></li>
                    <li><a href="services.php"><b>SERVICES</b></a></li>
                    <li><a href="resources.php"><b>RESOURCES</b></a></li>
                    <li><a href="medication.php"><b>MEDICATION</b></a></li>
                    <li><a href="gethelp.php"><b>GET HELP</b></a></li>
                    
                </ul>
            </div>
            <i class="fa fa-bars" onClick="showMenu()"></i> 
        </nav>
        <!-- Login Form -->
        <div class="login-form">
            <form method="POST" action="connect.php">
                <h2>Login</h2>
                <div class="input-group">
                    <label for="username">username</label>
                    <input type="text" id="username" name="username" required>
                </div>
                
                <div class="input-group">
                    <label for="password">password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                
                <div class="radio-group">
                    <label for="username">user</label><br>
                    <label class="radio">
                        <input type="radio" value="admin" name="userType" required>Admin
                        <span></span>
                    </label>
                    <label class="radio" style="margin-left: 20px;">
                        <input type="radio" value="user" name="userType" required checked>Users
                        <span></span>
                    </label>
                    <label class="radio" style="margin-left: 20px;">
                        <input type="radio" value="guide" name="userType" required checked>Guide
                        <span></span>
                    </label>
                </div>
                <br>
                <button type="submit" class="btn">Login</button>
            </form>
            <p class="or">
                -----------or-----------
                <br><br>continue with
            </p>
            <div class="icons">
                <i class="fab fa-google"></i>
            </div>
        </div>
        
    </section>
    

 <section class = "footer">
    <h4>About Us</h4>
    <p>Founded on a mission of compassion, our organization is dedicated to providing accessible and empathetic mental health support
        <br>.With a team of experienced professionals, we strive to empower individuals on their journey to mental well-being.     
<div class="icons">
        <i class="fab fa-facebook"></i>
        <i class="fab fa-twitter"></i>
        <i class="fab fa-instagram"></i>
        <i class="fab fa-linkedin"></i>
    </div>
 </section>



    <script>
        var navLinks = document.getElementById("navLinks");
        function showMenu(){
            navLinks.style.right = "0";
        }
        function hideMenu(){
            navLinks.style.right = "-200px";
        }
    </script>
</body>
</html>