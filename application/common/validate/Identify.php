<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/9/5
 * Time: 19:43
 */

namespace app\common\validate;


use think\Validate;

class Identify extends Validate
{
    protected $rule = [
        'id' => 'require|number|length:11',
    ];
}