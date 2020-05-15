<?php
namespace app\http\controllers\test;

use app\http\models\User;
use snoweddy\src\base\Controller;
use app\http\models\Test as TestModel;

class TestController extends Controller
{
    protected $test;
    public function __construct()
    {
        $this->test = new TestModel();
    }
    public function index()
    {
        $this->view('test/index');
    }
    public function upload()
    {
        $this->upload_image($_FILES['file']);
    }
}