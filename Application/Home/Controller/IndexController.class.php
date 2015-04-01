<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $main_type = M('Maintype');
		$result = $main_type->select();
		//dump($result);
        $this->assign('maintype', $result);

        $this->display();
    }
}