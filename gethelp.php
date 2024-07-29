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
    <title>Calm-in-Minutes</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- FontAwesome via CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        h2 {
            color: #2c3e50; 
            font-family: Arial, sans-serif; 
            text-align: center; 
            margin-top: 50px; 
            font-size: 36px; 
        }
    </style>
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
        <h1>Need Help</h1>
    </section>

<!------------contact us ------>
<h2>Top health centers</h2>
<section class = "location">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3806.88039991428!2d78.33688297493548!3d17.417526383474797!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb947fdee4f5a1%3A0x2ca09b4d2e3a79f!2sContinental%20Hospitals!5e0!3m2!1sen!2sin!4v1718374212964!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15216.943169954337!2d78.4144065871582!3d17.543957!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb8fb5a8fd39cb%3A0x94d6f13437c77365!2sMalla%20Reddy%20Narayana%20Multispeciality%20Hospital!5e0!3m2!1sen!2sin!4v1718374285683!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60903.93781486181!2d78.4070315486328!3d17.4359531!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb9a0450ec1d9d%3A0x3578fe1359b898b5!2sChetana%20Hospital!5e0!3m2!1sen!2sin!4v1718374455665!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3806.642682249407!2d78.50471797493567!3d17.428927283465338!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb99da6942ff39%3A0xb3dfb0fd194bfda5!2sDr%20Samhita%20Psychiatry%20Hospital!5e0!3m2!1sen!2sin!4v1718374628563!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3805.253499872121!2d78.31868512493735!3d17.49540828341028!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb9296b62207af%3A0x30ce0cf90b7e159a!2sHelium%20Mind%20Center!5e0!3m2!1sen!2sin!4v1718374679142!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3806.8028724255614!2d78.4320343749355!3d17.421245383471792!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb9750911c9dd1%3A0x9e6febf268e04970!2sAsha%20Hospital!5e0!3m2!1sen!2sin!4v1718376000313!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
<section class = "contact-us">

    <div class = "row">
        <div class="contact-col">
            <div >
                <i class = "fa fa-home"></i>
                <span>
                    <h5>Hanuman Marg, Nizampet</h5>
                    <p>Hyderabad,Telangana</p>
                </span>
            </div>
            <div >
                <i class = "fa fa-phone"></i>
                <span>
                    <h5>+1 0123456789</h5 >
                    <p>Monday to Saturday 10Am to 6Pm</p>
                </span>
            </div>
            <div >
                <i class = "fa fa-envelope"></i>
                <span>
                    <h5>srinidhikommawar109@gmail.com</h5 >
                    <p>Email us for any query</p>
                </span>
            </div>
        </div>
        
        <div class="contact-col">
            <form action = "form-handler.php" method="post">
            <h3>Feedback</h3>
                <input type = "text" name = "name" placeholder = "Enter your name" required>
                <input type = "email" name = "email" placeholder = "Enter your email address" required>
                <input type = "text" name = "subject" placeholder = "Enter your subject" required>
                <textarea rows = "8" name = "message" placeholder = "Message" required></textarea>
                <button type = "submit" class = "hero-btn red-btn">Send Message</button>
            </form>
        </div>
    </div>

</section>



 <section class = "footer">
    <h4>About Us</h4>
    <p>Discover VNR's legacy of excellence, where innovation meets tradition. 
    With a commitment to <br>fostering brilliance and shaping futures, we empower minds to thrive in a dynamic world of knowledge and opportunity</p>
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
