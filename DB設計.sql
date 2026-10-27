#[DB作成]
#CREATE DATABASE bulletinBoard;

#[テーブル作成]
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

#-------------------------------------------------------------------
#[ユーザー追加]
INSERT INTO account (name, age, gender, is_exists_flag)
VALUES ('伊藤', 23, 0, 1);

#[コメント追加]
INSERT INTO comment (account_id, date, content, is_exists_flag) 
VALUES (1, '2026-06-07 12:30:00', 'hogehoge', 1);

#--------------------------------------------------------------------
#[ユーザー削除]
UPDATE account SET is_exists_flag = 0 WHERE id = 1;

#[コメント削除]
#idからコメント削除
UPDATE comment SET is_exists_flag = 0 WHERE id = 1;

#ユーザーidからコメント削除
UPDATE comment SET is_exists_flag = 0 WHERE account_id = 1;

#[コメント修正]
UPDATE comment SET content = "fixed comment" WHERE id = 1;