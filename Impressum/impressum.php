<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Impressum - Golfomobilmeister</title>
    <link rel="icon" href="../Navbar/NavbarBilder/logo_bild.jpg">
    <link rel="stylesheet" href="../Mainpage/MainpageCSS/Mainpage.css">
    <link rel="stylesheet" href="../Navbar/NavbarCSS/navbar.css">
    <link rel="stylesheet" href="../Impressum/impressumDesign.css">
</head>
<body>
<div class="nav-bar">
    <div class="logo">
        <a href="../Mainpage/Mainpage.php">
            <img id="nav-bar-logo" src="../Mainpage/MainpageBilder/nav_bar_logo.PNG"
                 alt="Eine illustration eines Golfautos. Darunter steht noch das Wort Car.">
        </a>
    </div>
    <div class="menu-punkte"><!-- navigations punkte -->
        <a href="../Golfocar/Golfcar.php">Golfcar</a>
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
        <a href="../Mainpage/Mainpage.php">Startseite</a>
        <a href="/Teampage/Teampage.php">Team</a>
    </div>
</div>

<div class="container">
    <div class="legal-info">
        <h1>Impressum</h1>
        <p>Name der Firma: Muster GmbH</p>
        <p>Adresse: Musterstraße 1, 12345 Musterstadt</p>
        <p>Geschäftsführer: Max Mustermann</p>
        <p>Kontakt: <a href="mailto:info@musterfirma.com">info@musterfirma.com</a></p>
        <p>Registergericht: Amtsgericht Musterstadt</p>
        <p>Registernummer: HRB 123456</p>
        <p>Umsatzsteuer-ID: DE123456789</p>
    </div>
</div>

<script src="../toggle.js"></script>
<script src="../Mainpage/MainpageJS/Mainpage.js"></script>

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
