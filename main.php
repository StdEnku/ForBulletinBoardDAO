<?php

//

require_once __DIR__ . '/DAOs/BulletinBoardDAO.php';

$dbcs = 'mysql:host=localhost;dbname=bulletinBoard;charset=utf8';
$dbUser = "root";
$dbPass = "";

$pdo = new \PDO($dbcs, $dbUser, $dbPass);
$dao = new \DAOs\BulletinBoardDAO($pdo);

echo "hi";