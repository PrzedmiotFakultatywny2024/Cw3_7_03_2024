<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Tworzenie połączenia
$conn = new mysqli($servername, $username, $password, $dbname);

// Sprawdzanie połączenia
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
