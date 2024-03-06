<?php
// Sprawdzenie, czy skrypt został wywołany metodą POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Przypisanie przesłanych danych do zmiennych
    $name = htmlspecialchars($_POST['name']);
    $surname = htmlspecialchars($_POST['surname']);
    $email = htmlspecialchars($_POST['email']);
    $age = htmlspecialchars($_POST['age']);
    $gender = htmlspecialchars($_POST['gender']);
    $country = htmlspecialchars($_POST['country']);

    // Wyświetlenie danych
    echo "<h2>Otrzymane Dane:</h2>";
    echo "<p>Imię: $name</p>";
    echo "<p>Nazwisko: $surname</p>";
    echo "<p>E-mail: $email</p>";
    echo "<p>Wiek: $age</p>";
    echo "<p>Płeć: $gender</p>";
    echo "<p>Kraj: $country</p>";
} else {
    // Wyświetlenie komunikatu, jeśli dane nie zostały przesłane metodą POST
    echo "<p>Dane nie zostały przesłane metodą POST!</p>";
}
?>
