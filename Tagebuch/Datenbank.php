<?php

class Datenbank extends \PDO
{
    private $host = 'localhost';
    private $db   = 'tagebuch';
    private $user = 'root';
    private $pass = '';
    private $charset = 'utf8mb4';
    private $pdo;

    /**
     * Konstruktor, stellt eine Verbindung zur Datenbank her.
     */
    public function __construct() {
        $dsn = "mysql:host=$this->host;dbname=$this->db;charset=$this->charset";
        $options = [
            \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
            \PDO::ATTR_EMULATE_PREPARES   => false,
        ];

        try {
            $this->pdo = new \PDO($dsn, $this->user, $this->pass, $options);
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }
    }

    public function getPerson($name) {
        $sql = "SELECT * FROM person WHERE name = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$name]);
        return $stmt->fetch() ?: false;  // Sicherstellen, dass false zurückgegeben wird, wenn kein Ergebnis vorhanden ist
    }

    public function getEintrag($name) {
        $sql = "SELECT * FROM eintrag WHERE name = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$name]);
        return $stmt->fetchAll() ?: [];  // Ein leeres Array zurückgeben, wenn kein Eintrag gefunden wird
    }

    public function getAllEintraege() {
        $sql = "SELECT * FROM eintrag";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function addEintrag($Name, $beschreibung, $arbeitsstunden, $Datum) {
        $sql = "INSERT INTO eintrag (Name, beschreibung, arbeitsstunden, Datum) VALUES (?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$Name, $beschreibung, $arbeitsstunden, $Datum]);
        return $this->pdo->lastInsertId();  // Gibt die ID des neu eingefügten Eintrags zurück
    }

    public function deleteEintraege($ids) {
        $in  = str_repeat('?,', count($ids) - 1) . '?';
        $sql = "DELETE FROM eintrag WHERE EintragID IN ($in)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($ids);
    }
    public function getUserByUsername($username) {
        $sql = "SELECT * FROM person WHERE name = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$username]);
        return $stmt->fetch();  // Gibt false zurück, wenn kein Benutzer gefunden wird
    }

    public function getPasswordByUsername($username) {
        $sql = "SELECT passwort FROM person WHERE name = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$username]);
        $result = $stmt->fetchColumn();  // Gibt das Passwort zurück oder false, wenn kein Benutzer gefunden wird
        return $result;
    }

    public function getEintraegePaged($username, $limit, $offset) {
        if ($username === "admin") {
            $sql = "SELECT * FROM eintrag LIMIT ? OFFSET ?";
        } else {
            $sql = "SELECT * FROM eintrag WHERE name = ? LIMIT ? OFFSET ?";
        }
        $stmt = $this->pdo->prepare($sql);
        if ($username === "admin") {
            $stmt->execute([$limit, $offset]);
        } else {
            $stmt->execute([$username, $limit, $offset]);
        }
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }





}

?>
