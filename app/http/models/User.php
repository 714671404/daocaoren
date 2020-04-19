<?php

namespace app\http\models;

use snoweddy\src\base\Model;

class User extends Model
{
    /*
     * 初始化属性
     */
    protected $table = 'users';

    /*
     * 添加用户
     */
    public function add_user(array $array)
    {
        $sql = sprintf(
            "insert into `%s` (name, username, password) values ('%s', '%s', '%s')",
            $this->table,
            $array['name'],
            $array['username'],
            $array['password']
        );
		$result = $this->db->exec($sql);
		
		if ($result) {
			$sql = sprintf(
				"select id, name, username from %s where username='%s'",
				$this->table,
				$array['username']
			);
			foreach ($this->db->query($sql) as $row) {
				return [
					'id' => $row['id'],
					'name' => $row['name'],
					'username' => $row['username']
				];
			}
		}
        return false;
    }
}