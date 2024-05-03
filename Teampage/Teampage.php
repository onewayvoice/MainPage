<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Golfomobilmeister</title>
    <link rel="icon" href="../Navbar/NavbarBilder/logo_bild.jpg">
    <link rel="stylesheet" href="TeampageCSS/teampage.css">
    <link rel="stylesheet" href="../Navbar/NavbarCSS/navbar.css">
</head>
<body>
<div class="teampage-Container">
    <div class="nav-bar">
        <div class="logo">
            <a href="../Mainpage/Mainpage.php">
                <img id="nav-bar-logo" src="../Mainpage/MainpageBilder/nav_bar_logo.PNG"
                     alt="Eine illustration eines Golfautos. Darunter steht noch das Wort Car.">
            </a>
        </div>
        <div class="menu-punkte"><!-- navigations punkte -->
            <a href="../Golfocar/Golfcar.php">Golfcar</a>
            <a href="#">Team</a>
            <a href="../Tagebuch/Teamspace.php" target="_blank">Tagebuch</a>
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
            <a href="../Golfocar/Golfcar.php">Golfcar</a>
            <a href="/Teampage/Teampage.php">Team</a>
            <a href="../controlls/controls.php">Controls</a>
        </div>
    </div>

    <!-- Breadcrumb -->
    <nav class="breadcrumb" id="teamPageBreadCrumb">
        <a href="../Mainpage/Mainpage.php">Startseite</a>
        <a href="" style="font-weight: bold">&nbsp;Team</a>
    </nav>

    <!-- Unternehmenswerte -->
    <div class="container">
        <div class="teamwerte">
            <h2>Unsere<br>Unternehmenswerte</h2><br>
            <p>Wir schaffen Mehrwert für unsere Kunden.</p><br>
            <p>Wir arbeiten sicher.</p><br>
            <p>Wir geben Vertrauen und Wertschätzung.</p><br>
            <p>Wir sind nachhaltig.</p><br>
        </div>

        <div class="bild-container" id="teambild">
            <img src="../preview_querkant.jpg" alt="Bildbeschreibung">
        </div>
    </div>

    <!-- Teammitglieder -->
    <div class="team-mitglied">
        <img src="/Teampage/TeampageBilder/Matthi.jpg" alt="[NAME]" class="team-mitglied-bild">
        <div class="team-mitglied-info">
            <h3>Matthias Zelger</h3>
            <p class="team-mitglied-rolle">Projektleiter</p>
            <p>*Irgenda Text*</p>
        </div>
    </div>

    <div class="team-mitglied">
        <img src="/Teampage/TeampageBilder/Miggi.jpg" alt="[NAME]" class="team-mitglied-bild">
        <div class="team-mitglied-info">
            <h3>Miguel Angel Gasser</h3>
            <p class="team-mitglied-rolle">Webdesigner</p>
            <p>Miguel nimmt neben dem Webdesign auch die Rolle des Vize Projektleiters ein. Seine Jahre lange Erfahrung
                im Bereich der Websiten entwicklung
                war einer der Hauptgründe, dass wir die Website fertigstellen konnten.</p>
        </div>
    </div>

    <div class="team-mitglied">
        <img src="/Teampage/TeampageBilder/Vid.jpg" alt="[NAME]" class="team-mitglied-bild">
        <div class="team-mitglied-info">
            <h3>David Erlacher</h3>
            <p class="team-mitglied-rolle">Automechaniker</p>
            <p>Miguel nimmt neben dem Webdesign auch die Rolle des Vize Projektleiters ein. Seine Jahre lange Erfahrung
                im Bereich der Website Entwicklung
                war einer der Hauptgründe, dass wir die Website fertigstellen konnten.</p>
        </div>
    </div>

    <div class="team-mitglied">
        <img src="/Teampage/TeampageBilder/Daniel.jpg" alt="[NAME]" class="team-mitglied-bild">
        <div class="team-mitglied-info">
            <h3>Daniel Stocker</h3>
            <p class="team-mitglied-rolle">Webdesigner</p>
            <p>LOL</p>
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