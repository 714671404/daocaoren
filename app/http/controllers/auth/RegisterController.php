<?php

namespace app\http\controllers\auth;

use snoweddy\src\base\Controller;
use app\http\models\User;
use app\common\Verification;

class RegisterController extends Controller
{
	
	/*
	 * 展示注册页面
	 */
	public function show()
	{
		return $this->view('auth/register');
	}
	
	public function test()
	{
		return $this->validator([
			'name' => '夏',
			// 'username' => 'snoweddy',
			// 'password' => 'yuefei12'
		]);
	}
	
	/*
	 * 注册
	 */
	public function register()
	{
		$user = new User();
		if ($this->validator([
			'name' => $_POST['name'],
			'username' => $_POST['username'],
			'password' => $_POST['password']
		])) {
			echo 'ok';
		} else {
			echo 'no';
		}
		/*
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
		*/
	}
	
	/*
	 * 调用验证函数
	 */
	protected function validator($data)
	{
		return Verification::validator($data, [
			'name' => 'required|min:3|max:25',
			// 'username' => 'required',
			// 'password' => 'required'
		]);
	}
}