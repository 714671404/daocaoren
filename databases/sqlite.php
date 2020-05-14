<?php
$db = new SQLite3('daocaoren.db');

$sql = <<<EOF
    CREATE TABLE users (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        name TEST,
        username VARCHAR,
        price INT,
        created_at INTEGER
    );
EOF;
$db->exec($sql);
$db->exec("INSERT INTO users(name, price, created_at) VALUES('Audi', 52642, time())");
$db->exec("INSERT INTO users(name, price, created_at) VALUES('Mercedes', 57127, time())");
$db->exec("INSERT INTO users(name, price, created_at) VALUES('Skoda', 9000, time())");
$db->exec("INSERT INTO users(name, price, created_at) VALUES('Volvo', 29000, time())");
$db->exec("INSERT INTO users(name, price, created_at) VALUES('Bentley', 350000, time())");
$db->exec("INSERT INTO users(name, price, created_at) VALUES('Citroen', 21000, time())");
$db->exec("INSERT INTO users(name, price, created_at) VALUES('Hummer', 41400, time())");
$db->exec("INSERT INTO users(name, price, created_at) VALUES('Volkswagen', 21600, time())");

$res = $db->query('SELECT * FROM users');
while ($row = $res->fetchArray()) {
    echo "{$row['id']} {$row['name']} {$row['price']} {$row['created_at']} \n";
}
//try {
//    $pdo = new PDO('sqlite:'.__DIR__.'/databases/test.db');
//} catch(PDOException $e) {
//    die($e->getMessage());
//}
//
//$res = $pdo->query("SELECT * FROM users");
//foreach ($res as $val) {
//    print_r($val); echo '<br>';
//}