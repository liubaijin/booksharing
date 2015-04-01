<?php
namespace Home\Controller;
use Think\Controller;
class ClassificationController extends Controller {
    public function index(){
        //echo "nihao";
       // echo "indexcontroller\n";
       // echo time();
        $myname = 'nihao';
        $this->assign('name', $myname);
        $this->display();
    }
}