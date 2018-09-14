<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/9/2
 * Time: 14:00
 */

namespace app\common\model;


class Version extends Base
{
    public function getVersion()
    {
        $data['status'] = [
            'neq', config('code.status_delete'),
        ];
        $order = [
            'id' => 'desc',
        ];

        return $this->where($data)->order($order)->select();
    }

    // 通过app_type获取最后一条版本内容
    public function getLastNormalVersionByAppType($appType = '')
    {
        $data = [
            'status' => 1,
            'app_type' => $appType,
        ];
        $order = [
            'id' => 'desc',
        ];
        return $this->where($data)
            ->order($order)
            ->limit(1)
            ->find();
    }
}