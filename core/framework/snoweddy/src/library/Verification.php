<?php

namespace snoweddy\src\library;

class Verification
{
	protected static $placeholder = '{attribute}';
	protected static $message = '';
	protected static $error_message = '';
	public static function validator($data, $rule, $err_message)
	{
		self::$message = include APP_PATH . '/resources/lang/en/validator.php';
		foreach ($data as $key => $val) {
			// 某一个val应该验证什么
			$rule[$key];
			// 若有多条验证规则就拆分成数组，若不是直接赋值成数组
			$ruleArr = (strpos($rule[$key], '|') !== false)
						? explode('|', $rule[$key])
						: [$rule[$key]];
			
			// 开始遍历验证规则
			foreach ($ruleArr as $v) {
				// 初始化属性
				$method = '';
				$params = [];
				$status = '';
				$message = '';
				$placeholder = '';
				// 判断验证规则是否带有参数
				if (strpos($v, ':') === false) {
					$method = $v;
				} else {
					$params = explode(':', $v);
					$method = array_shift($params);
				}
				// 处理调用方法需要的参数
				if (empty($params)) {
					$params = [$val];
				} else {
					$params = [$val, $params[0]];
				}
				
				// 调用方法
				$status = call_user_func_array(['self', $method], $params);
				if (!$status) {
					if (count($params) > 1) {
						$placeholder = [self::$placeholder, '{' . $method . '}'];
						$message = [$err_message[$key], $params[1]];
					} else {
						$placeholder = self::$placeholder;
						$message = $err_message[$key];
					}
                    self::$error_message = self::replace(
                        $placeholder,
                        $message,
                        self::$message[$method]
                    );
					return false;
				} else {
				    return true;
                }
			}
		}
		return false;
	}
	
	/*
	 * 处理错误信息
	 */
	protected static function replace($placeholder, $message, $error_message)
	{
		return str_replace($placeholder, $message, $error_message);
	}
	/*
	 * 验证是不是空
	 */
	protected static function required($string)
	{
		return $string ? true : false;
	}
	/*
	 * 验证不能小于n
	 */
	protected static function min($string, $rule)
	{
		return strlen($string) >= $rule ? true : false;
	}
	/*
	 * 验证不能大于n
	 */
	protected static function max($string, $rule)
	{
		return strlen($string) <= $rule ? true : false;
	}
}