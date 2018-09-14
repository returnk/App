<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/24
 * Time: 1:09
 */

namespace app\common\lib;


use think\Cache;

class IAuth
{
    // 设置密码
    public static function setPassword($data)
    {
        return sha1($data . config('app.password_pre_halt'));
    }

    /**
     * 生成每次请求的sign
     * @param array $data
     * @return string
     */
    public static function setSign($data = []) {
        // 1 按字段排序
        ksort($data);
        // 2拼接字符串数据  &
        $string = http_build_query($data);
        // 3通过aes来加密
        $string = (new Aes())->encrypt($string);

        return $string;
    }

    /**
     * 检查sign是否正常
     * @param array $data
     * @param $data
     * @return boolen
     */
    public static function checkSignPass($data) {
        $str = (new Aes())->decrypt($data['sign']);

        if(empty($str)) {
            return false;
        }

        // diid=xx&app_type=3
        parse_str($str, $arr);
        // 有其它加密的写上app_type
        if(!is_array($arr) || empty($arr['did'])
            || $arr['did'] != $data['did']
        ) {
            return false;
        }
        if(!config('app_debug')) {
            if ((time() - ceil($arr['time'] / 1000)) > config('app.app_sign_time')) {
                return false;
            }
            //echo Cache::get($data['sign']);exit;
            // 唯一性判定
            if (Cache::get($data['sign'])) {
                return false;
            }
        }
        return true;
    }

    /**
     * 设置登录的token  - 唯一性的
     * @param string $phone
     * @return string
     */
    public  static function setAppLoginToken($phone = '') {
        $str = md5(uniqid(md5(microtime(true)), true)); // niqid — 生成一个唯一ID 如果设置为 TRUE，uniqid() 会在返回的字符串结尾增加额外的熵（使用combined linear congruential generator）。 使得唯一ID更具唯一性。
        $str = sha1($str.$phone);
        return $str;
    }
}