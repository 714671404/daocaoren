<?php
namespace app\http\controllers\auth;

use snoweddy\src\base\Controller;
use app\http\models\User;

class LoginController extends Controller
{
	public function show()
	{
		return view('auth/login');
	}

	public function login()
    {
	    $user = new User();
	    $result = $user->login_user(trim($_POST['username']), $_POST['password']);
	    if (count($result) !== 0) {
	        $_SESSION['id'] = $result['id'];
            $_SESSION['name'] = $result['name'];
            $_SESSION['username'] = $result['username'];
            $_SESSION['avatar'] = $result['avatar'];
            return $this->redirect('/');
        } else {
            echo '<script>alert(\'账户或用户名不正确!\');</script>';
            return view('auth/login');
        }
    }
}