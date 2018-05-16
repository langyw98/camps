<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Getcamps extends CI_Controller {
    public function index() {
        $code =$this->input->get('openid');
        $this->json([
            'code' => 0,
            'data' => [
                'campslist' => [
                  ['wbb_id'=>1,'wbb_title'=>'title_1','wbb_create_time'=>'20180516'],
                  ['wbb_id'=>2,'wbb_title'=>'title_2','wbb_create_time'=>'20180516'],
                  ['wbb_id'=>3,'wbb_title'=>'title_3','wbb_create_time'=>'20180516'],
                  ['wbb_id'=>4,'wbb_title'=>'title_4','wbb_create_time'=>'20180516']
                  ]
            ]
        ]);
    }
}
