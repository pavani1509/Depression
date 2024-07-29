<!DOCTYPE html>
<html lang="en">
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
    <section class="sub-header">
        <nav>
            <a href="index.html"><img src="logo.jpg"></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.php"><b>HOME</b></a></li>
                    <li><a href="about.php"><b>ABOUT US</b></a></li>
                    <li><a href="services.php"><b>SERVICES</b></a></li>
                    <li><a href="resources.php"><b>RESOURCES</b></a></li>
                    <li><a href="medication.php"><b>MEDICATION</b></a></li>
                    <li><a href="gethelp.php"><b>GET HELP</b></a></li>
                    
                    <?php if (isset($_SESSION['username'])): ?>
                        <?php if ($_SESSION['userType'] === 'admin'): ?>
                            <li><a href="index.php"><b>ADMIN</b></a></li>
                        <?php else: ?>
                            <li><a href="index.php"><b>STUDENT</b></a></li>
                        <?php endif; ?>
                        <li><a href="logout.php"><b>LOGOUT</b></a></li>
                    <?php else: ?>
                        <li><a href="login.php"><b>LOGIN</b></a></li>
                    <?php endif; ?>
                </ul>
            </div>
            <i class="fa fa-bars" onClick="showMenu()"></i> 
        </nav>
        <h1>Our Services</h1>
    </section>

    <!-- Course Section -->
    <section class="course">
        <p>Embracing Mental Wellness Together. Supporting You Every Step of the Way. Your Journey to Emotional Balance Starts Here.</p>
        <div class="row">
            <div class="course-col">
                <h3>Counseling</h3>
                <p>
                    Counseling services offer confidential support through audio and video calls, 
                    providing a flexible and accessible way to receive professional guidance and therapy from the comfort of your own space.
                </p>
                <button onclick="app()" style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; font-size: 16px; transition: background-color 0.3s ease;">Select</button>
            </div>
            <div class="course-col">
                <h3>Psychiatric Services</h3>
                <p>
                    Discover psychiatric services integrating therapy, medication management, and holistic practices. 
                    Our approach fosters mental well-being through personalized treatment plans, promoting a balanced and resilient mind-body connection.
                </p>
                <button onclick="ps()" style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; font-size: 16px; transition: background-color 0.3s ease;">Select</button>
                </div>
            <div class="course-col">
                <h3>Physical Wellness Programs</h3>
                <p>
                    Our physical wellness program combines yoga, meditation, and fitness activities designed to support mental health. 
                    Engage in practices that nurture both body and mind, promoting overall well-being and resilience.
                </p>
                <button onclick="pw()" style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; font-size: 16px; transition: background-color 0.3s ease;">Select</button>
            
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <section class="footer">
        <h4>About Us</h4>
        <p>Founded on a mission of compassion, our organization is dedicated to providing accessible and empathetic mental health support. With a team of experienced professionals, we strive to empower individuals on their journey to mental well-being.</p>
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
        
        function app(){
            window.location.href = "Appointment.html";
        }
        function ps(){
            window.location.href = "ps.html";
        }
        function pw(){
            window.location.href = "pw.html";
        }
    </script>
</body>
</html>
