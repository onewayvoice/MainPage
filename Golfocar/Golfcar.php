<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Golfomobilmeister</title>
    <link rel="icon" href="../Navbar/NavbarBilder/logo_bild.jpg">
    <link rel="stylesheet" href="GolfcarCSS/Golfcar.css">
    <link rel="stylesheet" href="../Navbar/NavbarCSS/navbar.css">
</head>

<body>

<div class="golfcar-container">
    <div class="nav-bar">
        <div class="logo"><!-- logo eini tian -->
            <a href="../Mainpage/Mainpage.php">
                <img id="nav-bar-logo" src="../Mainpage/MainpageBilder/nav_bar_logo.PNG"
                     alt="Eine illustration eines Golfautos. Darunter steht noch das Wort Car.">
            </a>
        </div>
        <div class="menu-punkte"><!-- navigations punkte -->
            <a href="#">Golfcar</a>
            <a href="../Teampage/Teampage.php">Team</a>
            <a href="../controlls/controls.php">controls</a>
        </div>

        <!-- Hamburger Icon -->
        <div class="hamburger" onclick="toggleMenu()">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <!-- Dropdown Menu -->
        <div class="nav-links" id="navbar">
            <a href="../Mainpage/Mainpage.php">Startseit</a>
            <a href="/Teampage/Teampage.php">Team</a>
        </div>

    </div>
    <!-- Breadcrumb -->
    <nav class="breadcrumb" id="teamPageBreadCrumb">
        <a href="../Mainpage/Mainpage.php">Startseite</a>
        <a href="" style="font-weight: bold">&nbsp;Golfcar</a>
    </nav>
    <div class="introduction">
        <div class="first-img">
            <img class="img-first" src="../Mainpage/MainpageBilder/preview_hochkant.jpg" alt="">
        </div>
        <div class="first-content">
            <div class="first-title">OUR GOLFCAR</div>
            <div class="first-text">
                To successfully tackle the task at hand, we needed to ensure that the car we chose would meet the
                requirements in every aspect. Therefore, we delved deeply into selecting the components, opting only for
                the finest parts. This selection was made with utmost care and consideration of various factors to
                ensure
                that the vehicle not only met the highest quality standards but also delivered optimal performance.
                After
                many hours of planning and deliberation, and utilizing our best knowledge, we meticulously assembled the
                vehicle to ensure it fully met the demands of our task.
            </div>
        </div>
    </div>

    <div class="container">
        <div class="box">
            <div class="imgBx">
                <img src="GolfcarImage/raspberry.jpg">
            </div>
            <div class="content">
                <div class="conten-div">
                    <h2>Raspberry 4</h2>
                    <p>The Raspberry Pi 4 Model B is an affordable single-board computer that, in its most basic form,
                        lacks a case and is roughly the size of a credit card. It is commonly used for projects related
                        to
                        computer programming, electronics, and DIY endeavors .
                    </p>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="imgBx">
                <img src="GolfcarImage/motor.jpg">
            </div>
            <div class="content">
                <div class="conten-div">
                    <h2>Motors</h2>
                    <p>For the motors, we have opted for four direct current (DC) motors, which are controlled using a
                        PWM
                        signal.
                    </p>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="imgBx">
                <img src="GolfcarImage/reifen.jpg">
            </div>
            <div class="content">
                <div class="conten-div">
                    <h2>Wheels</h2>
                    <p>For the tires, we have opted for high-grip tires to ensure that the car has sufficient traction.
                    </p>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="imgBx">
                <img src="GolfcarImage/cam.jpg">
            </div>
            <div class="content">
                <div class="conten-div">
                    <h2>Camera</h2>
                    <p>The camera we have chosen is a wide-angle camera to ensure that everything in front of the car
                        can
                        be detected with certainty.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="box">
            <div class="imgBx">
                <img src="GolfcarImage/batterie.jpg">
            </div>
            <div class="content">
                <div class="conten-div">
                    <h2>Battery</h2>
                    <p>We opted for a 7.2V 3000mAh battery because it provides a balanced combination of voltage and
                        capacity that meets the requirements of our application.
                    </p>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="imgBx">
                <img src="GolfcarImage/fotoresistor.jpg">
            </div>
            <div class="content">
                <div class="conten-div">
                    <h2>Photoresistor</h2>
                    <p>We need a resistor to detect when the light is off in order to activate the lamps.
                    </p>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="imgBx">
                <img src="GolfcarImage/lichter.jpg">
            </div>
            <div class="content">
                <div class="conten-div">
                    <h2>Lamps</h2>
                    <p>We chose these lights because they offer a very bright illumination for their price, and we are
                        acquiring multiple units.
                    </p>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="imgBx">
                <img src="GolfcarImage/treiberplatine.jpg">
            </div>
            <div class="content">
                <div class="conten-div">
                    <h2>Driver Board</h2>
                    <p>We chose this driver board because we have DC motors that need to be used at various speeds and
                        directions.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="box">
            <div class="imgBx">
                <img src="GolfcarImage/Ultrasonic-Sensor.jpg">
            </div>
            <div class="content">
                <div class="conten-div">
                    <h2>Ultrasonic Sensor</h2>
                    <p>We opted for 5 ultrasonic sensors because we require multiple units, and they are widely
                        available
                        and commonly used.
                    </p>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="imgBx">
                <img src="https://images.unsplash.com/photo-1579639782539-15cc6c0be63f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80">
            </div>
            <div class="content">
                <div class="conten-div">
                    <h2>Image Title</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi accusamus molestias quidem
                        iusto.
                    </p>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="imgBx">
                <img src="https://images.unsplash.com/photo-1603984362497-0a878f607b92?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=700&q=80">
            </div>
            <div class="content">
                <div class="conten-div">
                    <h2>Image Title</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi accusamus molestias quidem
                        iusto.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="../toggle.js"></script>
</body>

<footer>
    <div class="footer-content">
        <div class="footer-section about">
            <h3>About Us</h3>
            <p>We're a small team of four enthusiasts, determined to create something new despite our limited
                experience. Each of us brings unique skills and perspectives to creatively solve challenges together.
                We believe in hard work, teamwork, and learning from mistakes to grow as a team and achieve our goals.
            </p>
        </div>
        <div class="footer-section contact">
            <h3>Contact Us</h3>
            <p>Email: golfomobilmeister.fallmerayer@gmail.com</p>
        </div>
        <div class="footer-section links">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="../Mainpage/Mainpage.php">Home</a></li>
                <li><a href="../Golfocar/Golfcar.php">Golfcar</a></li>
                <li><a href="../Teampage/Teampage.php">Team</a></li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        &copy; 2024 MyWebsite | Designed by Me
    </div>
</footer>
</html>