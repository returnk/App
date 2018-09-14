<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/24
 * Time: 0:59
 */

namespace app\common\model;


use think\Model;

class Base extends Model
{
    protected $autoWriteTimestamp = true;
    public function add($data)
    {
        if(!is_array($data)) {
            exception('传递的数据不合法');
        }
        $this->allowField(true)->save($data);
        return $this->id;
    }
}