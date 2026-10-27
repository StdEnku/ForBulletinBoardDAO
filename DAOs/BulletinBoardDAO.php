<?php

namespace DAOs;

/*
    [警告]
    このクラスはを初期化する際は
*/

class BulletinBoardDAO {
    private \PDO $_pdo;

    public function __construct(\PDO $pdo) {
        $this->_pdo = $pdo;
    }
}

