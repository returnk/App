<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/24
 * Time: 20:10
 */

namespace app\common\model;


class News extends Base
{
    /**
     * @param array $data
     * @return array
     */
    public function getNews($data = [])
    {
        $data['status'] = [
            'neq', config('code.status_delete'),
        ];
        $order = ['id' => 'desc'];
        $result = $this->where($data)
            ->order($order)
            ->paginate(4);
        return $result;
    }

    /**
     * 根据条件获取列表数据
     */
    public function getNewsByCondition($condition=[], $from=0, $size=5)
    {
        if(!isset($condition['status'])) {
            $condition['status'] = [
                'neq', config('code.status_delete'),
            ];
        }
        $order = ['id' => 'desc'];

        // limit a,b
       $result = $this->where($condition)
            ->field($this->_getListField())
            ->limit($from, $size)
            ->order($order)
            ->select();
        return $result;
    }
    // 获取列表数据总数
    public function getNewsCountByCondition($condition = [])
    {
        if(!isset($condition['status'])) {
            $condition['status'] = [
                'neq', config('code.status_delete'),
            ];
        }
        $order = ['id' => 'desc'];
        return $this->where($condition)
            ->count();
    }

    // 编辑功能
    public function edit($data)
    {
        $news = $this->find($data['id']);
        $result = $news->save();
        if($result) {
            return 1;
        } else{
            return '失败';
        }
    }

    /**
     * 获取首页头图数据
     * @param int $num
     * @return array
     */
    public function getIndexHeadNormalNews($num = 4) {
        $data = [
            'status' => 1,
            'is_head_figure' => 1,
        ];

        $order = [
            'id' => 'desc',
        ];

        return $this->where($data)
            ->field($this->_getListField())
            ->order($order)
            ->limit($num)
            ->select();
    }

    /**
     * 获取推荐的数据
     */
    public function getPositionNormalNews($num = 20) {
        $data = [
            'status' => 1,
            'is_position' => 1,
        ];

        $order = [
            'id' => 'desc',
        ];

        return $this->where($data)
            ->field($this->_getListField())
            ->order($order)
            ->limit($num)
            ->select();

    }

    /**
     * 通用化获取参数的数据字段
     */
    private function _getListField() {
        return [
            'id',
            'catid',
            'image',
            'title',
            'read_count',
            'status',
            'is_position',
            'update_time',
            'create_time'
        ];
    }

    /**
     * 获取排行榜数据
     * @param int $num
     * @return false|\PDOStatement|string|\think\Collection
     */
    public function getRankNormalNews($num = 5) {
        $data = [
            'status' => 1,
        ];

        $order = [
            'read_count' => 'desc',
        ];

        return $this->where($data)
            ->field($this->_getListField())
            ->order($order)
            ->limit($num)
            ->select();
    }
}