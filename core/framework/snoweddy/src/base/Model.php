<?php
namespace snoweddy\src\base;

use snoweddy\src\db\DB;

class Model
{
    /*
     * 初始化属性
     */
    protected $model;
    protected $table;
    protected $primary = 'id';
    protected $db;
    protected $data;

    public function __construct()
    {
        $this->model = $this->model ?? substr(strrchr(get_class($this), '\\'), 1);
        $this->table = $this->table ?? strtolower($this->model) . 's';
        $this->db = DB::init();
    }

    /*
     * 执行一条sql语句返回受影响行数，如果没有受影响的行则返回0
     */
    protected function exec($sql)
    {
        return $this->db->exec($sql);
    }

    /*
     * 执行 SQL 语句，以 PDOStatement 对象形式返回结果集
     */
    protected function query($sql)
    {
        return $this->db->query($sql);
    }

    /*
     * 返回最后插入行的ID或序列值
     */
    protected function lastInsertId()
    {
        return $this->db->lastInsertId();
    }

    /*
     * 查找全部数据
     */
    public function all()
    {
        $sql = sprintf(
            "SELECT * from %s",
            $this->table
        );
        foreach ($this->query($sql) as $key => $val) {
            $this->data[$key] = $val;
        }
        return $this->data;
    }

}