<?php
namespace Home\Controller;
use Think\Controller;

class TempleteController extends Controller {
	public function headAndLeft(){
		if (empty(session('home'))) {
			redirect(U('Login/login'), 0, '正在调转');
		}
		$user_name = session("home.user_name");
		$this->assign('user_name',$user_name);
		$this->display();
	}
	
}

