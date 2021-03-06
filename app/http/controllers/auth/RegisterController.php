<?php
namespace app\http\controllers\auth;

use snoweddy\src\base\Controller;
use app\http\models\User;
use app\common\Validator;

class RegisterController extends Controller
{
    /*
     * 初始化属性
     */
    protected $user;

    public function __construct()
    {
        $this->user = new User();
        parent::__construct();
    }
	/*
	 * 展示注册页面
	 */
	public function show()
	{
		return view('auth/register');
	}
	
	/*
	 * 注册
	 */
	public function register()
	{
	    // 注册验证开发中
        $data = [
            'name' => trim($_POST['name']),
            'username' => trim($_POST['username']),
            'password' => $_POST['password']
        ];
        $result = $this->validator($data);
        if ($result) {
            $result = $this->user->add_user($data);
            // 封装session后继续完成登录功能
            $_SESSION['id'] = $result['id'];
            $_SESSION['name'] = $result['name'];
            $_SESSION['username'] = $result['username'];
            $_SESSION['avatar'] = $result['avatar'];
            return redirect('/');
        } else {
            echo '<script>alert(\'注册信息格式不正确!\');</script>';
            return view('auth/register');
        }
	}

	/*
	 * 退出
	 */
	public function logout()
    {
        session_destroy();
        return redirect('/');
    }
	
	/*
	 * 验证函数
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