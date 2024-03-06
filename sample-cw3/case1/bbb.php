<?php
session_start(); // Rozpoczęcie sesji

// Odczyt danych z sesji
if (isset($_SESSION['username'])) {
    echo "Witaj, " . $_SESSION['username'] . "!";
} else {
    echo "Sesja nie zawiera danych o nazwie użytkownika.";
}
?>