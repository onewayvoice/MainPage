
<?php

session_start(); // Session starten

require_once "../Tagebuch/Datenbank.php";

// Prüfen, ob Logout-Aktion ausgeführt wurde
if (isset($_GET['logout'])) {
    session_destroy();  // Zerstöre die Session
    header("Location: anmeldungControl.php"); // Weiterleitung zur Anmeldeseite
    exit();
}

// POST-Daten verarbeiten, wenn sie vorhanden sind
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $db = new Datenbank();
    $password_db = $db->getPasswordByUsername($username);

    if ($password == $password_db) {
        // Anmeldung erfolgreich, setze Session-Variable
        $_SESSION['username'] = $username;
        // Keine Umleitung erforderlich, da wir uns bereits auf der Zielseite befinden
    } else {
        // Anmeldung fehlgeschlagen, leite Benutzer zur Anmeldeseite weiter
        header("Location: anmeldungControl.php");
        exit();
    }
}

// Weiter im Code nur, wenn der Benutzer bereits angemeldet ist
if (!isset($_SESSION['username'])) {
    header("Location: anmeldungControl.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="#">
    <title>Controls</title>
    <script>
        const socket = new WebSocket("ws://10.10.30.69:8765");

        socket.onopen = () => document.getElementById("status").innerText = "Connected!";
        socket.onclose = () => document.getElementById("status").innerText = "Disconnected!";
        socket.onerror = () => document.getElementById("status").innerText = "Error!";

        document.addEventListener('keydown', (event) => {
            if (['W', 'A', 'S', 'D'].includes(event.key.toUpperCase())) {
                const data = { key: event.key.toUpperCase(), action: 'down' };
                socket.send(JSON.stringify(data));
            }
        });

        document.addEventListener('keyup', (event) => {
            if (['W', 'A', 'S', 'D'].includes(event.key.toUpperCase())) {
                const data = { key: event.key.toUpperCase(), action: 'up' };
                socket.send(JSON.stringify(data));
            }
        });
    </script>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #6c6767;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .controls {
            text-align: center;
            margin: 20px;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border-radius: 8px;
        }

        #status {
            font-size: 16px;
            color: #333;
            margin-bottom: 10px;
        }

        button {
            background-color: #5f3ddc;
            color: white;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
            height: 40px;
            width: 40px;
            border-radius: 4px;
            margin-top: 10px;
            margin-bottom: 10px;
        }

        button:hover {
            background-color: #5f3ddc;
        }

        button:active {
            background-color: #373b8b;
            box-shadow: 0 2px 3px rgba(0,0,0,0.2) inset;
        }

        .camera {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
            padding: 20px;
            width: auto;
            height: auto;
        }

        #black {
            background-color: black;
            border-radius: 4px;
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            z-index: 0;
        }

        #video {
            position: relative;
            max-width: 100%;
            border-radius: 4px;
            z-index: 1;
        }

        header {
            position: fixed;
            top: 0;
            padding: 10px;
            background-color: #333;
            color: white;
            width: 100%;
            z-index: 1000;
        }

        #header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 0;
            padding: 0 20px;
        }

        .container {
            width: 80%;
            max-width: 800px;
            background: #fff;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border-radius: 8px;
            margin-bottom: 20px;
        }

        #logout, #toggle {
            width: auto;
        }
    </style>
</head>

<body>
<header>
    <div id="header-content">
        <label>Controls</label>
        <button type="button" id="logout" onclick="logout()">Home</button>
    </div>
</header>

<!--
<div class="container">
-->
<div class="controls">
    <p id="status">Loading...</p>
    <p>Drücken Sie W, A, S oder D, um die LEDs/Auto zu steuern.</p>

    <div class="bar">
        <button onmousedown="keyAction('W', 'down')" onmouseup="keyAction('W', 'up')">W</button>
        <button onmousedown="keyAction('A', 'down')" onmouseup="keyAction('A', 'up')">A</button>
        <button onmousedown="keyAction('S', 'down')" onmouseup="keyAction('S', 'up')">S</button>
        <button onmousedown="keyAction('D', 'down')" onmouseup="keyAction('D', 'up')">D</button>
        <button id="toggle" onclick="blackScreen()">Toggle Cam</button>
    </div>

    <script>
        function logout() {
            window.location.href = '../Mainpage/Mainpage.php';
        }

        function keyAction(key, action) {
            const data = { key: key.toUpperCase(), action: action };
            socket.send(JSON.stringify(data));
        }

        function blackScreen() {
            var blackdiv = document.getElementById("black");
            if (blackdiv.style.zIndex === '2') {
                blackdiv.style.zIndex = '-1';
            } else {
                blackdiv.style.zIndex = '2';
            }
        }


    </script>
    <!--
</div>
-->

    <div class="camera">
        <div id="black"></div>
        <img id="video" src="http://10.10.30.69:5000/video_feed" alt="video">
    </div>
</div>
</body>
</html>
