<?php
namespace Home\Controller;
use Think\Controller;
class CheckinController extends Controller {
    public function index(){
        //echo "nihao";
       // echo "indexcontroller\n";
       // echo time();
        $myname = 'nihao';
        $this->assign('name', $myname);
        $this->display();
    }
    public function registerCheck() {
    	$user_table = M('user');
    	if ($user_table->where("name='".I('username')."'")->select()) {
    		echo 'no';
    		return;
    	}
    	$user_table->data(array('name' => I('username'), 'password' => I('password')))->add();
    	session('username', I('username'));
    	echo 'yes';
    }
    public function loginCheck() {
    	$user_table = M('user');
    	$data = $user_table->where("name='".I('username')."'")->select();
    	if (!$data) {
    		echo 'no_1';
    		return;
    	} else if ($data[0]["password"] != I('password')) {
    		//echo $data[0]["password"].'#'.I('password').'#';
    		echo 'no_2';
    		return;
    	} else {
    		session('username', I('username'));
    		echo 'yes';
    	}
    	//echo 'yes';
    	//echo 'no_2';
    }
    public function logout() {
    	session('username', null);
    	echo "<script>window.location='".__ROOT__."';</script>";
    }
    public function isValidUser() {
    	$user_table = M('user');
    	if ($user_table->where("name='".I('username')."'")->select()) {
    		echo 'no';
    		return;
    	}
    	echo 'yes';
    }

}