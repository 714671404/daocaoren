<?php
namespace app\http\controllers\auth;

use snoweddy\src\base\Controller;
use app\http\models\User;

class LoginController extends Controller
{
	public function show()
	{
		return $this->view('auth/login');
	}

	public function login()
    {
	    $user = new User();
	    $result = $user->login_user($_POST['username'], $_POST['password']);
	    if (count($result) !== 0) {
	        $_SESSION['id'] = $result['id'];
            $_SESSION['name'] = $result['name'];
            $_SESSION['username'] = $result['username'];
            $_SESSION['avatar'] = $result['avatar'];
            return $this->redirect('/');
        }
    }
}