<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;
class TestController extends Controller {
    public function index(){
    	/*
    	$Model = new Model();
    	//或者使用M快捷方法是等效的
    	$Model = M();
    	//进行原生的SQL查询
    	$result = $Model->query('SELECT * FROM main_type');
    	dump($result);
    	*/
    	/*
		$main_type = M('MainType');
		$result = $main_type->select();
		dump($result);
		*/
    	echo U().'<br/>';
    	//session("id", 'sessionid');
    	echo I("session.id");
    	echo I("session.iaa");
    	echo I("session.id");
		
		
    }
    public function imgUpload(){
    	$this->display();
    }
}