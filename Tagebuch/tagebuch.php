<?php

session_start(); // Session starten

require_once "Datenbank.php";

// Prüfen, ob Logout-Aktion ausgeführt wurde
if (isset($_GET['logout'])) {
    session_destroy();  // Zerstöre die Session
    header("Location: anmeldung.php"); // Weiterleitung zur Anmeldeseite
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
        header("Location: anmeldung.php");
        exit();
    }
}

// Weiter im Code nur, wenn der Benutzer bereits angemeldet ist
if (!isset($_SESSION['username'])) {
    header("Location: anmeldung.php");
    exit();
}

$username = $_SESSION['username'];
$db = new Datenbank();

// Abrufen von Einträgen mit Seitennummerierung
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$limit = 3;
$offset = ($page - 1) * $limit;

$eintraege = $db->getEintraegePaged($username, $limit, $offset);

// Anzahl aller Einträge ermitteln für die Paginierung
$totalEntries = count($db->getEintrag($username));
$totalPages = ceil($totalEntries / $limit);

?>


<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tagebuch</title>
    <link rel="stylesheet" href="Css/tagebuchcss.css">


    <style>

        .pagination{
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .pagination a {
            color: #007bff;
            padding: 6px 12px;
            margin: 0 4px;
            text-decoration: none;
            border: 1px solid #ddd;
            border-radius: 4px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .pagination a:hover,
        .pagination a:focus {
            background-color: #007bff;
            color: white;
            border-color: #007bff;
        }

        .pagination a.active {
            background-color: #007bff;
            color: white;
            border-color: #007bff;
        }
    </style>


</head>
<body>

<header>
    <div id="header-content">
        <label><?php echo $username ?></label>
        <button type="button" onclick="logout()">Logout</button>
    </div>
</header>

<div class="diary-container">
    <form id="diaryForm" method="POST" action="addeintrag.php">
        <label for="Name">Benutzername:</label>
        <input type="text" id="Name" name="Name" value="<?php echo htmlspecialchars($username); ?>" readonly>
        <label for="arbeitsstunden">Stunden:</label>
        <input type="text" id="arbeitsstunden" name="arbeitsstunden" required>
        <label for="beschreibung">Tätigkeit:</label>
        <input type="text" id="beschreibung" name="beschreibung" required>
        <label for="Datum">Datum:</label>
        <input type="date" id="Datum" name="Datum" required>
        <button type="submit">Eintrag hinzufügen</button>
    </form>
</div>

<div class="table-container">
    <form method="POST" action="deleteeintrag.php">
        <div class='filter-container'>
            <select class='filter-select' name="filterBy">
                <option value="select">Wähle</option>
                <option value="Benutzername">Benutzername</option>
                <option value="Datum">Datum</option>
                <option value="Stunden">Stunden</option>
            </select>
            <select class='filter-select2' name="sortOrder">
                <option value="select">Wähle</option>
                <option value="Aufwärts">Aufwärts</option>
                <option value="Abwärts">Abwärts</option>
            </select>
            <button class='filter-button' onclick="filter_entries()">Filter</button>
        </div>

        <div id="entriesContainer" class="entries-container">
            <table class="entries-table" border="1">
                <tr>
                    <th><input type="checkbox" onclick="checkAll(this)"></th>
                    <th>Benutzername</th>
                    <th>Datum</th>
                    <th>Stunden</th>
                    <th>Tätigkeit</th>
                </tr>
                <?php
                foreach ($eintraege as $eintrag) {
                    echo "<tr>";
                    echo "<td><input type='checkbox' name='delete_ids[]' value='{$eintrag['EintragID']}'></td>";
                    echo "<td>" . htmlspecialchars($eintrag['Name']) . "</td>";
                    echo "<td>" . htmlspecialchars($eintrag['Datum']) . "</td>";
                    echo "<td>" . htmlspecialchars($eintrag['arbeitsstunden']) . "</td>";
                    echo "<td>" . htmlspecialchars($eintrag['beschreibung']) . "</td>";
                    echo "</tr>";
                }
                ?>
            </table>
        </div>

        <div class="pagination">
            <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                <a href="?page=<?= $i ?>"><?= $i ?></a>
            <?php endfor; ?>
        </div>

        <?php
        if ($username === "admin") {
            echo "<button type='submit'>Einträge löschen</button>";
        } else {
            echo "<button type='submit' class='disabled-button' disabled>Einträge löschen</button>";
        }
        ?>
    </form>
</div>

</div>


<script src="diary.js"></script>
<script>

    function checkAll(elem) {
        var checkboxes = document.querySelectorAll('input[type="checkbox"]');
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i] != elem) checkboxes[i].checked = elem.checked;
        }
    }

    function filter_entries(){

    }

    function logout() {
        window.location.href = '?logout=true'; // URL für die Abmelde-Seite
    }
</script>



</body>
</html>


