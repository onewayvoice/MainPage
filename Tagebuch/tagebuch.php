v<?php
require_once "Datenbank.php";

// Überprüfen, ob der Benutzer angemeldet ist
if (!isset($_POST['username']) || !isset($_POST['password'])) {
    // Falls nicht, zurück zum Anmeldefenster
    header("Location: anmeldung.php");
    exit();
}

// Wenn der Benutzer angemeldet ist, Datenbankverbindung herstellen
$db = new Datenbank();

// POST-Daten verarbeiten
$username = $_POST['username'];

// Einträge aus der Datenbank abrufen
$eintraege = $db->getEintrag($username);
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tagebuch</title>
    <link rel="stylesheet" href="tagebuchcss.css">
</head>
<body>
<div class="diary-container">
    <form id="diaryForm">
        <label for="username">Benutzername:</label>
        <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($username); ?>" readonly>
        <label for="startDate">Datum Anfang:</label>
        <input type="date" id="startDate" name="startDate" required>
        <label for="endDate">Datum Ende:</label>
        <input type="date" id="endDate" name="endDate" required>
        <label for="activity">Tätigkeit:</label>
        <input type="text" id="activity" name="activity" required>
        <button type="button" onclick="addEntry()">Eintrag hinzufügen</button>
    </form>
</div>

<div id="entriesContainer" class="entries-container">
    <table class="entries-table">
        <tr>
            <th>Benutzername</th>
            <th>Datum Anfang</th>
            <th>Datum Ende</th>
            <th>Tätigkeit</th>
        </tr>
        <?php
        // Einträge aus der Datenbank in die Tabelle einfügen
        foreach ($eintraege as $eintrag) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($eintrag['name']) . "</td>";
            echo "<td>" . htmlspecialchars($eintrag['date']) . "</td>";
            echo "<td>" . htmlspecialchars($eintrag['endDate']) . "</td>";
            echo "<td>" . htmlspecialchars($eintrag['beschreibung']) . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>

<script src="diary.js"></script>
</body>
</html>

