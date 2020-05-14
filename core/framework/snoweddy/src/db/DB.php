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
    protected $dbConfig = [];
    protected $options;

    public function __construct()
    {
        $this->dbConfig =  config('config.db');
        $this->options = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
        if ($this->dbConfig['connection'] === 'mysql') {
            $this->connMysql();
        } else if ($this->dbConfig['connection'] === 'sqlite') {
            $this->connSqlite();
        }
    }

    /*
     * 连接mysql
     */
    private function connMysql()
    {
        try {
            $this->dns = sprintf(
                '%s:host=%s;dbname=%s;charset=%s;port=%s;',
                $this->dbConfig['connection'],
                $this->dbConfig['host'],
                $this->dbConfig['dbname'],
                $this->dbConfig['charset'],
                $this->dbConfig['port']
            );
            parent::__construct($this->dns, $this->dbConfig['user'], $this->dbConfig['pass'], $this->options);
        } catch (PDOException $e) {
            die("<h3>Database connection failed: <span  style='color: red;'>" . $e->getMessage() . "</span></h3>");
        }
    }

    /*
     * 李连杰sqlite
     */
    private function connSqlite()
    {
        try {
            $this->dns = sprintf(
                '%s:%s',
                $this->dbConfig['connection'],
                APP_PATH . '/databases/' . $this->dbConfig['dbname'] . '.db'
            );
            parent::__construct($this->dns);
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
//    public function query($sql)
//    {
//        $data = [];
//        $result = parent::query($sql);
//        if ($result) {
//            foreach ($result as $key => $val)
//                $data[$key] = $val;
//
//            return $data;
//        } else {
//            return [false];
//        }
//    }

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