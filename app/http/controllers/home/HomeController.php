<?php
namespace app\http\controllers\home;

use snoweddy\src\base\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('home/index');
    }
}