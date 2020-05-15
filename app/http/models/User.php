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
    public function add_user(array $data)
    {
        $sql = sprintf(
            "insert into `%s` (name, username, password) values ('%s', '%s', '%s')",
            $this->table,
            $data['name'],
            $data['username'],
            $data['password']
        );
		$result = $this->exec($sql);
		// 获取id与username加入查询条件
		if ($result) {
			$sql = sprintf(
				"select id, name, username, avatar from %s where id='%s'",
				$this->table,
				$this->lastInsertId()
			);
			foreach ($this->query($sql) as $row) {
				return [
					'id' => $row['id'],
					'name' => $row['name'],
					'username' => $row['username'],
					'avatar' => $row['avatar']
				];
			}
		}
        return false;
    }

    /*
     * 登录
     */
    public function login_user($username, $password)
    {
        $sql = sprintf(
            "select id, name, username, avatar from %s where username='%s' and password='%s'",
            $this->table,
            $username,
            $password
        );
        return $this->where($sql)->first();
    }
    public function where($sql)
    {
        foreach ($this->query($sql) as $key => $val) {
            foreach ($val as $k => $v) {
                $this->data[$key][$k] = $v;

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