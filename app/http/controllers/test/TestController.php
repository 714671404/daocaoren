<?php
namespace app\http\controllers\test;

use app\http\models\User;
use snoweddy\src\base\Controller;
use app\http\models\Test as TestModel;
use snoweddy\src\library\Upload;

class TestController extends Controller
{
    protected $test;
    public function __construct()
    {
        $this->test = new TestModel();
        parent::__construct();
    }
    public function index()
    {
        return view('test/index');
    }
    public function upload()
    {
        $result = Upload::upload_image($_FILES['file'], '/upload');
        return view('test/index', $result);
    }
}