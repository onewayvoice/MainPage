<?php
require 'Datenbank.php'; // Datenbankklasse
require 'Teamspace_PHPFunctions.php'; // Dateiübergreifende Funktionen

$db = new Datenbank();

// Überprüfen, ob die Anmeldedaten gesendet wurden
if(isset($_POST['CurrentPage']) && isset($_POST['username'])){
    $username = $_POST['username'];
    $page = $_POST['CurrentPage'];
        echo json_encode(array('success' => 1, 'entries' => createInformationBox(createTeamspaceTable($db, $username, $page+1), $username, $page+1))); // Functions of Teamspace_PHPFunctions.php
} else {
    echo json_encode(array('success' => 0));
}
?>