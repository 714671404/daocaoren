<?php
$db = new SQLite3('daocaoren.db');

// 创建用户列表
$sql = <<<EOF
CREATE TABLE users(
    id INTEGER PRIMARY KEY AUTOiNCREMENT,
    name VARCHAR(80),
    username VARCHAR(80),
    password VARCHAR(80),
    email VARCHAR(80),
    phone VARCHAR(80),
    avatar VARCHAR(255) default ('default.jpg'),
    created_at datetime TIMESTAMP default (datetime('now', 'localtime')),
    updated_at datetime TIMESTAMP default (datetime('now', 'localtime'))
);
EOF;
$db->exec($sql);
// 创建文章表
$sql = <<<EOF
CREATE TABLE articles(
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    user_id INTEGER,
    title VARCHAR(255),
    text TEXT,
	comment INTEGER,
	collect INTEGER,
	awesome INTEGER,
    created_at datetime TIMESTAMP default (datetime('now', 'localtime')),
    updated_at datetime TIMESTAMP default (datetime('now', 'localtime'))
);
EOF;
$db->exec($sql);

// user与article字典表
$sql = <<<EOF
CREATE TABLE user_article(
	u_id INTEGER,
	a_id INTEGER
);
EOF;
$db->exec($sql);

// https://blog.csdn.net/lm1622/article/details/77950133
