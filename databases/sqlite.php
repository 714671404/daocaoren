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
    user_id integer,
    title VARCHAR(255),
    text TEXT,
    created_at datetime TIMESTAMP default (datetime('now', 'localtime')),
    updated_at datetime TIMESTAMP default (datetime('now', 'localtime'))
);
EOF;
$db->exec($sql);
