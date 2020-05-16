<?php
namespace snoweddy\src\base;

use snoweddy\src\db\DB;

class Model extends DB
{
    /*
     * 初始化属性
     */
    protected $model;
    protected $table;
    protected $primary = 'id';
    protected $db;

    public function __construct()
    {
        $this->model = $this->model ?? substr(strrchr(get_class($this), '\\'), 1);
        $this->table = $this->table ?? strtolower($this->model) . 's';
        parent::__construct();
    }
}