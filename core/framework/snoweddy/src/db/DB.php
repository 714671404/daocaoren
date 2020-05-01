<?php
namespace snoweddy\src\db;

use PDO;

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
    }

    /*
     * 执行一条sql语句，返回受影响行数
     */
    public function exec($sql)
    {
        return parent::exec($sql);
    }
    /*
     * 执行一条sql语句，以PDOStatement 对象范湖结果集
     */
    public function query($sql)
    {
        $data = [];
        foreach (parent::query($sql) as $key => $val) $data[$key] = $val;
        return $data;
    }
}