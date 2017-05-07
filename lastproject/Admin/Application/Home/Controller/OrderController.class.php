<?php
namespace Home\Controller;
use Think\Controller;
class OrderController extends Controller {
	// 订单信息
    public function orderList(){
        
		$data = session('home'); 
        if (empty($data)) {
			redirect(U('Login/login'), 0, '正在调转');
		}
		$user_name = session("home.user_name");
		$this->assign('user_name',$user_name);



		$Order = M("order");
		$count = $Order->count();
		$Page = new \Think\Page($count,8);
		// $Page->lastSuffix=false;
		// $Page->setConfig('header','<li class="rows">  第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页  共 %TOTAL_ROW% 条记录 </li>');
	    $Page->setConfig('prev','上一页');
	    $Page->setConfig('next','下一页');
	    $Page->setConfig('last','末页');
	    $Page->setConfig('first','首页');
	    $Page->setConfig('theme',' %FIRST% %UP_PAGE%  %LINK_PAGE%  %DOWN_PAGE% %END% ');
		$show = $Page->show();
		$OrderDataList = $Order->order('order_id DESC')->limit($Page->firstRow.','.$Page->listRows)->select();

		// var_dump($OrderDataList);
		$User = M('user');

		foreach ($OrderDataList as $key => $value) {
			$data = $User->where('user_id='.$value['user_id'])->find();
			// var_dump($data);
			$value['user_name'] = $data['user_name'];
			$OrderDataList[$key] = $value;
		}

		$this->assign('OrderDataList',$OrderDataList);
		$this->assign('page',$show);

		$this->display();
        // $this->display("index");
    }
    // 订单详情
    public function orderDetails(){
    	$data = session('home'); 
        if (empty($data)) {
			redirect(U('Login/login'), 0, '正在调转');
		}
		$user_name = session("home.user_name");
		$this->assign('user_name',$user_name);

		// var_dump($_GET);
		$orderDetailsRequest = M('orderdetail');
		$orderDetailsData = $orderDetailsRequest->where('order_id='.$_GET['order_id'])->select();
		// var_dump($orderDetailsData);
		$book = M('book');
		foreach($orderDetailsData as $key=>$value){
			$bookData = $book->where('book_id='.$value['book_id'])->find();
			if ($bookData) {
				$value['book_name'] = $bookData['book_title'];
				$orderDetailsData[$key] = $value;
			}else{
				$value['book_name'] = '商品已下架';
				$orderDetailsData[$key] = $value;
			}
			// var_dump($bookData);
			
		}

		$this->assign('orderDetailsData',$orderDetailsData);
		$this->display();

    }





    // 订单删除
    public function orderDelete(){
    	var_dump($_GET);
    	if (empty($_GET['order_id'])) {
			redirect(U('Order/orderList'), 0, '正在调转');
    		# code...
    	}else{

    		$orderDetail = M('orderdetail');
    		$orderDetailStatu = $orderDetail->where('order_id='.$_GET['order_id'])->delete();
    		if ($orderDetailStatu) {
    			$order = M('order');
    			$orderStatu = $order->where('order_id='.$_GET['order_id'])->delete();
    			if ($orderStatu) {
					redirect(U('Order/orderList'), 0, '正在调转');
    				
    			}else{
					redirect(U('Order/orderList'), 2, '删除订单详情成功，删除订单号失败');
    			}

    		}else{
				redirect(U('Order/orderList'), 2, '删除订单详情失败');

    		}
    	}

    }
    // 订单详情删除
    public function orderDetailDelete(){
    	var_dump($_GET);
    	if (empty($_GET['orderdetail_id'])) {
			// redirect(U('Order/orderList'), 0, '正在调转');
    		# code...
			redirect(U('Order/orderDetails',array('order_id'=>$_GET['order_id'])), 0, '正在调转');

    	}else{

    		$orderDetail = M('orderdetail');
    		$orderDetailStatu = $orderDetail->where('orderdetail_id='.$_GET['orderdetail_id'])->delete();
    		if ($orderDetailStatu) {
				redirect(U('Order/orderDetails',array('order_id'=>$_GET['order_id'])), 0, '正在调转');
    		}else{
				redirect(U('Order/orderDetails',array('order_id'=>$_GET['order_id'])), 2, '删除订单详情失败');

    		}
    	}
    }


    // 订单详情修改
    public function orderDetailEdit(){
    	var_dump($_POST);
    	$orderDetail = M('orderdetail');
    	$data = $orderDetail->where('orderdetail_id='.$_POST['orderdetail_id'])->save($_POST);
    	if ($data) {
			redirect(U('Order/orderDetails',array('order_id'=>$_POST['order_id'])), 0, '正在调转');
    		
    	}else{
				redirect(U('Order/orderDetails',array('order_id'=>$_POST['order_id'])), 2, '修改失败');

    	}
    }
   
}