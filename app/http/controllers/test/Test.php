<?php
namespace app\http\controllers\test;

use snoweddy\src\base\Controller;
use app\http\models\Test as TestModel;

class Test extends Controller
{
    protected $test;
    public function __construct()
    {
        $this->test = new TestModel();
    }
    public function index()
    {
        $sql = 'select * from users where 1';
        return response($this->test->se($sql));
    }
}