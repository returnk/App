<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/31
 * Time: 14:04
 */

namespace app\api\controller;


use app\common\lib\Aes;
use app\common\lib\exception\ApiException;
use app\common\lib\IAuth;
use app\common\lib\Time;
use Qiniu\Auth;
use think\Cache;
use think\Controller;

// api模块公共控制器
class Common extends Controller
{
    // header信息
    public $headers = '';
    public $page = 1;
    public $size = 5;
    public $from = 0;

    // 初始化方法
    public function _initialize()
    {
        // $this->checkRequestAuth();
//        $this->aesTest();
    }

    public function checkRequestAuth()
    {
        $headers = request()->header();
        // 基础参数校验
        if(empty($headers['sign'])) {
            throw new ApiException('sign存在',400);
        }
        if(!in_array($headers['app_type'],config('app.apptypes'))) {
            throw new ApiException('app_type不合法',400);
        }
        // 需要sign
        if(!IAuth::checkSignPass($headers)) {
            throw new ApiException('授权码sign失败',401);
        }
        // 把sign缓存起来
        Cache::set($headers['sign'],1, config('app.app_sign_cache_time'));
        // 如果通过把$headers存起来,其它模块继承就可以使用
        $this->headers = $headers;

    }

    public function aesTest()
    {
        $data = [
            'did' => 123123,
            'version' => 1,
            'time' => Time::get13TimeStamp(),
        ];
//        $str = "NQTYjQpGwJCT+5nK37qnusPq8CZr/mHktjwNumtNgu0=";
//        echo (new Aes())->decrypt($str);exit;
        echo IAuth::setSign($data);exit;
        $str = "id=1&ms=123&username=csser";
//        echo (new Aes())->encrypt($str);exit;
        $str = "uh+Jbze+rt3hhGM8q/jKLMT0R0TMQ/hxva0R9e00Du8=";
        echo (new Aes())->decrypt($str); exit;
    }

    /**
     * 获取处理的新闻的内容数据
     * @param array $news
     * @return array
     */
    protected  function getDealNews($news = []) {
        if(empty($news)) {
            return [];
        }

        $cats = config('cat.lists');

        foreach($news as $key => $new) {
            // catname取个名字 $new['catid']是个数组
            $news[$key]['catname'] = $cats[$new['catid']] ? $cats[$new['catid']] : '-';
        }

        return $news;
    }

    // 获取page size内容
    public function getPageAndSize($data)
    {
        $this->page = !empty($data['page']) ? $data['page'] : 1;
        $this->size = !empty($data['size']) ? $data['size'] : config('paginate.list_rows');
        $this->from = ($this->page-1) * $this->size;
    }

}