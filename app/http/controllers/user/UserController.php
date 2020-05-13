<?php
namespace app\http\controllers\user;

use snoweddy\src\base\Controller;

class UserController extends Controller
{
    public function index($id)
    {
        $this->view('user/personal_info');
    }
}