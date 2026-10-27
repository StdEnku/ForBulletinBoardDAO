<?php

namespace DTOs;

// 同一性を持つAccount情報用DTO
class AccountDTO {
    // #region 定数
    // phpにはenumもtypedefもないので代わりにpublic定数で対応
    public const GENDER_MALE = 0;
    public const GENDER_FEMALE = 1;
    public const GENDER_ETC = 2;
    // #endregion

    // #region private変数
    private ?int $_id;// DBからの取得値でないならnullとなる
    private string $_name;
    private string $_passwordHash;
    private int $_age;
    private int $_gender;
    private bool $_isExistsFlag;
    // #endregion

    // #region コンストラクタ
    public function __construct(?int $id, string $name, string $passwordHash, int $age, int $gender, bool $isExistsFlag) {
        $this->_id = $id;
        $this->_name = $name;
        $this->_passwordHash = $passwordHash;
        $this->_age = $age;
        $this->_gender = $gender;
        $this->_isExistsFlag = $isExistsFlag;
    }
    // #endregion

    // #region ゲッター
    public function GetId() : ?int {
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

    public function GetIsExistsFlag() : bool {
        return $this->_isExistsFlag;
    }
    // #endregion
}