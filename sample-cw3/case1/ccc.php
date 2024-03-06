<?php
session_start(); // Rozpoczęcie sesji

// Usunięcie wszystkich danych sesji
session_unset();

// Zniszczenie sesji
session_destroy();

echo "Sesja zakończona.";
?>