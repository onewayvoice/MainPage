<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style_Teamspace.css">
</head>
<body>
<div id="TeamspaceContainer">
    <div id="Diary-part">
        <div id="loginForm">
            <h2>Login</h2>
            <form id="formLogin">
                <input type="text" id="username" name="username" placeholder="Benutzername">
                <input type="password" id="password" name="password" placeholder="Passwort">
                <button type="submit">Anmelden</button>
            </form>
        </div>

        <div id="userEntries" style="display:none;">
            <button id="logoutButton" onclick="logout()">Log out</button>
            <button id="controlButton" onclick="toggle_Teamspace()">Control</button>
            <h2 id="welcomeText">Logged In</h2>
            <div id="entries"></div>

        </div>
    </div>
    <div id="Control-part" style="display: none">
        <div id="Control-information">
            <div id="Teamspace-CarInterface">
                <div id="Control-Car-VideoContainer">
                    <video id="Teamspace-videoPlayer" controls>
                        <source src="#" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <div id="fallbackMessage">Cam not currently available</div>
                </div>
                <div id="Teamspace-Car-Control">
                    <div></div>
                    <button class="Control-Button">W</button>
                    <div></div>
                    <button class="Control-Button">A</button>
                    <button class="Control-Button">S</button>
                    <button class="Control-Button">D</button>
                </div>
            </div>
            <div id="Teamspace-Settings" style="display: none">

            </div>
        </div>
        <div id="Control-Navigation">
            <button id="logoutButton" onclick="logout()">Log out</button>
            <button id="controlButton" onclick="toggle_Teamspace()">Diary</button>
        </div>
    </div>
</div>
<script src="functions_Teamspace.js"></script>
</body>
</html>
