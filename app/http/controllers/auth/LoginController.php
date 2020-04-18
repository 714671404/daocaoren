<?php

namespace app\http\controllers\auth;

use snoweddy\src\base\Controller;

class LoginController extends Controller
{
	public function show()
	{
		return $this->view('auth/login');
	}
}