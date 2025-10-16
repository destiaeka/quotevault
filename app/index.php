<?php
require 'db.php';
$result = $conn->query("SELECT * FROM quotes ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>QuoteVault - PHP Dockerized App</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>💬 QuoteVault</h1>
        <form action="add.php" method="POST">
            <input type="text" name="author" placeholder="Author" required>
            <input type="text" name="text" placeholder="Your Quote" required>
            <button type="submit">Add Quote</button>
        </form>

        <div class="quotes">
            <?php while($row = $result->fetch_assoc()): ?>
                <div class="quote">
                    <p>"<?= htmlspecialchars($row['text']); ?>"</p>
                    <small>- <?= htmlspecialchars($row['author']); ?></small>
                    <form action="delete.php" method="POST">
                        <input type="hidden" name="id" value="<?= $row['id']; ?>">
                        <button type="submit" class="delete">Delete</button>
                    </form>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</body>
</html>
