<?php
namespace Home\Controller;
use Think\Controller;
class ItemController extends Controller {
    public function index(){
        $myname = 'nihao';
        $this->assign('name', $myname);

        $this->display();
    }
}