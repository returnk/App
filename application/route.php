<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

use think\Route;
Route::get('test','api/test/index');
Route::put('test/:id','api/test/update');
Route::resource('test','api/test');
Route::get('api/:ver/cat','api/:ver.cat/read');
Route::get('api/:ver/index','api/:ver.index/index');

//news
Route::resource('api/:ver/news','api/:ver.news');
// 排行
Route::get('api/:ver/rank','api/:ver.rank/index');
// 版本
Route::get('api/:ver/init','api/:ver.index/init');
// 验证码
Route::resource('api/:ver/identify','api/:ver.identify');
// 登录的路由
Route::post('api/:ver/login','api/:ver.login/save');
