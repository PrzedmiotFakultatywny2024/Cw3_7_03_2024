<?php
class Database {
    private $host = "localhost";
    private $db_name = "nazwa_twojej_bazy_danych";
    private $username = "twoja_nazwa_uzytkownika";
    private $password = "twoje_haslo";
    public $conn;

    // Metoda do nawiązania połączenia
    public function getConnection() {
        $this->conn = null;

        try {
            $this->conn = new mysqli($this->host, $this->username, $this->password, $this->db_name);
        } catch(mysqli_sql_exception $exception) {
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }
}
?>
