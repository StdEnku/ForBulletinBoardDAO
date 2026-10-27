<?php

namespace DAOs;

class BulletinBoardDAO {
    private \PDO $_pdo;

    public function __construct(string $dbConnectionString, string $dbUser, string $dbPassword) {
        $this->_pdo = new \PDO(
            $dbConnectionString,
            $dbUser,
            $dbPassword
        );
    }
}