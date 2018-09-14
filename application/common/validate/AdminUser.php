<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/24
 * Time: 0:53
 */

namespace app\common\validate;


use think\Validate;

class AdminUser extends Validate
{
    protected $rule = [
        'username|用户名' => 'require|max:6',
        'password|密码'  => 'require|max:6',
    ];
}