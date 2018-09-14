<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/24
 * Time: 11:19
 */

namespace app\admin\controller;

// 后台图片上传
class News extends Base
{
    public function index() {
        $data = input('param.');
        $query = http_build_query($data);
        //halt($data);

        $whereData = [];
        // 转换查询条件
        if(!empty($data['start_time']) && !empty($data['end_time'])
            && $data['end_time'] > $data['start_time']
        ) {
            $whereData['create_time'] = [
                ['gt', strtotime($data['start_time'])],
                ['lt', strtotime($data['end_time'])],
            ];
        }
        if(!empty($data['catid'])) {
            $whereData['catid'] = intval($data['catid']);
        }
        if(!empty($data['title'])) {
            $whereData['title'] = ['like', '%'.$data['title'].'%'];
        }
        // 获取数据 然后数据 填充到模板

        // 模式一
        ///$news = model('News')->getNews();

        // 模式二
        // page  size  from   limit from  size
        $this->getPageAndSize($data);

        // 获取表里面的数据
        $news = model('News')->getNewsByCondition($whereData, $this->from, $this->size);
        // 获取满足条件的数据总数 =》 有多少页
        $total = model('News')->getNewsCountByCondition($whereData);
        /// 结合总数+size  =》 有多少页
        $pageTotal = ceil($total/$this->size);//1.1 =>2
        // 获取域名
        


        return $this->fetch('', [
            'cats' => config('cat.lists'),
            'news' => $news,
            'pageTotal' => $pageTotal,
            'curr' => $this->page,
            'start_time' => empty($data['start_time']) ? '' : $data['start_time'],
            'end_time' => empty($data['end_time']) ? '' : $data['end_time'],
            'catid' => empty($data['catid']) ? '' : $data['catid'],
            'title' => empty($data['title']) ? '' : $data['title'],
            'query' => $query,

        ]);
    }

    /*public function add()
    {
        if(request()->isPost()) {
            $data = input('post.');
            try{
                $id = model('News')->add($data);
            }catch(\Exception $e) {
                return $this->result('', 0, '新增失败');
            }
            if($id) {
                return $this->result(['jump_url' => url('news/index')], 1, 'OK');
            } else {
                return $this->result('',0,'新增失败');
            }
        } else {
            return $this->fetch('',[
                'cats' => config('cat.lists'),
            ]);
        }
    }*/

    // 图片添加
    public function add()
    {
        $serverName = $_SERVER['SERVER_NAME'];
        if(request()->isPost()) {
            $data = input('post.');
            try{
                $id = model('News')->save($data);
            } catch(\Exception $e) {
                return $this->result('',0,'新增失败');
            }
            if($id) {
                return $this->result(['jump_url' => url('news/index')],1,'OK');
            } else {
                return $this->result('',0,'新增失败');
            }
        } else {
            return $this->fetch('',[
                'cats' => config('cat.lists'),
            'serverName' => $serverName,
            ]);

        }
    }

    // 内容编辑
    public function edit()
    {
        if(request()->isAjax()) {
            $data = input('post.');
            $result = model('News')->edit($data);
            if($result == 1) {
                $this->success('更新成功','news/index');
            } else {
                $this->error($result);
            }
        }

            $news = model('News')->find(input('id'));
            return $this->fetch('',[
                'cats' => config('cat.lists'),
                'news' => $news,
            ]);
        }

}