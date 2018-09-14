<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/31
 * Time: 15:21
 */

namespace app\api\controller;


use think\Cache;
use think\Controller;

class Time extends Controller
{
    public function index()
    {
        return show(1, 'OK Time/index', time());
    }
}