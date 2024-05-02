<?php
require_once "Datenbank.php";
$name = "";
$beschreibung = "";
$hours = "";
$date = "";
if(isset($_POST['name'], $_POST['beschreibung'], $_POST['hours'], $_POST['date'])) {
    $name = $_POST['name'];
    $beschreibung = $_POST['beschreibung'];
    $hours = $_POST['hours'];
    $date = $_POST['date'];

    $db = new Datenbank();
    $db->addEintrag($name, $beschreibung, $hours, $date);
} else {
    echo json_encode(["message" => "Nicht alle Daten wurden übermittelt"]);
}
