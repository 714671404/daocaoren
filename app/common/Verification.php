<?php

namespace app\common;

class Verification
{
	// 提示信息占位符
	private static $placeholder = '{attribute}';
	
	// 预定义提示信息
	protected static $messages = [
		'required' => '{attribute}不可以为空.',
		'string' => '{attribute}必须为字符串.',
		'min' => '{attribute}不能小于{min}.',
		'max' => '{attribute}不能大于{max}.'
	];
	
	/*
	 * 函数作用域分配验证method
	 */
	public static function validator(array $data, array $rule)
	{
		foreach ($rule as $key => $val) {
			if (strpos($val, '|') !== false) {
				$ruleArr = explode('|', $val);
				foreach ($ruleArr as $v) {
					if (strpos($v, ':') === false) {
						if (!self::$v($data[$key])) {
							return self::str_replace('用户名', self::$messages[$v]);
						}
					} else {
						$params = explode(':', $v);
						$method = $params[0];
						if (!self::$method($data[$key], $params[1])) {
							return self::str_replace('用户名', self::$messages[$method]);
						}
					}
				}
			} else {
				if (!self::$val($data[$key])) {
					return self::str_replace('用户名', self::$messages[$val]);
				}
			}
		}
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
		return strlen($string) < $rule ? true : false;
	}
	
	/*
	 * 修改错误信息
	 */
	protected static function str_replace($string, $message)
	{
		return str_replace(self::$placeholder, $string, $message);
	}
}