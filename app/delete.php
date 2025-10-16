<?php
require 'db.php';

$id = $_POST['id'];
if ($id) {
    $stmt = $conn->prepare("DELETE FROM quotes WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
}

header("Location: index.php");
exit;
?>
