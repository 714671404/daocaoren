<?php

class Autoloader
{
    /*
     * 自动加载
     */
    public static function loadClass($className)
    {
        // 系统核心文件加载
        $classMap = self::classMap();
        if (isset($classMap[$className])) {
            $file = $classMap[$className];
        } else {
            $file = APP_PATH . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $className) . '.php';
        }

        includePath($file);
    }

    public static function getLoader()
    {
        spl_autoload_register(['Autoloader', 'loadClass']);
    }

    /*
    * 核心文件地址
    */
    private static function classMap()
    {
        return [
            'snoweddy\\src\\App' => __DIR__ . '/../framework/snoweddy/src/App.php',
            'snoweddy\\src\\base\\Controller' => __DIR__ . '/../framework/snoweddy/src/base/Controller.php',
            'snoweddy\\src\\base\\Model' => __DIR__ . '/../framework/snoweddy/src/base/Model.php',
            'snoweddy\\src\\base\\View' => __DIR__ . '/../framework/snoweddy/src/base/View.php',
            'snoweddy\\src\\base\\Env' => __DIR__ . '/../framework/snoweddy/src/base/Env.php',
            'snoweddy\\src\\db\\Sql' => __DIR__ . '/../framework/snoweddy/src/db/Sql.php',
            'snoweddy\\src\\db\\DB' => __DIR__ . '/../framework/snoweddy/src/db/DB.php',
            'snoweddy\\src\\db\\DBDome' => __DIR__ . '/../framework/snoweddy/src/db/DBDome.php',
            'snoweddy\\src\\route\\Route' => __DIR__ . '/../framework/snoweddy/src/route/Route.php',
            'snoweddy\\src\\library\\Response' => __DIR__ . '/../framework/snoweddy/src/library/Response.php',
			'snoweddy\\src\\library\\Verification' => __DIR__ . '/../framework/snoweddy/src/library/Verification.php',
			'snoweddy\\src\\library\\Upload' => __DIR__ . '/../framework/snoweddy/src/library/Upload.php',
        ];
    }
}

function includePath($file)
{
    include $file;
}