<?php

namespace app\http\controllers\auth;

use snoweddy\src\base\Controller;
use app\http\models\User;

class RegisterController extends Controller
{
	
	public function show()
	{		
		return $this->view('auth/register');
	}
	
	public function register()
	{
		$user = new User();
		if ($_POST['name'] && $_POST['username'] && $_POST['password']) {
			$result = $user->add_user([
				'name' => $_POST['name'],
				'username' => $_POST['username'],
				'password' => $_POST['password']
			]);
			return response([
				'data' => $result,
				'status' => 200
			]);
		}
	}
}