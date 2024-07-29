<?php
session_start();
if (isset($_GET['logout']) && $_GET['logout'] == 'success') {
    echo "<script>alert('Logout Successful');</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calm-In-Minutes</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- FontAwesome via CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
    <section class=" sub-header">
        <nav>
            <a href="index.html"><img src="logo.jpg"></a>
            <div class="nav-links" id="navLinks">
                <!-- You can use the "fas" prefix for solid icons -->
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.php"><b>HOME</b></a></li>
                    <li><a href="about.php"><b>ABOUT US</b></a></li>
                    <li><a href="services.php"><b>SERVICES</b></a></li>
                    <li><a href="resources.php"><b>RESOURCES</b></a></li>
                    <li><a href="medication.php"><b>MEDICATION</b></a></li>
                    <li><a href="gethelp.php"><b>GET HELP</b></a></li>
                    
                <?php if (isset($_SESSION['username'])): ?>
                    <!-- If user is logged in, replace login with admin or student -->
                    <?php if ($_SESSION['userType'] === 'admin'): ?>
                        <a href="index.php"><b>ADMIN</b></a>
                    <?php else: ?>
                        <a href="index.php"><b>STUDENT</b></a>
                    <?php endif; ?>
                    <!-- Add logout option after admin or student link -->
                    <a href="logout.php"><b>LOGOUT</b></a>
                <?php else: ?>
                    <!-- If user is not logged in, display login link -->
                    <a href="login.php"><b>LOGIN</b></a>
                <?php endif; ?>
            </li>
                </ul>
            </div>
            <i class="fa fa-bars" onClick="showMenu()"></i> 
        </nav>
        <h1>Resources</h1>
    </section>

    <!----Course----->
    

     <!---------Facilities------->
     <section class="facilities">
        
        <p>Explore and enjoy hundreds of articles that are intended to educate and inspire.</p>
                <div class="row">
            <div class="facilities-col">
                <img src="mentalhealth.jpg">
                <h3>Wellness Challenges</h3>
                <p>Monthly or weekly challenges designed to promote mental and emotional wellness, with practical tips and progress tracking.</p>
            </div>
            <div class="facilities-col">
                <img src="webinars.jpg">
                <br>
                <br>
                <h3>Webinars</h3>
                <p>Interactive online seminars covering various mental health topics, featuring experts and Q&A sessions.</p>
            </div>
            <div class="facilities-col">
                <img src="theraphy1.jpeg">
                <br>
                <br>
                <br>
                <br>
                <h3>Theraphy</h3>
                <p>Empowering healing and growth through compassionate therapy tailored to your journey towards mental well-being.</p>
            </div>
        </div>
    </section>

    <!------Footer------>
    <section class="footer">
        <h4>About Us</h4>
        <p>Founded on a mission of compassion, our organization is dedicated to providing accessible and empathetic mental health support
            <br>.With a team of experienced professionals, we strive to empower individuals on their journey to mental well-being        
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
