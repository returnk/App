<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/31
 * Time: 18:58
 */

namespace app\api\controller\v1;


use app\api\controller\Common;
use app\common\lib\exception\ApiException;

class Rank extends Common
{
    public function index() {
        try {
            $rands = model('News')->getRankNormalNews();
            $rands = $this->getDealNews($rands);
        }catch (\Exception $e) {
            return new ApiException('error', 400);
        }

        return show(config('code.success'), 'OK', $rands, 200);
    }

}