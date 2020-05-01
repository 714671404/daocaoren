<?php

namespace app\http\controllers\auth;

use snoweddy\src\base\Controller;
use app\http\models\User;
use app\common\Validator;

class Register extends Controller
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
			'name' => 'xia',
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
	    // 注册验证开发中
        $data = [
            'name' => $_POST['name'],
            'username' => $_POST['username'],
            'password' => $_POST['password']
        ];
        $result = $this->validator($data);
        if ($result) {
            $user = new User();
            $result = $user->add_user($data);
            // 封装session后继续完成登录功能
            $_SESSION['name'] = $result['name'];
            $_SESSION['username'] = $result['username'];
            return $this->redirect('/');
        } else {
            echo '<script>alert(\'注册信息格式不正确!\');</script>';
            return $this->view('auth/register');
        }
	}

	/*
	 * 退出
	 */
	public function logout()
    {
        session_destroy();
        return $this->redirect('/');
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