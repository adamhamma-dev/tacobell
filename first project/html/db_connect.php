<?php
// Database connection parameters
$host = 'localhost'; // Change this to your host if different
$dbname = 'your_database_name'; // Change this to your database name
$username = 'your_username'; // Change this to your MySQL username
$password = 'your_password'; // Change this to your MySQL password

// Establish a connection to the database
try {
    $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
