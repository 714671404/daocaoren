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
}