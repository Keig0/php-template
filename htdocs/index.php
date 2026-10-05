<?php
$pdo = new PDO(
    sprintf('mysql:host=%s;dbname=%s;charset=utf8mb4', getenv('DB_HOST'), getenv('DB_NAME')),
    getenv('DB_USER'),
    getenv('DB_PASSWORD'),
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);
$version = $pdo->query('SELECT VERSION()')->fetchColumn();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>php-template</title>
</head>
<body>
  <h1>動作確認</h1>
  <p>PHP <?= PHP_VERSION ?> / MariaDB <?= htmlspecialchars($version) ?></p>
</body>
</html>
