<?php

namespace DTOs;

// 同一性を持つComment情報用DTO
class CommentDTO {
    // #region privateメンバ
    private ?int $_id;// DBからの取得値でないならnullとなる
    private int $_accountId;
    private \DateTimeImmutable $_date;
    private string $_content;
    private bool $_isExistsFlag;
    // #endregion

    // #region コンストラクタ
    public function __construct(?int $id, int $accountId, \DateTimeImmutable $date, string $content, bool $isExistsFlag) {
        $this->_id = $id;
        $this->_accountId = $accountId;
        $this->_date = $date;
        $this->_content = $content;
        $this->_isExistsFlag = $isExistsFlag;
    }
    // #endregion

    // #region ゲッター
    public function GetId() : ?int {
        return $this->_id;
    }

    public function GetAccountId() : int {
        return $this->_accountId;
    }

    public function GetDate() : \DateTimeImmutable {
        return $this->_date;
    }

    public function GetContent() : string {
        return $this->_content;
    }

    public function GetIsExistsFlag() : bool {
        return $this->_isExistsFlag;
    }
    // #endregion
}