<?php
namespace app\common;

use snoweddy\src\library\Verification;

class Validator extends Verification
{
	protected static $placeholder = 'ab';
	/*
	 * 创建一个验证
	 * data:验证的数据
	 * rule:验证规则
	 * err_message:错误字段名
	 */
	public static function make($data, $rule, $err_message)
	{
		return self::validator($data, $rule, $err_message);
	}	
}