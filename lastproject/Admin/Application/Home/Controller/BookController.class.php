<?php
namespace Home\Controller;
use Think\Controller;
class BookController extends Controller {
    public function book() {

        // 判断session 中有没有用户，没有就跳回登录
        $data = session('home');
        if (empty($data)) {
			redirect(U('Login/login'), 0, '正在调转');
		}
		$user_name = session("home.user_name");
		$this->assign('user_name',$user_name);
		// 商品分类信息
		// 商品信息
		$Book = M("book");
		$count = $Book->count();
		$Page = new \Think\Page($count,8);
		// $Page->lastSuffix=false;
		// $Page->setConfig('header','<li class="rows">  第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页  共 %TOTAL_ROW% 条记录 </li>');
	    $Page->setConfig('prev','上一页');
	    $Page->setConfig('next','下一页');
	    $Page->setConfig('last','末页');
	    $Page->setConfig('first','首页');
	    $Page->setConfig('theme',' %FIRST% %UP_PAGE%  %LINK_PAGE%  %DOWN_PAGE% %END% ');
		$show = $Page->show();
		$Data = $Book->order('book_id DESC')->limit($Page->firstRow.','.$Page->listRows)->select();
		// console.log($data);
		$CateGory = M("category");
		$CateAllData = $CateGory->select();
		// var_dump($CateAllData);
		foreach($Data as $key =>$value){
			// echo $value['cate_id'];
			$cateName = $CateGory->where('cate_id='.$value['cate_id'])->find();
			// var_dump($cateName);
			$value['cate_id'] = $cateName['cate_name'];
			$bookData[$key] = $value;
		}
		// var_dump($bookData);
		$this->assign('CateAllData',$CateAllData);
		$this->assign('Booklist',$bookData);
		$this->assign('page',$show);
        $this->display();
    }
    // 商品详情
    public function bookDetails(){
    	// 判断session 中有没有用户，没有就跳回登录
        $data = session('home'); 
        if (empty($data)) {
			redirect(U('Login/login'), 0, '正在调转');
		}
		$user_name = session("home.user_name");
		$this->assign('user_name',$user_name);
    	// var_dump($_GET);
		$Book = M("book");
    	$bookDetails = $Book->where($_GET)->find();
    	$CateGory = M("category");
		$CateData = $CateGory->where('cate_id='.$bookDetails['cate_id'])->find();
		$ImageDataQ = M('images');
		$ImageNData	 = $ImageDataQ->where('book_id='.$_GET['book_id'])->find();
		$bookDetails['image_Name_S'] =$ImageNData['image_name'];
		// var_dump($CateData);
    	// var_dump($bookDetails);
    	$bookDetails['cate_name'] = $CateData['cate_name'];
    	$this->assign('bookDetails',$bookDetails);
    	$this->display();
    }
    // 
    public function bookEdit(){
    	// 判断session 中有没有用户，没有就跳回登录
        $data = session('home'); 
        if (empty($data)) {
			redirect(U('Login/login'), 0, '正在调转');
		}
		$user_name = session("home.user_name");
		$this->assign('user_name',$user_name);
    	// var_dump($_GET);
		$Book = M("book");
    	$bookDetails = $Book->where($_GET)->find();
    	// var_dump($bookDetails);
    	$ImageDataQ = M('images');
		$ImageNData	 = $ImageDataQ->where('book_id='.$_GET['book_id'])->find();

		$CateGory = M("category");
		$CateAllData = $CateGory->select();

		$bookDetails['image_Name_S'] =$ImageNData['image_name'];
		$this->assign('CateAllData',$CateAllData);
    	$this->assign('bookDetails',$bookDetails);
    	$this->display();
    }

    // 商品修改
    public function bookAction(){
    	// 判断session 中有没有用户，没有就跳回登录
        $data = session('home'); 
        if (empty($data)) {
			redirect(U('Login/login'), 0, '正在调转');
		}
		$user_name = session("home.user_name");
		$this->assign('user_name',$user_name);
    	// var_dump($_POST);
    	$ImageName = $_POST['book_id'].'_'.time().'_'.mt_rand();
    	$config = array(
    		'exts' 		=>	array('jpg', 'gif', 'png', 'jpeg'),
    		'autoSub'	=>	true,
    		'rootPath'	=>	'./Public/Uploads/bookImage/',
    		'subName' 	=>	'book_id_'.$_POST['book_id'],
    		// 'savePath'	=>	'book_id_'.$_POST['book_id'].'_',
    		'replace'	=>	true,
    		'saveName'	=>	$ImageName,
    		// 'replace'	=> 	true,
    	);
    	// var_dump($_FILES);
    	if (!empty($_FILES['image_name']['name'])) {
    			$BookImage = M("images");
    			$BookData = $BookImage->where('book_id='.$_POST['book_id'])->find();
    			if ($BookData) {
    				echo "有数据";
    				var_dump($BookData);
    				// rmdir('./Public/Uploads/bookImage/book_id'.$_POST['book_id']);
    				//循环删除目录和文件函数
					@unlink('.'.$BookData['image_name']);
					$ImageData['book_id'] = $_POST['book_id'];
    				$Bookupload = new \Think\Upload($config);// 实例化上传类
    				$info = $Bookupload->upload();
			    	if(!$info) {// 上传错误提示错误信息
			    		echo "失败";
					    $this->error($Bookupload->getError());
					}else{// 上传成功 获取上传文件信息
						echo "成功";
					    foreach($info as $file){
					        $nowFile =  $file['savepath'].$file['savename'];
					    }
					    $image_File_name = '/Public/Uploads/bookImage/'.$nowFile;
					    $ImageData['image_name'] =  $image_File_name;
					    $BookImageQuery = M('images');
    					$BookAddData = $BookImageQuery->where('image_id='.$BookData['image_id'])->save($ImageData);
    					if ($BookAddData) {
    						
    						$BookDataQu = M('book');
    						$BookS = $BookDataQu->save($_POST);
    						if ($BookS) {
    							// echo "成功1";
	   	 						redirect(U('Book/book'), 0, '图片上传成功,商品数据更新成功');

    						}else{
    							// echo "失败";
	     						redirect(U('Book/bookEdit',array('book_id'=>$_POST['book_id'])), 2, '图片上传成功,商品数据更新失败');


    						}
    					}

					}
		    			
    			}else{
    				echo "没数据";
			    	$ImageData['book_id'] = $_POST['book_id'];
    				$Bookupload = new \Think\Upload($config);// 实例化上传类
    				$info = $Bookupload->upload();
			    	if(!$info) {// 上传错误提示错误信息
			    		echo "失败";
					    $this->error($Bookupload->getError());
	     				redirect(U('Book/bookEdit',array('book_id'=>$_POST['book_id'])), 2, '上传图片失败');

					}else{// 上传成功 获取上传文件信息
						echo "成功";
					    foreach($info as $file){
					        $nowFile =  $file['savepath'].$file['savename'];
					    }
					    // 拿到路径
					    $image_File_name = '/Uploads/bookImage/'.$nowFile;
					    $ImageData['image_name'] =  $image_File_name;
					    $BookImageQuery = M('images');
					    // 添加图片信息
    					$BookAddData = $BookImageQuery->add($ImageData);
    					if ($BookAddData) {

    						$BookDataQu = M('book');
    						$BookS = $BookDataQu->save($_POST);
	   	 					if ($BookS) {
    							// echo "成功1";
	   	 						redirect(U('Book/book'), 0, '图片上传成功,商品数据更新成功');

    						}else{
    							// echo "失败";
	     						redirect(U('Book/bookEdit',array('book_id'=>$_POST['book_id'])), 2, '图片上传成功,商品数据更新失败');


    						}
    						
    					}else{
							@unlink('.'.$image_File_name);
	   	 					redirect(U('Book/bookEdit'), 2, '添加图片信息失败');
    					}
					}
    			}

    		}else{
    			$BookDataQu = M('book');
				$BookS = $BookDataQu->save($_POST);
				if ($BookS) {
					// echo "成功1";
 						redirect(U('Book/book'), 0, '商品数据更新成功');

				}else{
					// echo "失败";
	     			redirect(U('Book/bookEdit',array('book_id'=>$_POST['book_id'])), 2, '商品数据更新失败');



				}
    		}

    	// $DIST=C("TMPL_PARSE_STRING");
    	// echo $DIST['__PUBLIC__/dist'].'1';
    	
    	// $config = array(
    	// 	'exts' 		=>	array('jpg', 'gif', 'png', 'jpeg'),
    	// 	'autoSub'	=>	true,
    	// 	'rootPath'	=>	'./Public/Uploads/bookImage/',
    	// 	'savePath'	=>	'book_id_'.$_POST['book_id'],
    	// 	'saveName'	=>	$_POST['book_id'].'_'.time().'_'.mt_rand().'.jpg',
    	// );

    	// $Bookupload = new \Think\Upload($config);// 实例化上传类
	    // $info   =   $Bookupload->upload();
	    // if(!$info) {// 上传错误提示错误信息
	    //     $this->error($Bookupload->getError());
	    // }else{// 上传成功
	    //     $this->success('上传成功！');
	    // }

    }
    // 商品添加
	public function BookAdd(){
    	var_dump($_GET);
    	var_dump($_POST);
    	var_dump($_FILES);
    	
    	$_POST['book_pudate'] = time();
		$Book = M("book");
		$AllBookData = $Book->select();
    	foreach($AllBookData as $val){
    		if ($_POST['book_title'] == $val['book_title'] ) {
				redirect(U('Book/book'), 2, '已有->'.$_POST['book_title'].'<-书名');
    			exit;
    		}else if($_POST['book_desc'] == ''){
    			redirect(U('Book/book'), 2, '描述不能为空');
    			exit;
    		}
    	}

    	$BookImage = M('images');
    	$BookAddData = $Book->add($_POST);

    	// var_dump($BookAddData);
    	// 判断是否添加商品成功
    	if ($BookAddData) {
    		// 判断有没有上传图片
    		if (!empty($_FILES['image_name']['name'])) {

				$ImageName = $_POST['book_id'].'_'.time().'_'.mt_rand().'.jpg';
		    	$config = array(
		    		'exts' 		=>	array('jpg', 'gif', 'png', 'jpeg'),
		    		'autoSub'	=>	true,
		    		'rootPath'	=>	'./Public/Uploads/bookImage/',
		    		'subName' 	=>	'book_id_'.$BookAddData,
		    		// 'savePath'	=>	'book_id_'.$_POST['book_id'].'_',
		    		'replace'	=>	true,
		    		'saveName'	=>	$ImageName,
		    		// 'replace'	=> 	true,
		    	);
		    	$Bookupload = new \Think\Upload($config);// 实例化上传类
				    	$info   =   $Bookupload->upload();
					    if(!$info) {// 上传错误提示错误信息
					        $this->error($Bookupload->getError());
					    }else{// 上传成功
					        $this->success('上传成功！');
					        foreach($info as $file){
					        	$nowFile =  $file['savepath'].$file['savename'];
					    	}
					    	$image_File_name = '/Uploads/bookImage/'.$nowFile;

					        $ImageData['image_name'] =$image_File_name;
					    	$ImageData['book_id'] = $BookAddData;
			    			// 添加图片信息
				    		$bookImageId = $BookImage->add($ImageData);
				    		if ($bookImageId) {
				    			redirect(U('Book/book'), 0, '添加图片成功，数据成功');

				    		}else{
								@unlink('.'.$ImageData['image_name']);
								// rmdir($dir)
				    			$Book->where('book_id='.$BookAddData)->delete();
				    			redirect(U('Book/book'), 2, '添加图片失败，数据成功');

				    		}
					    }
		    	

    		}else{
    		redirect(U('Book/book'), 0, '添加商品成功');

    		}

    		// redirect(U('Book/book'), 0, '添加成功');

    	}else{

    		redirect(U('Book/book'), 2, '添加商品失败');

    	}
 

    }
    // 商品删除
    public function bookDelete(){
    	var_dump($_GET);
    	$bookImage = M('images');
    	$bookImageData=$bookImage->where('book_id='.$_GET['book_id'])->find();
		@unlink('.'.$bookImageData['image_name']);
		// var_dump(dirname($bookImageData['image_name']));
		// echo '.'.dirname($bookImageData['image_name']);
		rmdir('.'.dirname($bookImageData['image_name']));
		// mkdir('.'.dirname($bookImageData['image_name']));
    	$bookImage->where($_GET)->delete();
    	$Book = M("book");
    	$bookDetails = $Book->where($_GET)->delete();

    	 
		// redirect(U('Book/book'), 0, '正在调转');
    }

    // 分类添加
    public function bookCateAdd(){
    	// var_dump($_GET);
    	// var_dump($_POST);
    	
    	// $info = ;	
    	// var_dump($info);
    	$CateGory = M("category");
    	$AllData = $CateGory->select();
    	foreach($AllData as $val){
    		if ($_POST['cate_name'] == $val['cate_name'] || $_POST['cate_name']=='') {
				redirect(U('Book/book'), 2, '已有->'.$_POST['cate_name'].'<-分类名,2秒后返回');
    			exit;
    		}
    	}

    	if ($CateGory->add($_POST)) {
    		redirect(U('Book/book'), 0, '添加成功');
    	}else{
    		// exit($CateGory->getError());
			redirect(U('Book/book'), 3, '添加失败');

    	}
 
    }
    // 分类修改
    public function bookCateEdit(){
    	// var_dump($_GET);
    	// var_dump($_POST);
    	
    	// $info = ;	
    	// var_dump($info);
    	$CateGory = M("category");
    	$AllData = $CateGory->select();
    	foreach($AllData as $val){
    		if ($_POST['cate_name'] == $val['cate_name'] || $_POST['cate_name']==' ') {
				redirect(U('Book/book'), 2, '已有->'.$_POST['cate_name'].'<-分类名');
    			exit;
    		}
    	}
    	if ($CateGory->save($_POST)) {
    		redirect(U('Book/book'), 0, '修改成功');
    	}else{
    		// exit($CateGory->getError());
			redirect(U('Book/book'), 3, '修改失败');

    	}
    	// $AllData = $CateGory->select();
    	
 
    }
    // 商品评论
    public function bookComment(){
        // 判断session 中有没有用户，没有就跳回登录
        $data = session('home'); 
        if (empty($data)) {
            redirect(U('Login/login'), 0, '正在调转');
        }
        $user_name = session("home.user_name");
        $this->assign('user_name',$user_name);
        if (empty($_GET['book_id'])) {
            redirect(U('Book/book'), 0, '没有bookid');
            exit;
        }
        $bookRequest = M('book');
        $bookData = $bookRequest->where('book_id='.$_GET['book_id'])->find();
        // var_dump($bookData);

        $CommentRequest = M('comment');
        $CommentData = $CommentRequest->where('book_id='.$_GET['book_id'])->select();


        // var_dump($CommentData);
        $this->assign('book_id',$_GET['book_id']);
        $this->assign('bookData',$bookData);
        $this->assign('CommentData',$CommentData);
        $this->display();
    }
    // 评论修改页面
    public function bookCommentEdit(){
        // var_dump($_GET);

        if (empty($_GET['comment_id'])) {
            redirect(U("Book/bookComment",array("book_id"=>$_GET['book_id'])), 0, '没有bookid');
            exit;
        }

        $CommentRequest = M('comment');
        $commentData = $CommentRequest->where('comment_id='.$_GET['comment_id'])->find();
        var_dump($commentData);




        $this->assign('commentData',$commentData);
        $this->assign('book_id',$_GET['book_id']);
        $this->display();

    }
    public function bookCommentEditAction(){
        // var_dump($_POST);
        $data['comment_content'] = $_POST['comment_content'];
        $CommentRequest = M('comment');
        $commentData = $CommentRequest->where('comment_id='.$_POST['comment_id'])->save($data);
        if ($commentData) {
            redirect(U("Book/bookComment",array("book_id"=>$_POST['book_id'])), 0, '修改成功');
            
        }else{
            redirect(U("Book/bookCommentEdit",array('comment_id'=>$_POST['comment_id']  ,'book_id'=>$_POST['book_id'])), 2, '修改失败');

        }

    }
    public function bookCommentDeleteAction(){
        var_dump($_GET);
        // $data['comment_content'] = $_POST['comment_content'];
        $CommentRequest = M('comment');
        $commentData = $CommentRequest->where('comment_id='.$_GET['comment_id'])->delete();
        if ($commentData) {
            redirect(U("Book/bookComment",array("book_id"=>$_GET['book_id'])), 0, '删除成功');
            # code...
        }else{
            redirect(U("Book/bookComment",array("book_id"=>$_GET['book_id'])), 2, '删除失败');

        }

    }


   
}