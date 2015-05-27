<?php
/**
 * Created by PhpStorm.
 * User: jiajiama
 * Date: 15-5-16
 * Time: 下午4:56
 */
return array(
    'TMPL_PARSE_STRING' => array(
        '__PUBLIC__' => __ROOT__ . '/' . APP_NAME . '/Modules/'. GROUP_NAME .'/Tpl/Public',
    ),
    'URL_HTML_SUFFIX'=>'',

//    'TMPL_EXCEPTION_FILE' => __ROOT__ . '/' . APP_NAME . '/Modules/'. GROUP_NAME .'/Tpl/Public/'.'error.html',

    'DB_HOST'               => '127.0.0.1', // 服务器地址
    'DB_NAME'               => 'tour',          // 数据库名
    'DB_USER'               => 'root',      // 用户名
    'DB_PWD'                => '123',          // 密码
    'DB_PORT'               => '3306',        // 端口
    'DB_PREFIX'             => 'tour_',    // 数据库表前缀
);