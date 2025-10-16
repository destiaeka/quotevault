<?php
require 'db.php';

$author = $_POST['author'];
$text = $_POST['text'];

if ($author && $text) {
    $stmt = $conn->prepare("INSERT INTO quotes (author, text) VALUES (?, ?)");
    $stmt->bind_param("ss", $author, $text);
    $stmt->execute();
}

header("Location: index.php");
exit;
?>
