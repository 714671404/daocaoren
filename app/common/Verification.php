<?php

namespace app\common;

trait Verification
{
	// 提示信息占位符
	private $placeholder = '{attribute}';
	
	// 预定义提示信息
	protected $messages = [
		'required' => '{attribute}不可以为空.',
		'string' => '{attribute}必须为字符串.',
		'min' => '{attribute}不能小于{min}.',
		'max' => '{attribute}不能大于{max}.'
	];
	
	protected function validator(array $data, array $rule)
	{
		foreach ($rule as $key => $val) {
			if (strpos($val, '|') !== false) {
				$ruleArr = explode('|', $val);
				foreach () {
					
				} 
			}
		}
	}
	
	private function str_replace($string, $message)
	{
		return str_replace($this->placeholder, $string, $message);
	}
}