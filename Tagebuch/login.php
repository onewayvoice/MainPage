<?php
require_once ".\Datenbank.php";
$username = "";
$password = "";
if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
}
$db = new Datenbank();
$dbPerson = $db->getPerson($username);
$dbEintrag = $db->getEintrag($username);
$dbAllEintrag = $db->getAllEintraege();
echo '<script src="login.js"></script>
<form id="hoursForm">
        <input type="text" id="name" name="name" value='.$username.' style="display: none" >
        <label for="date">Beschreibung:</label>
        <input type="text" id="beschreibung" name="beschreibung">
        <label for="hours">Arbeitsstunden:</label>
        <input type="number" id="hours" name="hours" min="0">
        <label for="date">Datum:</label>
        <input type="date" id="date" name="date">
        <button type="submit" >Add Entry</button>
    </form>';

if($dbPerson && $dbPerson["passwort"] === $password){ // Überprüfen, ob $dbPerson ein gültiges Array ist
    if($dbPerson["rolle"] === "Administrator"){
        echo '<table>
            <tr>
                <th>Name</th>
                <th>Beschreibung</th>
                <th>Arbeitsstunden</th>
                <th>Datum</th>
            </tr>';
        foreach($dbAllEintrag as $eintrag) {
            echo '<tr>
                <td>'.$eintrag["Name"].'</td>
                <td>'.$eintrag["beschreibung"].'</td>
                <td>'.$eintrag["arbeitsstunden"].'</td>
                <td>'.$eintrag["Datum"].'</td>
              </tr>';
        }
        echo '</table>';
    } else {
        echo '<table>
            <tr>
                <th>Name</th>
                <th>Beschreibung</th>
                <th>Arbeitsstunden</th>
                <th>Datum</th>
            </tr>';
        foreach ($dbEintrag as $eintrag) {
            echo '<tr>
                <td>' . $eintrag["Name"] . '</td>
                <td>' . $eintrag["beschreibung"] . '</td>
                <td>' . $eintrag["arbeitsstunden"] . '</td>
                <td>' . $eintrag["Datum"] . '</td>
              </tr>';
        }
        echo '</table>';
    }
}
?>
