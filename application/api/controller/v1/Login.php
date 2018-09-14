<?php
/**
 * Created by PhpStorm.
 * User: baidu
 * Date: 17/8/5
 * Time: 下午4:37
 */
namespace app\api\controller\v1;

use app\api\controller\Common;
use app\common\lib\IAuth;
use think\Cache;
use think\Controller;
use app\common\lib\exception\ApiException;
use app\common\lib\Aes;
use app\common\lib\Alidayu;
use app\common\model\User;
use think\Log;

class Login extends Common {

    public function save() {
        if(!request()->isPost()) {
            return show(config('code.error'), '您没有权限', '', 403);
        }

        $param = input('param.');
        if(empty($param['phone'])) {
            return show(config('code.error'), '手机不合法', '', 404);
        }
        if(empty($param['code'])) {
            //$param['code'] = Aes::decrypt($param['code']); // 1234
            return show(config('code.error'), '手机短信验证码或者密码不合法', '', 404);
        }
        $code = Alidayu::getInstance()->checkSmsIdentify($param['phone']);
        /*$code =  Cache::get($code);
        halt($code);*/
        if ($code != $param['code']) {
            return show(config('code.error'), '手机短信验证码不正确', '', 404);
        }
        $token = IAuth::setAppLoginToken($param['phone']);
        $data = [
            'token' => $token,
            'time_out' => strtotime("+".config('app.login_time_out_day')." days"),
            'username' => '炸天帮' . $param['phone'],
        'status' => 1,
            'phone' => $param['phone'],
        ];
        $id = model('User')->add($data);
        $obj = new Aes();
        if($id) {
            $result = [
                'token' => $obj->encrypt($token."||".$id),
            ];
            return show(config('code.success'), 'ok', $result);
        }else {
            return show(config('code.error'), '登录失败', [], 403);
        }
    }

}