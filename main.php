<?php

//

require_once __DIR__ . '/DAOs/BulletinBoardDAO.php';

$dbConnectionString = 'mysql:host=localhost;dbname=bulletinBoard;charset=utf8';
$dbPassword = "";
$dbUser = "root";

$dao = new \DAOs\BulletinBoardDAO($dbConnectionString, $dbUser, $dbPassword);

echo "hi";