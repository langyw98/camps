<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Getcamps extends CI_Controller {
    public function index() {
        $this->json([
            'code' => 0,
            'data' => [
                'msg' => 'Hello World',
                'list' => [
                  ['id'=>1,'title'=>'title_1'],
                  ['id'=>2,'title'=>'title_2'],
                  ['id'=>3,'title'=>'title_3'],
                  ['id'=>4,'title'=>'title_4']
                  ]
            ]
        ]);
    }
}
