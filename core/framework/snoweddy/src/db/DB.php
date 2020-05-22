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


    private function __construct()
    {
        $this->dbConfig =  config('config.db');
        $this->options = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
        if ($this->dbConfig['connection'] === 'mysql') {
            $this->connMysql();
        } else if ($this->dbConfig['connection'] === 'sqlite') {
            $this->connSqlite();
        }
    }

    public static function init()
    {
        if (self::$_instance === null)
            self::$_instance = new self();

        return self::$_instance;
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
     * 连接sqlite
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
            foreach ($this->options as $key => $val) {
                $this->setAttribute($key, $val);
            }
        } catch (PDOException $e) {
            die("<h3>Database connection failed: <span  style='color: red;'>" . $e->getMessage() . "</span></h3>");
        }
    }
}