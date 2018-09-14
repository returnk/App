<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/24
 * Time: 10:55
 */

namespace app\admin\controller;


use think\Controller;

class Base extends Controller
{
    // 每页显示多少条
    public $page = '';
    public $size = '';
    public $from = 0;// 查询条件的起始值
    public $model = '';
    public function _initialize()
    {
        $isLogin = $this->isLogin();
        if(!$isLogin) {
            $this->redirect('login/index');
        }
    }

    public function isLogin()
    {
        $user = session(config('admin.session_user'), '', config('admin.session_user_scope'));
        if($user && $user->id) {
            return true;
        } else {
            return false;
        }
    }

    // 获取page size内容
    public function getPageAndSize($data)
    {
        $this->page = !empty($data['page']) ? $data['page'] : 1;
        $this->size = !empty($data['size']) ? $data['size'] : config('paginate.list_rows');
        $this->from = ($this->page-1) * $this->size;
    }

    // 删除
    public function delete($id = 0) {
        if(!intval($id)) {
            return $this->result('', 0, 'ID不合法');
        }

        // 通过id 去库中查询下记录是否存在

        // 如果你的表和我们控制器文件名 一样。 news news
        // 但是我们 不一样。

        $model = $this->model ? $this->model : request()->controller();
        // 如果php php7  $model = $this->model ?? request()->controller();

        try {
            $res = model($model)->save(['status' => -1], ['id' => $id]);
        }catch(\Exception $e) {
            return $this->result('', 0, $e->getMessage());
        }

        if($res) {
            return $this->result(['jump_url' => $_SERVER['HTTP_REFERER']], 1, 'OK');
        }
        return $this->result('', 0, '删除失败');

    }

    // 通用化修改状态
    public function status()
    {
        $data = input('param.');
        $model = $this->model ? $this->model : request()->controller();
        try{
            $res = model($model)->save(['status' => $data['status']], ['id' => $data['id']]);
        } catch(\Exception $e) {
            return $this->result('',0,$e->getMessage());
        }
        if($res) {
            return $this->result(['jump_url' => $_SERVER['HTTP_REFERER']],1,'0K');
        } else {
            return $this->result('',0,'修改失败');
        }
    }

    // 通用化修改推荐
    public function isPosition()
    {
        $data = input('param.');
        $model = $this->model ? $this->model : request()->controller();
        try{
            $res = model($model)->save(['is_position' => $data['is_position']], ['id' => $data['id']]);
        } catch(\Exception $e) {
            return $this->result('',0,$e->getMessage());
        }
        if($res) {
            return $this->result(['jump_url' => $_SERVER['HTTP_REFERER']],1,'0K');
        } else {
            return $this->result('',0,'修改失败');
        }
    }
}