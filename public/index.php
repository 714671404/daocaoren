<?php

// 系统根目录
define("APP_PATH", dirname(__DIR__));

// 自动加载文件
require __DIR__ . '/../core/autoload.php';

// 加载配置文件
$config = require __DIR__ . '/../config/app.php';

// 加载配置文件并且初始化
(new snoweddy\src\App())->run($config);