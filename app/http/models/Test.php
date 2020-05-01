<?php
namespace app\http\models;

use snoweddy\src\base\Model;

class Test extends Model
{
    protected $table = 'users';

    public function se($sql)
    {
        return $this->query($sql);
    }
}