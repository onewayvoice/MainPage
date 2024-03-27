<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Golfomobilmeister</title>
    <link rel="icon" href="../Navbar/NavbarBilder/logo_bild.jpg">
    <link rel="stylesheet" href="MainpageCSS/Mainpage.css">
    <link rel="stylesheet" href="../Navbar/NavbarCSS/navbar.css">

</head>

<body>
<div class="nav-bar">
    <div class="logo"><!-- logo eini tian -->
        <a href="Mainpage.php">
            <img id="nav-bar-logo" src="MainpageBilder/nav_bar_logo.PNG" alt="Eine illustration eines Golfautos. Darunter steht noch das Wort Car.">
        </a>
    </div>
    <div class="menu-punkte"><!-- navigations punkte -->
        <a href="../Golfocar/Goflcar.php">Golfcar</a>
        <a href="../Teampage/Teampage.php">Team</a>
        <a href="../Tagebuch/Teamspace.php" target="_blank">Tagebuch</a>
    </div>
</div>
<div id="container">
    <div class="title-bar"> <!-- titel mini text & erstes bild drinnen -->
        <div class="title">
            <p id="pre-title">WELCOME TO THE PROJECT</p>
            <p id="title">The Golf Cart<br>REBELLION</p>
            <p id="title-text">
                In a world where chaos ruled, golf carts united, wheeling through greens, streets, and malls alike.
                With their silent motors and leisurely pace, they conquered hearts and spaces, reigning as the unlikely
                heroes of transportation grace. So, let's putt-putt our way to a smoother world, one cart at a time!
            </p>
            <div id="button-div">
                <button onclick="scrollToBottom()" id="title-button">Get in Touch</button>   <!-- um später zum kontakt formular zu kommen / maybee socials zu verlinken -->
            </div>
        </div>
        <div class="title-img-div">
            <img id="title-img" src="MainpageBilder/preview_hochkant.jpg" alt="text">
        </div>
    </div>  <!-- titel und 'erste' anzeige mit bild und mini text-->

    <div id="info-project">
        <p id="info-project-title">The Journey into the Unknown:<br>A Glimpse Behind the Scenes of Autonomous Golf</p>
        <p id="info-projct-text">
            This website is the product of an incredible challenge undertaken by a small group of pioneers: They
            were tasked with building a self-driving car capable of finding a golf ball and skillfully maneuvering
            it into a hole. Sounds exciting, doesn't it? Well, that's exactly what it was!

            This platform is not only a showcase for their project but also a place where tech enthusiasts can come
            together to chat about the fascinating world of autonomous driving and robotics. From the highs to the
            lows, from the victories to the setbacks - everything is shared here.

            So, dive in, become part of this exciting journey, and let yourself be inspired by the boundless
            creativity and unwavering enthusiasm of this group! Who knows, you might even discover your own passion
            for technology and innovation along the way.
        </p>
    </div>  <!-- kurzer text (ironisch) auch mit überschirft-->

    <div id="erfolge-top">
        <div class="erfolge-geld">
            <div class="svg-container">
                <img class="svg-image" src="MainpageSVG/money-cash.svg" alt="SVG">
            </div>
            <div class="text-container">
                <h2 class="title">Budget</h2>
                <p class="word">500€</p>
            </div>
        </div>
        <div class="erfolge-zeit">
            <div class="svg-container">
                <img class="svg-image" src="MainpageSVG/stopwatch.svg" alt="SVG">
            </div>
            <div class="text-container">
                <h2 class="title">Time</h2>
                <p class="word">200h</p>
            </div>
        </div>
        <div class="erfolge-errors">
            <div class="svg-container">
                <img class="svg-image" src="MainpageSVG/not-found-error-alert.svg" alt="SVG">
            </div>
            <div class="text-container">
                <h2 class="title">Errors</h2>
                <p class="word">623</p>
            </div>
        </div>
    </div>
    <div id="erfolge-bottom">
        <div class="erfolge-success">
            <div class="svg-container">
                <img class="svg-image" src="MainpageSVG/success.svg" alt="SVG">
            </div>
            <div class="text-container">
                <h2 class="title">Milestones</h2>
                <p class="word">121</p>
            </div>
        </div>
        <div class="erfolge-coffee">
            <div class="svg-container">
                <img class="svg-image" src="MainpageSVG/coffee-cup.svg" alt="SVG">
            </div>
            <div class="text-container">
                <h2 class="title">Coffee.Breaks</h2>
                <p class="word">89</p>
            </div>
        </div>
    </div>

</div>

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
            <p>Email: example@example.com</p>
        </div>
        <div class="footer-section links">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="../Golfocar/Goflcar.php">Golfcar</a></li>
                <li><a href="../Teampage/Teampage.php">Team</a></li>
                <li><a href="../Tagebuch/Teamspace.php" target="_blank">Tagebuch</a></li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom"><!-- &copy; ist das logo mit dem C -->
        &copy; 2024 MyWebsite | Designed by Me
    </div>

</footer>
<script src="MainpageJS/Mainpage.js"></script>
</html>