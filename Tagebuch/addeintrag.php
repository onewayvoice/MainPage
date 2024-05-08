<?php

session_start();

require_once "Datenbank.php";  // Stelle sicher, dass der Pfad korrekt ist.

// Überprüfe, ob alle erforderlichen POST-Daten vorhanden sind
if (!isset($_POST['Name']) || !isset($_POST['arbeitsstunden']) || !isset($_POST['beschreibung']) || !isset($_POST['Datum'])) {
    echo json_encode(["message" => "Nicht alle Daten wurden übermittelt"]);
    exit;
}

// Überprüfe, ob der Benutzer angemeldet ist
if (!isset($_SESSION['username'])) {
    // Wenn der Benutzer nicht angemeldet ist, leite ihn zur Anmeldeseite weiter
    header("Location: anmeldung.php");
    exit();
}

$db = new Datenbank();  // Erstelle eine neue Instanz der Datenbankverbindung

$Name = $_POST['Name'];
$arbeitsstunden = $_POST['arbeitsstunden'];
$beschreibung = $_POST['beschreibung'];
$Datum = $_POST['Datum'];

// Versuche, den Eintrag zur Datenbank hinzuzufügen
try {
    $db->addEintrag($Name, $beschreibung, $arbeitsstunden, $Datum);
    header("Location: tagebuch.php"); // Umleitung zurück zur Hauptseite nach erfolgreicher Eintragung
} catch (Exception $e) {
    echo "Fehler bei der Datenbankverbindung: " . $e->getMessage();
    exit;
}
?>
