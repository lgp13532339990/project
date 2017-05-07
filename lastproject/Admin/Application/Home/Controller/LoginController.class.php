<?php
namespace Home\Controller;
use Think\Controller;

class LoginController extends Controller {
	public function login(){

		$this->display();
	}
	public function action(){
		// var_dump($_GET);
		// var_dump($_POST);

		$User = M("User");
		if (!empty($_POST)) {
			// $data = $User->where($_POST)->find();
			// if ($data) {
			// 	// echo "登录成功";
			// 	session("home.user_name",$_POST['user_name']);
			// 	redirect(U('Index/index'), 0, '登录成功');

			// }else{
			// 	// echo "登录失败";
			// 	redirect(U('Login/login'), 1, '登录失败');
			// }
			if ($_POST['user_name'] == 'admin') {
				if ($_POST['user_password'] == '123456') {
					
					session("home.user_name",$_POST['user_name']);
					redirect(U('Index/index'), 0, '登录成功');
				}else{
					redirect(U('Login/login'), 1, '密码不正确');
					exit;

				}

			}else{
				redirect(U('Login/login'), 1, '帐号不正确');
				exit;

			}
		}else{
			redirect(U('Login/login'), 1, '登录失败');
			exit;

		}
		


	}

}

