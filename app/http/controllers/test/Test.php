<?php
namespace app\http\controllers\test;

use snoweddy\src\base\Controller;
use snoweddy\src\db\DB;

class Test extends Controller
{
    protected $db;
    public function __construct()
    {
        $this->db = new DB();
    }
    public function index()
    {
        $sql = sprintf(
            'select * from users where id=%s',
            '16'
        );
        return json_encode($this->db->query($sql));
    }
}