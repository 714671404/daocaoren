<?php

namespace snoweddy\src\library;

class Verification
{
	// 提示信息占位符
	protected static $placeholder = '{attribute}';
	
	// 预定义提示信息
	protected static $messages = [];
	
	protected static function validator(array $data, array $rule)
	{
		// self::$messages = include APP_PATH . '/resources/lang/en/validator.php';
		$placeholder = '';
		/*
		 * $data = [
		 *     'user' => '夏天',
		 *     'username' => 'snoweddy',
		 *     'password' => 'yuefei12'
		 * ]；
		 * $rule = [
		 *     'user' => 'required|min:2|max:30',
		 *     'username => 'required|min:2|max:30',
		 *     'password' => 'required|min:2|max:30',
		 * ];
		 */
		
		// 遍历所有需要验证的信息
		foreach ($data as $key => $val) {
			$status = '';
			$params = '';
			
			// 若当前需要验证的次数只有一个，则不用拆分数组
			$ruleArr = strpos($rule[$key], '|') !== false 
						? explode('|', $rule[$key]) 
						: $rule[$key];
			
			// 需要验证有多个开始遍历
			if (is_array($ruleArr)) {
				foreach ($ruleArr as $ruleVal) {
					// 验证是否有参数，有则拆分，没有直接调用验证方法
					if (strpos($ruleVal, ':') === false) {
						$method = $ruleVal;
					} else if (strpos($ruleVal, ':') !== false) {
						$params = explode(':', $ruleVal);
						$method = array_shift($params);
					}
					if (!$params) {
						$params = [$val];
					} else {
						$params = [$val, $params[0]];
					}
					$status = call_user_func_array(['self', $method], $params);
					if (is_string($status)) {
						return $method;
					}
				}
			} else {
				$params = [$val];
				$method = $rule[$key];
				$status = call_user_func_array(['self', $method], $params);
				if (is_string($status)) {
					return $method;
				}
			}
		}
	}
	
	/*
	 * 修改错误信息
	 */
	protected static function str_replace($string, $message)
	{
		return str_replace(self::$placeholder, $string, $message);
	}
	
	/*
	 * 验证字符串不能为空
	 */
	protected static function required($string)
	{
		return $string ? true : false;
	}
	
	/*
	 * 验证不能小于n位
	 */
	protected static function min($string, $rule)
	{
		return strlen($string) > $rule ? true : false;
	}
	
	/*
	 * 验证不能大于n位
	 */
	protected static function max($string, $rule)
	{
		return strlen($string) < $rule ? true : $string;
	}
}