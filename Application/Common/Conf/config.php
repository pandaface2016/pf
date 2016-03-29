<?php
return array(
    'DEFAULT_MODULE'         =>  'Home',  // 默认模块
    //'配置项'=>'配置值'
    'TMPL_TEMPLATE_SUFFIX'   => '.tpl',
    'URL_MODEL'              => 2,
    'DB_TYPE'                => 'mysql',
    'DB_HOST'                => 'localhost',
    'DB_NAME'                => 'pandaface',
    'DB_USER'                => 'root',
    'DB_PWD'                 => '211021',
    'DB_PORT'                => '3306',
    'DB_PREFIX'              => 'pf_',
    'DEFAULT_THEME'          => 'default',

    'USER_AUTH_KEY'          => 'authId',

    'TOKEN_ON'               => false,  // 是否开启令牌验证
    'TOKEN_NAME'             => '__TOKEN__',    // 令牌验证的表单隐藏字段名称
    'TOKEN_TYPE'             => 'md5',  //令牌哈希验证规则 默认为MD5
    'TOKEN_RESET'            => false,  //令牌验证出错后是否重置令牌 默认为true

    'LANG_SWITCH_ON'         => true,   // 开启语言包功能
    'TMPL_PARSE_STRING'      => array(
        '__COMMON_PUBLIC__' => '/Public/Common',
        '__ADMIN_PUBLIC__'  => '/Public/Admin/default',
        '__HOME_PUBLIC__'   => '/Public/Home/default'
    )
);
