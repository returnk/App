<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
function pagination($obj) {
    if(!$obj) {
        return '';
    }

    $params = request()->param();
    $str = '<div class="imooc-app">'.$obj->appends($params)->render().'</div>';
    return $str;
}

// 获取栏目名称
function getCatName($catId)
{
    if(!$catId) {
        return '';
    }
    $cats = config('cat.lists');
    return !empty($cats[$catId]) ? $cats[$catId] : '';
}

// 获取状态信息
function getStatus($str)
{
    return $str ? '<span style="color:green">正常</span>' : '<span style="color:red">待审</span>';
}

// 是否强制更新
function isForce($str)
{
    return $str ? '<span style="color:green">是</span>' : '<span style="color:red">否</span>';
}

// 是否推荐
function isPosition($id, $isPosition)
{
    $controller = request()->controller();
    $str = $isPosition == 1 ? 0 : 1;
    $url = url($controller.'/isPosition',['id' => $id, 'is_position' => $str]);
    if($isPosition == 1) {
        $str = "<a href='javascript:;' title='修改状态' status_url='".$url."' onclick='app_status(this)'><span class='label label-success radius'>是</span></scpan></a>";
    } elseif($isPosition == 0) {
        $str = "<a href='javascript:;' title='修改状态' status_url='".$url."' onclick='app_status(this)'><span class='label label-danger radius'>否</span></scpan></a>";
    }
    return $str;
}

// 公共的修改状态
function status($id, $status)
{
    $controller = request()->controller();
    $str = $status == 1 ? 0 : 1;
    $url = url($controller.'/status',['id' => $id, 'status' => $str]);
    if($status == 1) {
        $str = "<a href='javascript:;' title='修改状态' status_url='".$url."' onclick='app_status(this)'><span class='label label-success radius'>正常</span></scpan></a>";
    } elseif($status == 0) {
        $str = "<a href='javascript:;' title='修改状态' status_url='".$url."' onclick='app_status(this)'><span class='label label-danger radius'>待审</span></scpan></a>";
    }
    return $str;
}

/**
 * 通用化API接口数据输出
 * @param int $status 业务状态码
 * @param string $message 信息提示
 * @param [] $data  数据
 * @param int $httpCode http状态码
 * @return array
 */
function show($status, $message, $data=[], $httpCode=200) {

    $data = [
        'status' => $status,
        'message' => $message,
        'data' => $data,
    ];

    return json($data, $httpCode);
}

