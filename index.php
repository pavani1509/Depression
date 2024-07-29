<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calm-In-Minutes</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- FontAwesome via CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        /* Internal CSS for dropdown */
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            background-color: #3e8e41;
        }
    </style>
</head>
<body>
    <div class="colo">
    <section class="header">
        <title>Depress free</title>
        <nav>
            <a href="index.html"><img src="logo.jpg"></a>
            <div class="nav-links" id="navLinks">
                <!-- You can use the "fas" prefix for solid icons -->
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.php"><b>HOME</b></a></li>
                    <li><a href="about.php"><b>ABOUT US</b></a></li>
                    <li><a href="services.php"><b>SERVICES</b></a></li>
                    <li class="dropdown">
                        <a href="#" class="dropbtn"><b>RESOURCES</b></a>
                        <div class="dropdown-content">
                            <a href="moodtracker.html" draggable="true" class="draggable" id="resource4">Mood tracker</a>
                            <a href="Webinars.html" draggable="true" class="draggable" id="resource1">Webinars&Workshops </a>
                            <a href="Meditation.html" draggable="true" class="draggable" id="resource2">Meditation</a>
                            <a href="yoga.html" draggable="true" class="draggable" id="resource3">Yoga and Exercise</a>
                            <a href="Therapy.html" draggable="true" class="draggable" id="resource3">Cognitive Behavioural Theraphy</a>
                        </div>
                    </li>
                    <li><a href="http://127.0.0.1:9100"><b>MEDICATION</b></a></li>
                    <li><a href="gethelp.php"><b>GET HELP</b></a></li>
                    
                    <?php if (isset($_SESSION['username'])): ?>
                        <!-- If user is logged in, replace login with admin, guide, or user -->
                        <?php if ($_SESSION['userType'] === 'admin'): ?>
                            <li><a href="index.php"><b>ADMIN</b></a></li>
                        <?php elseif ($_SESSION['userType'] === 'guide'): ?>
                            <li><a href="index.php"><b>GUIDE</b></a></li>
                        <?php else: ?>
                            <li><a href="index.php"><b>USER</b></a></li>
                        <?php endif; ?>
                        <!-- Add logout option after admin, guide, or user link -->
                        <li><a href="logout.php"><b>LOGOUT</b></a></li>
                    <?php else: ?>
                        <!-- If user is not logged in, display login link -->
                        <li><a href="login.php"><b>LOGIN</b></a></li>
                    <?php endif; ?>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <div class="text-box">
            <h1><b>A few minutes could change your whole day</b></h1>
            <p>Meditation has been shown to help people stress less, focus more, and even sleep better. Calm-in-minutes makes meditation simple.<br />
             We'll teach you the life-changing skills of meditation and mindfulness in just a few minutes a day.</p>
            <a href="" class="hero-btn"><b>Visit Us To Know More</b></a>
        </div>
    </section>
    <!----services---->
    <section class="course">
        <h1>Services</h1>
        <p>Embracing Mental Wellness Together.Supporting You Every Step of the Way.Your Journey to Emotional Balance Starts Here.</p>
        <div class="row">
            <div class="course-col">
                <h3>Counseling</h3>
                <p>
                Counseling services offer confidential support through audio and video calls, 
                providing a flexible and accessible way to receive professional guidance and therapy from the comfort of your own space.
                </p>
            </div>
            <div class="course-col">
                <h3>Psychiatric Services</h3>
                <p>
                Discover psychiatric services integrating therapy, medication management, and holistic practices. 
                Our approach fosters mental well-being through personalized treatment plans, promoting a balanced and resilient mind-body connection.
                </p>
            </div>
            <div class="course-col">
                <h3>Physical Wellness Programs</h3>
                <p>
                Our physical wellness program combines yoga, meditation, and fitness activities designed to support mental health. 
                Engage in practices that nurture both body and mind, promoting overall well-being and resilience.
                </p>
            </div>
        </div>
    </section>
    

    <section class="facilities">
        <h1>Resources</h1>
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
                <h3>Therapy</h3>
                <p>Empowering healing and growth through compassionate therapy tailored to your journey towards mental well-being.</p>
            </div>
        </div>
    </section>

    <section class="testimonials">
        <h1>What Our Clients Say</h1>
        <p>Voices of Trust: Stories that Speak of Excellence</p>
        <div class="row">
            <div class="testimonial-col">
                <img src="user1.png">
                <div>
                    <p>This app has been a game-changer for me! The meditation sessions are so calming,
                         and the mood tracker helps me stay on top of my emotions. Highly recommend!.</p>
                    <h3>David</h3>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-alt"></i>
                </div>
            </div>
            <div class="testimonial-col">
                <img src="user2.png">
                <div>
                    <p>Love the daily reminders for self-care activities! It's like having a supportive friend in my pocket. 
                        Just what I needed to manage stress and prioritize my mental health..</p>
                    <h3>Christine</h3>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
            </div>
        </div>
    </section>

    <section class="cta">
        <h1>Our mission is to provide every person <br /> access to lifelong mental health support.</h1>
        <a href="" class="heros-btn">CONTACT US</a>
    </section>
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
        function showMenu() {
            navLinks.style.right = "0";
        }
        function hideMenu() {
            navLinks.style.right = "-200px";
        }
        
        document.addEventListener("DOMContentLoaded", function() {
    // Function to show the mobile navigation menu
    function showMenu() {
        var navLinks = document.getElementById("navLinks");
        navLinks.style.right = "0";
    }

    // Function to hide the mobile navigation menu
    function hideMenu() {
        var navLinks = document.getElementById("navLinks");
        navLinks.style.right = "-200px";
    }

    // Handle drag and drop functionality for resources
    const listItems = document.querySelectorAll('.draggable');
    const list = document.querySelector('.dropdown-content');
    let draggedItem = null;

    listItems.forEach(item => {
        item.addEventListener('dragstart', () => {
            draggedItem = item;
            setTimeout(() => {
                item.classList.add('dragging');
            }, 0);
        });

        item.addEventListener('dragend', () => {
            setTimeout(() => {
                item.classList.remove('dragging');
                draggedItem = null;
            }, 0);
        });

        list.addEventListener('dragover', e => {
            e.preventDefault();
            const afterElement = getDragAfterElement(list, e.clientY);
            const draggable = document.querySelector('.dragging');
            if (afterElement == null) {
                list.appendChild(draggedItem);
            } else {
                list.insertBefore(draggedItem, afterElement);
            }
        });

        function getDragAfterElement(container, y) {
            const draggableElements = [...container.querySelectorAll('.draggable:not(.dragging)')];

            return draggableElements.reduce((closest, child) => {
                const box = child.getBoundingClientRect();
                const offset = y - box.top - box.height / 2;
                if (offset < 0 && offset > closest.offset) {
                    return { offset: offset, element: child };
                } else {
                    return closest;
                }
            }, { offset: Number.NEGATIVE_INFINITY }).element;
        }
    });
});
