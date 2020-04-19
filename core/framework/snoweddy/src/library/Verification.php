<?php

namespace snoweddy\src\library;

trait Verification
{
	/*
	 * 根据规则调用验证方法
	 */
	protected function validator(array $data, array $rules)
	{
		/*
		 * 遍历验证规则 得到验证的key 与需要验证的规则
		 * 例：['user' => 'required|string|max:255']
		 *     user是需要验证的字段
		 *     required|string|max:255是验证规则
		 */
		foreach ($rules as $key => $val) {
			// 拆分验证规则后调用对应方法
			$rule = explode('|', $val);
			foreach ($rule as $v) {
				// 例如验证字段带有参数，比如：长度min:5需要再次拆分方法与参数
				if (strstr($v, ':') !== false) {
					$r = explode(':', $v);
					$params = $r[1];
					$r = $r[0];
					// 验证失败返回提示消息
					return $this->$r($params);
				}
				return $this->$v($data[$key]);
			}
		}
		// 验证成功返回true;
		return true;
	}
	
	protected function required($string)
	{
		return is_string(string) && true !== empty(string) 
			? '';
	}
}