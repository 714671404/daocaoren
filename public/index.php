<?php

// 根目录
define("APP_PATH", dirname(__DIR__));
define('DS', DIRECTORY_SEPARATOR);
define('VIEW_PATH', APP_PATH . '/resources/views');

// 自动加载文件
require APP_PATH . '/core/autoload.php';

// 加载配置文件并且初始化
(new snoweddy\src\App())->run();