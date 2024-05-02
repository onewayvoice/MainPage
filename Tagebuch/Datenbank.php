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

    public function addEintrag($name, $beschreibung, $hours, $date) {
        $sql = "INSERT INTO eintrag (name, beschreibung, hours, date) VALUES (?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$name, $beschreibung, $hours, $date]);
        return $this->pdo->lastInsertId();  // Gibt die ID des neu eingefügten Eintrags zurück
    }
}

?>
