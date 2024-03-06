<?php
// Rozpoczęcie sesji
session_start();

// Przypisanie wartości do zmiennej sesji
$_SESSION['username'] = 'JanKowalski';

// Odczyt wartości
echo 'Witaj, ' . $_SESSION['username'];

// Regeneracja ID sesji (zwiększenie bezpieczeństwa)
session_regenerate_id();

// Zakończenie i czyszczenie sesji
session_unset(); // Opcjonalnie, jeśli chcemy usunąć zmienne sesji
session_destroy(); // Kończy sesję

?>
