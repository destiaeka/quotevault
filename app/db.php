<?php
$host = getenv('DB_HOST') ?: 'db';
$user = getenv('DB_USER') ?: 'user';
$pass = getenv('DB_PASS') ?: 'password';
$dbname = getenv('DB_NAME') ?: 'quotevault';

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
?>
