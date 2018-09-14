<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/9/3
 * Time: 17:10
 */

namespace app\common\validate;


use think\Validate;

class Version extends Validate
{
    protected $rule = [
        'version|版本号' => 'require',
        'app_type|手机类型' => 'require',
        'apk_url|下载地址' => 'require|url',
        'upgrade_point|升级提示' => 'require|max:200',

    ];
}