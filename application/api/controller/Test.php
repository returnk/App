<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/31
 * Time: 11:24
 */

namespace app\api\controller;


use app\common\lib\exception\ApiException;
use app\common\lib\IAuth;
use think\Controller;

class Test extends Common
{
    public function index()
    {
        return [
            'jack',
            'rose'
        ];
    }

    public function save()
    {
        $data = input('post.');

        return show(1,'ok index/save',input('post.'),201);
    }
}