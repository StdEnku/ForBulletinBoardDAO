<?php

namespace DTOs;

// 同一性を持つAccount情報用DTO
class AccountDTO {
    // phpにはenumもtypedefもないので代わりにpublic定数で対応
    public const GENDER_MALE = 0;
    public const GENDER_FEMALE = 1;
    public const GENDER_ETC = 2;

    private int $_id;
    private string $_name;
    private string $_passwordHash;
    private int $_age;
    private int $_gender;
    private bool $_isExistsFlug;

    public function __construct(int $id, string $name, string $passwordHash, int $age, int $gender, bool $isExistsFlug) {
        $this->_id = $id;
        $this->_name = $name;
        $this->_passwordHash = $passwordHash;
        $this->_age = $age;
        $this->_gender = $gender;
        $this->_isExistsFlug = $isExistsFlug;
    }

    public function GetId() : int {
        return $this->_id;
    }

    public function GetName() : string {
        return $this->_name;
    }

    public function GetPasswordHash() : string {
        return $this->_passwordHash;
    }

    public function GetAge() : int {
        return $this->_age;
    }

    public function GetGender() : int {
        return $this->_gender;
    }

    public function GetIsExistsFlug() : bool {
        return $this->_isExistsFlug;
    }
}