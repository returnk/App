<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/24
 * Time: 1:22
 */

namespace app\admin\controller;


use app\common\lib\IAuth;
use think\Controller;

class Login extends Base
{
    public function _initialize(){}
    public function index()
    {
        $isLogin = $this->isLogin();
        if($isLogin) {
            $this->redirect('index/index');
        } else {

            return $this->fetch();
        }
    }
    // 判断用户登录
    public function check()
    {
        if(request()->isPost()) {
            $data = input('post.');
            if(!captcha_check($data['code'])) {
                $this->error('验证码错误');
            }
            try{
                $user = model('AdminUser')->get(['username' => $data['username']]);
            } catch(\Exception $e) {
                $this->error($e->getMessage());
            }
            // 判断用户是否存在
            if(!$user && $user['status'] != 1) {
                $this->error('该用户不存在');
            }
            // 判断密码
            if(IAuth::setPassword($data['password']) != $user['password']) {
                $this->error('密码错误');
            }
            // 记录登录时间和ip
            $udata = [
                'last_login_time' => time(),
                'last_login_ip'   => request()->ip(),
            ];
            try{
                model('AdminUser')->save($udata, ['id' => $user->id]);
            } catch(\Exception $e) {
                $this->error($e->getMessage());
            }
            // 用户存到session
            session(config('admin.session_user'), $user, config('admin.session_user_scope'));
            $this->redirect('index/index');
        } else {
            $this->error('请求不合法');
        }
    }

    // 用户退出
    public function logout()
    {
        session(null, config('admin.session_user_scope'));
        $this->redirect('login/index');
    }
}