<?php
namespace snoweddy\src\db;

use PDO;
use PDOException;

class DB extends PDO
{
    /*
     * 初始化属性
     */
    public static $_instance = null;
    protected $dbh;
    protected $dns;

    public function __construct()
    {
        try {
            $dbConfig = config('config.db');
            $this->dns = sprintf(
                '%s:host=%s;dbname=%s;charset=%s;port=%s;',
                $dbConfig['connection'],
                $dbConfig['host'],
                $dbConfig['dbname'],
                $dbConfig['charset'],
                $dbConfig['port']
            );
            $options = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
            parent::__construct($this->dns, $dbConfig['user'], $dbConfig['pass'], $options);
        } catch (PDOException $e) {
            die("<h3>Database connection failed: <span  style='color: red;'>" . $e->getMessage() . "</span></h3>");
        }
    }

    /*
     * 执行一条sql语句，返回受影响行数
     */
//    public function exec($sql)
//    {
//        return parent::exec($sql);
//    }

    /*
     * 执行一条sql语句，以PDOStatement 对象范湖结果集
     */
    public function query($sql)
    {
        $data = [];
        $result = parent::query($sql);
        if ($result) {
            foreach ($result as $key => $val)
                $data[$key] = $val;

            return $data;
        } else {
            return [false];
        }
    }

    /*
     * 准备要执行的语句，并返回语句对象
     */
//    public function prepare($sql, array $data)
//    {
//        $sth = parent::prepare($sql);
//        $sth->execute($data);
//        return $sth->fetchAll();
//    }
}