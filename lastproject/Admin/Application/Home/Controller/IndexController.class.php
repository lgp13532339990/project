<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        
        // $name = 'ThinkPHP';
		$this->assign('name',$name);
		// var_dump(session());
		// session(null);
		$data = session('home');
		if (empty($data)) {
			redirect(U('Login/login'), 0, '正在调转');
		}
		$user_name = session("home.user_name");
		$this->assign('user_name',$user_name);
		$this->display();
        // $this->display("index");
        
    }
    public function quit(){
		session(null);
		$data = session('home');
		
		if (empty($data)) {
			redirect(U('Login/login'), 0, '正在调转');
		}
    }
}