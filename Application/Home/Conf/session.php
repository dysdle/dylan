<?php
//Redis Session配置
return array(
    //分布式Redis,默认第一个为主服务器
    'SESSION_REDIS_HOST' => '127.0.0.1',
    //端口,如果相同只填一个,用英文逗号分隔
    'SESSION_REDIS_PORT' => '6379',
    //Redis auth认证(密钥中不能有逗号),如果相同只填一个,用英文逗号分隔
    'SESSION_REDIS_AUTH' => '',
);
