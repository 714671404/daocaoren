<?php
namespace app\http\controllers\user;

use app\http\models\User;
use snoweddy\src\base\Controller;

class UserController extends Controller
{
    protected $user_model;

    public function __construct()
    {
        $this->user_model = new User();
        parent::__construct();
    }
    public function index($id)
    {
        $data = $this->user_model->get_user($id);
        return view('user/personal_info', $data);
    }
}