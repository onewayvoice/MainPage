<?php
session_start();

require_once "Datenbank.php";  // Stelle sicher, dass der Pfad korrekt ist.

if (isset($_POST['delete_ids']) && is_array($_POST['delete_ids'])) {
    $db = new Datenbank();

    try {
        $db->deleteEintraege($_POST['delete_ids']);
        header("Location: tagebuch.php"); // Umleitung zurück zur Hauptseite
        exit;
    } catch (Exception $e) {
        echo "Fehler beim Löschen der Einträge: " . $e->getMessage();
        exit;
    }
} else {
    echo "Keine Einträge zum Löschen angegeben oder falsches Datenformat";
    exit;
}
?>

