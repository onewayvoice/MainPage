<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="Css/anmeldung.css">
</head>

<body>

<header>
    <div id="header-content">
        <label>Login</label>
        <button type="button" onclick="logout()">Home</button>
    </div>
</header>

<div class="login-container">
    <form action="controls.php" method="post">
        <label for="username_input">Username:</label>
        <input  type="text" name="username" required>
        <label for="password_input">Password:</label>
        <input type="password" name="password" required>
        <button type="submit">Anmelden</button>
    </form>
</div>

<script>
    function logout() {
        window.location.href = '../Mainpage/Mainpage.php'; // URL für die Abmelde-Seite
    }
</script>
</body>
</html>