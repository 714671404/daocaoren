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
     * 存放查询结果
     */
    protected $data = [];

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
		// 获取id与username加入查询条件
		if ($result) {
			$sql = sprintf(
				"select id, name, username from %s where id='%s'",
				$this->table,
				$result
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
    public function where($sql)
    {
        $i = 0;
        foreach ($this->db->query($sql) as $val) {
            foreach ($val as $k => $v) {
                $this->data[] = [$k => $v];
            }
        }
        return $this;
    }
    public function first()
    {
        if ($this->data) {
            foreach ($this->data as $val) {
                return $val;
            }
        }
        return [];
    }
    public function all()
    {
        return $this->data;
    }
}