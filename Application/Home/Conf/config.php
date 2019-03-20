<?php
return array(
    //默认模块
    'DEFAULT_MODULE' => 'Base',
    //不区分url大小写
    'URL_CASE_INSENSITIVE' => true,
    //加载其他配置文件(，后不能含有空格)
    'LOAD_EXT_CONFIG' => 'db,session',
    //IP限制
    'IP_CHECK' => false,
    //显示页面Trace信息
    'SHOW_PAGE_TRACE' => false,
    //显示错误信息
    'SHOW_ERROR_MSG' => false,
    //系统管理员
    'ADMIN_USER' => array(),

    //默认分页数量
    'DEFAULT_PAGE_COUNT' => 50,
    'LT_SYS_CODE' => '01',

    //Session 配置
    // 是否自动开启Session
    'SESSION_AUTO_START' => true,
    //session类型
    'SESSION_TYPE' => 'Redis',
    //是否长连接(对于php来说0和1都一样)
    'SESSION_PERSISTENT' => 1,
    //连接超时时间(秒)
    'SESSION_CACHE_TIME' => 1,
    //session有效期(单位:秒) 0表示永久缓存
    'SESSION_EXPIRE' => 3600,
    //session前缀
    'SESSION_PREFIX' => 'dylan_session::',
    //接口请求时间日志记录，单位秒，为0一直记录
    'CURL_TIME_LONG' => 1,

    //LOG的配置
    //log分割时间，单位为小时
    'LOG_SPLIT_TIME' => array(
        //默认两小时一个文件
        'default' => 2,
        //用户操作日志
        'user_log' => 1,
    ),

);