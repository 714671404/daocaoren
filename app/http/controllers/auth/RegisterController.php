<?php

namespace app\http\controllers\auth;

use snoweddy\src\base\Controller;

class RegisterController extends Controller
{
	
	public function show()
	{
		return $this->view('auth/register');
	}
	
	public function register()
	{
		
	}
}