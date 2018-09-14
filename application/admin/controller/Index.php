<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/19
 * Time: 10:41
 */

namespace app\admin\controller;


use app\common\lib\IAuth;
use app\common\lib\IAuth2;
use think\Controller;
use think\Model;
class Index extends Base
{
    public function index()
    {
//        halt(session(config('admin.session_user'),'',config('admin.session_user_scope')));
        return $this->fetch();
    }

    public function welcome()
    {
        $count = model('News')->field('read_count')->where('id',$id=1)->find();
        try{
            model('News')->where('id',$id)->setInc('read_count');
        } catch(\Exception $e) {
            $this-error($e->getMessage());
        }
        return $this->fetch('',[
                'count' => $count,
            ]);
    }

    // 后台添加用户
    /*public function add()
    {
        if(request()->isPost()) {
            $data = input('post.');
            $validate = validate('AdminUser');
            if(!$validate->check($data)) {
                $this->error($validate->getError());
            }
            $data['password'] = sha1($data['password'] . '_app');
            $data['status'] = 1;
            try{
                $id = model('AdminUser')->add($data);
            } catch(\Exception $e) {
                $this->error($e->getMessage());
            }
            if($id) {
                $this->success($id . '的id' . '添加成功');
            } else {
                $this->error('error');
            }
        } else {
            return $this->fetch();
        }
    }*/
    public function add()
    {
        if(request()->isPost()) {
            $data = input('post.');
            $validate = validate('AdminUser');
            if(!$validate->check($data)) {
                $this->error($validate->getError());
            }
            $data['status'] = 1;
            $data['password'] = IAuth::setPassword($data['password']);
            try{
               $id = model('AdminUser')->add($data);
            } catch(\Exception $e) {
                $this->error($e->getMessage());
            }
            if($id) {
                $this->success($id . '用户添加成功');
            } else {
                $this->error('error');
            }
        } else {
            return $this->fetch();
        }
    }






}