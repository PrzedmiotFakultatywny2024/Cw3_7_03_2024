<?php
require_once "config.php";

// Tworzenie obiektu bazy danych
$database = new Database();
$db = $database->getConnection();

// Sprawdzenie, czy połączenie jest nawiązane
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

// Wykonanie zapytania
$query = "SELECT * FROM nazwa_tabeli";
$result = $db->query($query);

if ($result->num_rows > 0) {
    // Przetwarzanie wyników
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["nazwa_kolumny"]. "<br>";
    }
} else {
    echo "0 results";
}

// Zamknięcie połączenia
$db->close();
?>
