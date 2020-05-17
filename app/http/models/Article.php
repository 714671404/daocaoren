<?php
namespace app\http\models;

use snoweddy\src\base\Model;

class Article extends Model
{
    public function all()
    {

    }

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
}