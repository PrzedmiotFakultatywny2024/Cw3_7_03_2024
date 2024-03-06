<?php
require_once "config.php";

$database = new Database();
$db = $database->getConnection();

if (isset($_POST['createTable'])) {
    $createTableSQL = "CREATE TABLE IF NOT EXISTS TournamentResults (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        playerName VARCHAR(30) NOT NULL,
        score INT(3) NOT NULL,
        date TIMESTAMP
    )";

    if ($db->query($createTableSQL) === TRUE) {
        echo "Tabela TournamentResults została stworzona.";
    } else {
        echo "Błąd przy tworzeniu tabeli: " . $db->error;
    }
}

if (isset($_POST['fillTable'])) {
    $players = [
        ['John Doe', 100],
        ['Jane Doe', 95],
        ['Max Smith', 90],
        ['Alex Johnson', 85],
        ['Chris Lee', 80],
        ['Mike Brown', 75],
        ['Sarah Miller', 70],
        ['Linda Davis', 65],
        ['James Wilson', 60],
        ['Patricia Anderson', 55]
    ];

//    foreach ($players as $player) {
//        $stmt = $db->prepare("INSERT INTO TournamentResults (playerName, score) VALUES (?, ?)");
//        $stmt->bind_param("si", $player[0], $player[1]);
//        $stmt->execute();
//    }


$stmt = $db->prepare("INSERT INTO TournamentResults (playerName, score) VALUES (?, ?)");

foreach ($players as $player) {
    $stmt->bind_param("si", $player[0], $player[1]);
    $stmt->execute();
}

echo "Dodano przykładowe dane do tabeli TournamentResults.";

echo "Dodano przykładowe dane do tabeli TournamentResults.";
}

if (isset($_POST['showTable'])) {
    $query = "SELECT id, playerName, score FROM TournamentResults";
    $result = $db->query($query);

    if ($result->num_rows > 0) {
        echo "<table border='1'><tr><th>ID</th><th>Nazwa Gracza</th><th>Wynik</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["id"]."</td><td>".$row["playerName"]."</td><td>".$row["score"]."</td></tr>";
        }
        echo "</table>";
    } else {
        echo "Tabela TournamentResults jest pusta lub nie istnieje.";
    }
}

$db->close();
?>

<form method="post">
    <button name="createTable">Stwórz Tabelę</button>
    <button name="fillTable">Wypełnij Tabelę</button>
    <button name="showTable">Pokaż Tabelę</button>
</form>
