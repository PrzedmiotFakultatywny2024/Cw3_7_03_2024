<?php
session_start(); // Rozpoczęcie sesji

// Przechowywanie danych w sesji
$_SESSION['username'] = "JanKowalski";
$_SESSION['email'] = "jan.kowalski@example.com";

echo "Dane sesji zapisane.";
?>