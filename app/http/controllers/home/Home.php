<?php

namespace app\http\controllers\home;

use snoweddy\src\base\Controller;

class Home extends Controller
{
    public function index()
    {
        $this->view('home/index', ['title' => '首页']);
    }
}