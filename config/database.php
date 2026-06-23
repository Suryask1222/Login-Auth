<?php
$host = 'localhost';
$dbname = 'auth_system';
$db_user = 'root';
$db_pass = '';

try {
    // Connect to dbd
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $db_user, $db_pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>