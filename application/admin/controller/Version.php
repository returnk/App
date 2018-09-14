<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/9/2
 * Time: 13:41
 */

namespace app\admin\controller;
use think\Validate;

class Version extends Base
{
    public function index()
    {
        $version = model('version')->getVersion();
        return $this->fetch('',[
            'version' => $version,
        ]);
    }

    // 更新版本
    public function add()
    {
        if(request()->isPost()) {
            $data = input('post.');
            // 需要validate验证
            $validate = validate('Version');
            if(!$validate->check($data)) {
                $this->error($validate->getError());
            }
            try{
                $id = model('Version')->save($data);
            } catch(\Exception $e) {
                $this->error($e->getMessage());
            }
            if($id) {
                $this->redirect('version/index');
            } else {
                $this->error('添加失败');
            }
        } else {

            return $this->fetch();
        }
    }
    

}