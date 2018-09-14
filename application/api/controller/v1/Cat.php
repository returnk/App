<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/31
 * Time: 15:42
 */

namespace app\api\controller\v1;


use app\api\controller\Common;

class Cat extends Common
{
    public function read()
    {
        $result[] = [
            'catid' => 0,
            'catname' => '首页',
        ];
        $cats = config('cat.lists');
        foreach($cats as $catid => $catname) {
            $result[] = [
                'catid' => $catid,
                'catname' => $catname,
            ];
        }
        return show(config('code.success'), 'OK cat-read', $result, 200);
    }
}