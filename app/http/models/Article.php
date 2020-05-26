<?php
namespace app\http\models;

use snoweddy\src\base\Model;

class Article extends Model
{
    public function add($data)
    {
        $sql = sprintf(
            "INSERT INTO %s(user_id, title, text) VALUES('%s', '%s', '%s')",
            $this->table,
            $data['u_id'],
            $data['title'],
            $data['text']
        );
        if ($this->exec($sql)) {
            return $this->lastInsertId();
        }
    }

    public function select_article($id)
    {
        $data = [];
        $sql = sprintf(
            "SELECT id, user_id, title, text, created_at FROM articles WHERE id='%s'",
            $id
        );
        foreach ($this->query($sql) as $val) {
            $data = $val;
        }
        if ($data) {
            $sql = sprintf(
                "SELECT name, avatar FROM users WHERE id=%s",
                $data['user_id']
            );
            foreach ($this->query($sql) as $val) {
                $data = array_merge($data, $val);
            }
            return $data;
        }
    }
    public function show($id)
    {
        // 分页sql
        // SELECT a.id, a.title, u.avatar, a.user_id, u.name, a.created_at FROM articles as a INNER JOIN users as u
        // WHERE a.id>='%s' and u.id=a.user_id ORDER BY a.id DESC LIMIT 0, 10
        $sql = sprintf(
            "
                SELECT a.id, a.title, a.user_id, u.name, a.created_at FROM articles as a INNER JOIN users as u 
                WHERE a.id>='%s' and u.id=a.user_id ORDER BY a.id DESC
            ",
            $id
        );
        foreach ($this->query($sql) as $key => $val) {
            $this->data[$key] = array_merge($val, [
                'comment' => rand(0, 1000),
                'attention' => rand(0, 999)
            ]);
        }
        return $this->data;
    }
}