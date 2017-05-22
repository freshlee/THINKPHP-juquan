<?php
return array(
	//'配置项'=>'配置值'
	

     'DB_HOST'=>'localhost',
     'DB_USER'=>'root',
     'DB_PWD'=>'root',

  //   'APP_DEBUG'=>false,
     'DB_TYPE'=>'mysql',
	  'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8
     'DB_PREFIX'=>'',
    'APP_GROUP_LIST'=>'Admin,Home',
	'DEFAULT_GROUP'=>'Home',
	'URL_MODEL'=>1,
	'TMPL_L_DELIM'=>'{<',
	'TMPL_R_DELIM'=>'>}',
	'TOKEN_ON'=>false,
    'SESSION_OPTIONS'         =>  array(
        'name'                =>  'Username',                    //设置session名
        'expire'              =>  7*24*60*60,                      //SESSION保存15天
        'use_trans_sid'       =>  1,                               //跨页传递
        'use_only_cookies'    =>  0,                               //是否只开启基于cookies的session的会话方式
    ),
    'URL_MODEL' => 2,
    'URL_ROUTER_ON' => true,
    'URL_ROUTE_RULES' =>  array(
    'teacher'  => "Homepage/Index/teacher", //URL/test.html
    'about'  => "Homepage/Index/about",
    'contact'  => "Homepage/Index/contact",
    'course'  => "Homepage/Index/course",
    'environment'  => "Homepage/Index/environment",
    'intruduction'  => "Homepage/Index/intruduction",
    'style'  => "Homepage/Index/style",
    'share'  => "Homepage/Index/share",
    'EnrollProcess'  => "Homepage/Index/EnrollProcess",

	),
    'MODULE_ALLOW_LIST' => array('Home','Admin'),
    'DEFAULT_MODULE' => 'Home',
);