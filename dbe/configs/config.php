﻿<?php
/**
 * 定义数据库连接
 * Enter description here ...
 * @var unknown_type
 */
define('DB_NAME', 'dbe'); 
define('DB_USER', 'root'); 
define('DB_PASSWORD', 'root'); 
define('DB_HOST', 'localhost'); 
define('DB_CHARSET', 'utf8'); 

/**
 * 定义数据库查询结果类型
 * Enter description here ...
 * @var unknown_type
 */
define("OBJECT", "object");
define("OBJECT_K", "object_k");
define("ARRAY_A", "array_a");
define("ARRAY_N", "array_n");

// 手动指定Smarty的libs目录位置
 
 define('SMARTY_DIR', 'D:/workspace4php/dbe-a/dbe/lib/Smarty-3.1.13/libs/');

 

ini_set('include_path', ini_get('include_path').PATH_SEPARATOR.SMARTY_DIR);

//配置程序根目录,非文档根目录
 
define('BASE_HOME', "D:/workspace4php/dbe-a/dbe/");
 
//获得http路径的地址
define('DOMAIN_HOME', "http://localhost/");

?>
