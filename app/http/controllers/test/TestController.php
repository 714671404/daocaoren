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
        $data = [
            'id' => 1,
            'title' => '基于谷歌最新AAC架构打造的Android MVVM开发框架，使用该框架可以快速开发一个高质量、易维护的Android应用',
            'text' => '读完《平凡的世界》，心里久久不能平静。除了对人生苦难难以平复之外，对路遥笔下几个主人公的遭遇也是念念不忘。趁着自己一颗还没有冰冷的心，书中故事里',
            'img' => '/images/banner/banner_3.jpg',
            'url' => '/article/1',
            'name' => '碧海蓝天',
            'comment' => 48,
            'attention' => 200,
            'time' => "2020-5-21"
        ];
        return response($data);
        $this->view('test/index');
    }
    public function upload()
    {
        $result = Upload::upload_image($_FILES['file'], '/upload');
        $this->view('test/index', $result);
    }
}