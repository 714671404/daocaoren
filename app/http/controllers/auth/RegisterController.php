<?php

namespace app\http\controllers\auth;

use snoweddy\src\base\Controller;
use app\http\models\User;
use app\common\Verification;

class RegisterController extends Controller
{
	use Verification;
	
	public function show()
	{
		dd(strpos('user|pass', '.'));
		return $this->view('auth/register');
	}
	
	public function test()
	{
		echo 1;
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