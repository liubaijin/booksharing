<?php
namespace Home\Controller;
use Think\Controller;
class ShareController extends Controller {
    public function index(){
        $myname = 'nihao';
        $this->assign('name', $myname);

        $this->display();
    }
    public function sharelist(){
       $this->display();
    }
}