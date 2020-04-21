<?php

namespace app\http\controllers\auth;

use snoweddy\src\base\Controller;
use app\http\models\User;
use app\common\Validator;

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
		$a = $this->validator([
			'name' => '夏',
			'username' => 'snoweddy',
			'password' => 'yuefei12'
		]);
		dd($a);
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
		return Validator::make($data, [
			'name' => 'required|min:3|max:25',
			'username' => 'required|min:6|max:25',
			'password' => 'required|min:6|max:25'
		], [
			'name' => '昵称',
			'username' => '账号',
			'password' => '密码'
		]);
	}
}