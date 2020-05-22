<?php
namespace snoweddy\src;

use snoweddy\src\base\Env;
use snoweddy\src\route\Route;

class App
{
    /*
     * 初始化属性
     * @var array
     */
    private $config = [];

    public function __construct() {}

    /*
     * 加载程序
     */
    public function run($config)
    {
        define('VIEW', APP_PATH . '/resources/views');
        define('DS', DIRECTORY_SEPARATOR);
        $this->config = $config;
        $this->http();
    }

    public function http()
    {
        session_start();
        header("Content-type:text/html;charset=utf-8");
        include_once __DIR__ . '/library/helpers.php';
        Route::init();
    }
}