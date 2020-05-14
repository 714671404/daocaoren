<?php

# 连接SQLite数据库，appAll.db
$db = new SQLite3(dirname(__FILE__).'appAll.db');
# 设置数据库编码为utf-8（防止乱码）
$db->exec('set names utf8');

# 【示例1：创建表操作】
$sql = "
    CREATE TABLE `user` (
      `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
      `name` varchar(50) NOT NULL COMMENT '用户名',
      `create_time` int(10) unsigned NOT NULL,
      `update_time` int(10) unsigned NOT NULL,
      PRIMARY KEY (`id`)
    ) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='用户表';
";
$res = $db->query($sql);
if($res){
    echo '创建表成功<br/>';
}else{
    echo '创建表失败<br/>';
}
