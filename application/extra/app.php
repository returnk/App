<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/23
 * Time: 21:19
 */


return [
    'password_pre_halt' => '_app', //密码加密盐
    'aeskey' => 'sgg45747ss223455', // aes 秘钥 服务端和客户端必须一致
    'apptypes' => [
        'android',
        'eshuo',
        'ios',
    ],
    'app_sign_time' => 10, // sign失效时间
    'app_sign_cache_time' => 20, // sign缓存失效时间
    'login_time_out_day' => 7,// 登录token的失效时间
];