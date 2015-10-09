<?php
//公用的配置文件
return array(
	//开启分组
	'APP_GROUP_LIST' => 'Index,Admin',
	// 默认分组，换下Admin就会指向后台
	'DEFAULT_GROUP' => 'Index',
	// 数据库配置
	'DB_HOST'=>'localhost',
	'DB_USER'=>'root',
	'DB_PWD'=>'123456',
	'DB_NAME'=>'tp',
	'DB_PREFIX'=>'hd_',
	//点语法默认解析
	'TMPL_VAR_IDENTIFY'=>'array',
	//'TMPL_FILE_DEPR'=>'_',
);
?>
<!-- 1.配置index.php和Lib/Action下的Admin和Index的IndexAction.class.php
2.配置公用的config.php，开启分组 如需分离，创建各自的admin.index的function.php
3.创建APP/Common函数文件夹，Index和Admin里的function.php -->