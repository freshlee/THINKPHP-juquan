<?php
return array(
	//'配置项'=>'配置值'
		//'配置项'=>'配置值'
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  '127.0.0.1', // 服务器地址
    'DB_NAME'               =>  'education',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  'root',          // 密码
    'DB_PORT'               =>  '',        // 端口
'URL_MODEL' => 2,
'URL_ROUTER_ON' => true,
'URL_ROUTE_RULES' =>  array(

    'teacher'  => "Home/Index/teacher", //URL/test.html
    'about'  => "Home/Index/about",
    'contact'  => "Home/Index/contact",
    'course'  => "Home/Index/course",
    'environment'  => "Home/Index/environment",
    'intruduction'  => "Home/Index/intruduction",
    'style'  => "Home/Index/style",
    'share'  => "Home/Index/share",
    'EnrollProcess'  => "Home/Index/EnrollProcess",
    'login'  => "Home/Index/login",
    
    ),
    'MODULE_ALLOW_LIST' => array('Home','Admin'),
    'DEFAULT_MODULE' => 'Home',
    'SESSION_OPTIONS'         =>  array(
        'name'                =>  'Username',                    //璁剧疆session鍚�
        'expire'              =>  7*24*60*60,                      //SESSION淇濆瓨15澶�
        'use_trans_sid'       =>  1,                               //璺ㄩ〉浼犻��
        'use_only_cookies'    =>  0,                               //鏄惁鍙紑鍚熀浜巆ookies鐨剆ession鐨勪細璇濇柟寮�
    ),
);