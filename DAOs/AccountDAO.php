<?php

/*===========================================================================
    [警告]
    このクラスを使用する場合は以下こテーブルを事前に作成済みでなければならない。

    #genderは0=男性,1=女性,2=その他/未設定
    #is_exists_flugは0=false,1=true

    CREATE TABLE account(
        id INT AUTO_INCREMENT, 
        name VARCHAR(60) NOT NULL, 
        password_hash VARCHAR(256) NOT NULL, 
        age INT NOT NULL,
        gender INT NOT NULL,
        is_exists_flag INT NOT NULL,

        PRIMARY KEY(id)
    );

    CREATE TABLE comment(
        id INT AUTO_INCREMENT,
        account_id INT,
        date DATETIME NOT NULL,
        content VARCHAR(500) NOT NULL,
        is_exists_flag INT NOT NULL,

        PRIMARY KEY(id),
        FOREIGN KEY(account_id) REFERENCES account(id)
    );
===========================================================================*/

namespace DAOs;

require_once __DIR__ . '/DTOs/AccountDTO.php';

class AccountDAO {
    private \PDO $_pdo;

    public function __construct(\PDO $pdo) {
        $this->_pdo = $pdo;
    }

    public function Create(\DTOs\AccountDTO $dto) {
        $query = "
            INSERT INTO account (name, age, gender, is_exists_flag) 
            VALUES (:name, :age, :gender, :isExistsFlag);
        ";

        $pdoStatement = $this->_pdo->prepre($query);
    }
}