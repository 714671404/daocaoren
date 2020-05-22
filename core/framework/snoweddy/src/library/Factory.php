<?php
namespace snoweddy\src\library;

class Factory
{
    private static $_instance = null;
    private static $object = [];

    /*
     * 设置私有方法禁止实例
     */
    private function __construct() {}

    /*
     * 单例入口
     */
    public static function init()
    {
        if (self::$_instance === null)
            self::$_instance = new self();

        return self::$_instance;
    }
}