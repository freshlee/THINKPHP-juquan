<?php
/**
*	应用入口文件
*	By 果冻传奇小组
*/

header("Content-type:text/html;charset=utf-8");

if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');// 检测PHP环境

define('APP_PATH','./App/');
define('APP_DEBUG',true);// 开启调试模式


require './ThinkPHP/ThinkPHP.php';// 引入ThinkPHP入口文件
