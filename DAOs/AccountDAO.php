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
require_once __DIR__ . '/DAOException.php';

class AccountDAO {
    private \PDO $_pdo;

    public function __construct(\PDO $pdo) {
        $this->_pdo = $pdo;
    }

    public function Create(\DTOs\AccountDTO $dto) {
        $isIdNull = $dto->GetId() === null;
        if (!$isIdNull)
            throw new DAOException('DAOのCREATEメソッドへ入力可能なDTOの主キーはnullでなければなりません。');

        $query = '
            INSERT INTO account (name, password_hash, age, gender, is_exists_flag) 
            VALUES (:name, :passwordHash, :age, :gender, :isExistsFlag);
        ';

        $podStatement = $this->_pdo->prepare($query);
        $podStatement->BindValue(':name', $dto->GetName());
        $pdoStatement->bindValue(':passwordHash', $dto->GetPasswordHash());
        $podStatement->BindValue(':age', $dto->GetAge());
        $podStatement->BindValue(':gender', $dto->GetGender());
        $podStatement->BindValue(':isExistsFlag', $dto->GetIsExistsFlag());
        $podStatement->Execute();
    }

    public function Update(\DTOs\AccountDTO $dto) {
        $isIdNull = $dto->GetId() === null;
        if ($isIdNull)
            throw new DAOException('DAOのUpdateメソッドへ入力可能なDTOの主キーはnull以外でなければなりません。');

        $query = '
            UPDATE account SET 
            name = :name,
            password_hash = :passwordHash,
            age = :age,
            gender = :gender,
            is_exists_flag = :isExistsFlag
            WHERE id = :id;
        ';

        $podStatement = $this->_pdo->prepare($query);
        $podStatement->BindValue(':id', $dto->GetId());
        $podStatement->BindValue(':name', $dto->GetName());
        $pdoStatement->BindValue(':passwordHash', $dto->GetPasswordHash());
        $podStatement->BindValue(':age', $dto->GetAge());
        $podStatement->BindValue(':gender', $dto->GetGender());
        $podStatement->BindValue(':isExistsFlag', $dto->GetIsExistsFlag());
        $podStatement->Execute();
    }
}