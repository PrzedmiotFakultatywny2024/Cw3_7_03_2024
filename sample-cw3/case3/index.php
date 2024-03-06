<?php
session_start(); // Rozpoczęcie sesji

// Sprawdzenie, czy formularz został wysłany
if (isset($_GET['produkt']) && !empty($_GET['produkt'])) {
    // Dodanie produktu do listy zakupów w sesji
    if (!isset($_SESSION['lista_zakupow'])) {
        $_SESSION['lista_zakupow'] = array();
    }
    $_SESSION['lista_zakupow'][] = $_GET['produkt'];
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Lista Zakupów</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Lista Zakupów</h1>
<form action="index.php" method="GET">
    <input type="text" name="produkt" placeholder="Nazwa produktu">
    <button type="submit">Dodaj do listy</button>
</form>

<?php
// Wyświetlenie listy zakupów, jeśli istnieje
if (isset($_SESSION['lista_zakupow']) && count($_SESSION['lista_zakupow']) > 0) {
    echo "<ul>";
    foreach ($_SESSION['lista_zakupow'] as $produkt) {
        echo "<li>" . htmlspecialchars($produkt) . "</li>";
    }
    echo "</ul>";
}
?>
</body>
</html>
