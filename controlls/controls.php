<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../Tagebuch/style_Teamspace.css">
</head>
<body>
<div id="TeamspaceContainer">
    <div id="Diary-part">
        <div id="loginForm">
            <h2>Login</h2>
            <form id="formLogin">
                <label for="username"></label><input type="text" id="username" name="username" placeholder="Benutzername">
                <label for="password"></label><input type="password" id="password" name="password" placeholder="Passwort">
                <button type="submit">Anmelden</button>
            </form>
        </div>
    </div>
</div>
<script src="loginControls.js"></script>
</body>
</html>
