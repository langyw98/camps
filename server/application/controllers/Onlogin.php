<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Onlogin extends CI_Controller {
    public function index() {
        $code =$this->input->get('code');
        $url="https://api.weixin.qq.com/sns/jscode2session?appid=wxc61f7c8821c3019e&secret=a88289838a9fdd94369cb4ddb4cef179&js_code=". $code ."&grant_type=authorization_code";
        $result = file_get_contents($url);
        // var_dump($result);
        $json = json_decode($result);//对json数据解码  
        $arr = get_object_vars($json);  
        $openid = $arr['openid']; 
        $this->json([
            'openid'=>$openid
        ]);
    }
}
