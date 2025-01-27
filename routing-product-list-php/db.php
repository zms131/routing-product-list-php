<?php
$host = 'localhost';       // Database host
$dbname = 'shop';          // Database name
$username = 'root';        // Database username
$password = '';            // Database password

try {
    // Create a new PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Set error mode
} catch (PDOException $e) {
    die("Could not connect to the database: " . $e->getMessage());
}
?>
