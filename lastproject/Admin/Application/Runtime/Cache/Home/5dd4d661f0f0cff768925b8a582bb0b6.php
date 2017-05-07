<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html >

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <title>Aquincum - premium admin template by Eugene Kopyov</title>
    <script type="text/javascript" src="/Admin/Public/dist/jquery1.9.1/jquery.min.js"></script>
    <!-- <script type="text/javascript" src="/Admin/Public/dist/bootstrap/js/bootstrap.js"></script> -->
    <script type="text/javascript" src="/Admin/Public/dist/bootstrap/js/bootstrap.js"></script>

    <link rel="stylesheet" href="/Admin/Public/dist/bootstrap/css/bootstrap.css">
    <link href="/Admin/Public/TPLDIST/css/styles.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="/Admin/Public/dist/jquery1.7.2/jquery.min.js"></script>
    <script type="text/javascript" src="/Admin/Public/TPLDIST/js/plugins/forms/ui.spinner.js"></script>
    <script type="text/javascript" src="/Admin/Public/TPLDIST/js/plugins/forms/jquery.mousewheel.js"></script>
    <script type="text/javascript" src="/Admin/Public/dist/jqueryUi1.8/jquery-ui.min.js"></script>
    <script type="text/javascript" src="/Admin/Public/TPLDIST/js/plugins/charts/excanvas.min.js"></script>
    <script type="text/javascript" src="/Admin/Public/TPLDIST/js/plugins/charts/jquery.flot.js"></script>
    <script type="text/javascript" src="/Admin/Public/TPLDIST/js/plugins/charts/jquery.flot.orderBars.js"></script>
    <script type="text/javascript" src="/Admin/Public/TPLDIST/js/plugins/charts/jquery.flot.pie.js"></script>
    <script type="text/javascript" src="/Admin/Public/TPLDIST/js/plugins/charts/jquery.flot.resize.js"></script>
    <script type="text/javascript" src="/Admin/Public/TPLDIST/js/plugins/charts/jquery.sparkline.min.js"></script>
    <script type="text/javascript" src="/Admin/Public/TPLDIST/js/plugins/tables/jquery.dataTables.js"></script>
    <script type="text/javascript" src="/Admin/Public/TPLDIST/js/plugins/tables/jquery.sortable.js"></script>
    <script type="text/javascript" src="/Admin/Public/TPLDIST/js/plugins/tables/jquery.resizable.js"></script>
    <script type="text/javascript" src="/Admin/Public/TPLDIST/js/plugins/forms/autogrowtextarea.js"></script>
    <script type="text/javascript" src="/Admin/Public/TPLDIST/js/plugins/forms/jquery.uniform.js"></script>
    <script type="text/javascript" src="/Admin/Public/TPLDIST/js/plugins/forms/jquery.inputlimiter.min.js"></script>
    <script type="text/javascript" src="/Admin/Public/TPLDIST/js/plugins/forms/jquery.tagsinput.min.js"></script>
    <script type="text/javascript" src="/Admin/Public/TPLDIST/js/plugins/forms/jquery.maskedinput.min.js"></script>
    <script type="text/javascript" src="/Admin/Public/TPLDIST/js/plugins/forms/jquery.autotab.js"></script>
    <script type="text/javascript" src="/Admin/Public/TPLDIST/js/plugins/forms/jquery.chosen.min.js"></script>
    <script type="text/javascript" src="/Admin/Public/TPLDIST/js/plugins/forms/jquery.dualListBox.js"></script>
    <script type="text/javascript" src="/Admin/Public/TPLDIST/js/plugins/forms/jquery.cleditor.js"></script>
    <script type="text/javascript" src="/Admin/Public/TPLDIST/js/plugins/forms/jquery.ibutton.js"></script>
    <script type="text/javascript" src="/Admin/Public/TPLDIST/js/plugins/forms/jquery.validationEngine-en.js"></script>
    <script type="text/javascript" src="/Admin/Public/TPLDIST/js/plugins/forms/jquery.validationEngine.js"></script>
    <script type="text/javascript" src="/Admin/Public/TPLDIST/js/plugins/uploader/plupload.js"></script>
    <script type="text/javascript" src="/Admin/Public/TPLDIST/js/plugins/uploader/plupload.html4.js"></script>
    <script type="text/javascript" src="/Admin/Public/TPLDIST/js/plugins/uploader/plupload.html5.js"></script>
    <script type="text/javascript" src="/Admin/Public/TPLDIST/js/plugins/uploader/jquery.plupload.queue.js"></script>
    <script type="text/javascript" src="/Admin/Public/TPLDIST/js/plugins/wizards/jquery.form.wizard.js"></script>
    <script type="text/javascript" src="/Admin/Public/TPLDIST/js/plugins/wizards/jquery.validate.js"></script>
    <script type="text/javascript" src="/Admin/Public/TPLDIST/js/plugins/wizards/jquery.form.js"></script>
    <script type="text/javascript" src="/Admin/Public/TPLDIST/js/plugins/ui/jquery.collapsible.min.js"></script>
    <script type="text/javascript" src="/Admin/Public/TPLDIST/js/plugins/ui/jquery.breadcrumbs.js"></script>
    <script type="text/javascript" src="/Admin/Public/TPLDIST/js/plugins/ui/jquery.tipsy.js"></script>
    <script type="text/javascript" src="/Admin/Public/TPLDIST/js/plugins/ui/jquery.progress.js"></script>
    <script type="text/javascript" src="/Admin/Public/TPLDIST/js/plugins/ui/jquery.timeentry.min.js"></script>
    <script type="text/javascript" src="/Admin/Public/TPLDIST/js/plugins/ui/jquery.colorpicker.js"></script>
    <script type="text/javascript" src="/Admin/Public/TPLDIST/js/plugins/ui/jquery.jgrowl.js"></script>
    <script type="text/javascript" src="/Admin/Public/TPLDIST/js/plugins/ui/jquery.fancybox.js"></script>
    <script type="text/javascript" src="/Admin/Public/TPLDIST/js/plugins/ui/jquery.fileTree.js"></script>
    <script type="text/javascript" src="/Admin/Public/TPLDIST/js/plugins/ui/jquery.sourcerer.js"></script>
    <script type="text/javascript" src="/Admin/Public/TPLDIST/js/plugins/others/jquery.fullcalendar.js"></script>
    <script type="text/javascript" src="/Admin/Public/TPLDIST/js/plugins/others/jquery.elfinder.js"></script>
    <script type="text/javascript" src="/Admin/Public/TPLDIST/js/plugins/ui/jquery.easytabs.min.js"></script>
    <script type="text/javascript" src="/Admin/Public/TPLDIST/js/files/bootstrap.js"></script>

    <script type="text/javascript" src="/Admin/Public/TPLDIST/js/files/functions.js"></script>
    <script type="text/javascript" src="/Admin/Public/TPLDIST/js/charts/chart.js"></script>
    <script type="text/javascript" src="/Admin/Public/TPLDIST/js/charts/hBar_side.js"></script>
    <link rel="stylesheet" href="/Admin/Public/dist/FontAwesome3.2.1/css/font-awesome.css">

    <script type="text/javascript" charset="utf-8" src="/Admin/Public/dist/baiduUeditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/Admin/Public/dist/baiduUeditor/ueditor.all.min.js"> </script>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <script type="text/javascript" charset="utf-8" src="/Admin/Public/dist/baiduUeditor/lang/zh-cn/zh-cn.js"></script>
  

    <!-- <link rel="stylesheet" href="/Admin/Public/dist/lib/css/booksPage.css"> -->
    <style>
        
   /* .bookListPage>div>a,span{
        border:1px solid red !important;

    }*/
    </style>
</head>

<body>
    <!-- Top line begins -->
    <div id="top">
        <div class="wrapper">
            <a href="index.html" title="" class="logo"><img src="/Admin/Public/TPLDIST/images/logo.png" alt="" /></a>
            <!-- Right top nav -->
            <div class="topNav">
                <ul class="userNav">
                    <li>
                        <a title="" class="search"></a>
                    </li>
                    <li>
                        <a href="#" title="" class="screen"></a>
                    </li>
                    <li>
                        <a href="#" title="" class="settings"></a>
                    </li>
                    <li>
                        <a href="<?php echo U('Index/quit');?>" title="" class="logout"></a>
                    </li>
                    <li class="showTabletP">
                        <a href="<?php echo U('Index/quit');?>" title="" class="sidebar"></a>
                    </li>
                </ul>
                <a title="" class="iButton"></a>
                <a title="" class="iTop"></a>
                <div class="topSearch">
                    <div class="topDropArrow"></div>
                    <form action="">
                        <input type="text" placeholder="search..." name="topSearch" />
                        <input type="submit" value="" />
                    </form>
                </div>
            </div>
            <!-- Responsive nav -->
           
            <div class="clear"></div>
        </div>
    </div>
    <!-- Top line ends -->
    <!-- Sidebar begins -->
    <div id="sidebar">
        <div class="mainNav">
            <div class="user">
                <a title="" class="leftUserDrop"><img src="/Admin/Public/TPLDIST/images/user.png" alt="" /><span><strong>3</strong></span></a><span><?php echo ($user_name); ?></span>
                <ul class="leftUser">
                    <li><a href="#" title="" class="sProfile">My profile</a></li>
                    <li><a href="#" title="" class="sMessages">Messages</a></li>
                    <li><a href="#" title="" class="sSettings">Settings</a></li>
                    <li><a href="<?php echo U('Index/quit');?>" title="" class="sLogout">Logout</a></li>
                </ul>
            </div>
            <!-- Responsive nav -->
            <div class="altNav">
                <div class="userSearch">
                    <form action="">
                        <input type="text" placeholder="search..." name="userSearch" />
                        <input type="submit" value="" />
                    </form>
                </div>
                <!-- User nav -->
                <ul class="userNav">
                    <li>
                        <a href="#" title="" class="profile"></a>
                    </li>
                    <li>
                        <a href="#" title="" class="messages"></a>
                    </li>
                    <li>
                        <a href="#" title="" class="settings"></a>
                    </li>
                    <li>
                        <a href="<?php echo U('Index/quit');?>" title="" class="logout">1</a>
                    </li>
                </ul>
            </div>
            <!-- Main nav -->
            
    <ul class="nav">
        <li>
            <a href="<?php echo U('Index/index');?>" title=""><img src="/Admin/Public/TPLDIST/images/icons/mainnav/dashboard.png" alt="" /><span>主页</span></a>
        </li>
        <li>
            <a href="" title=""><img src="/Admin/Public/TPLDIST/images/icons/mainnav/ui.png" alt="" /><span>用户</span></a>
        </li>
        <li>
            <a href="<?php echo U('Book/book');?>"  title=""><img src="/Admin/Public/TPLDIST/images/icons/mainnav/forms.png" alt="" /><span>商品</span></a>
        </li>
        <li>
            <a href="<?php echo U('Order/orderList');?>" title="" class="active"><img src="/Admin/Public/TPLDIST/images/icons/mainnav/statistics.png" alt="" /><span>订单</span></a>
        </li>
    </ul>

        </div>
        
    </div>
    <!-- Sidebar ends -->
    <!-- Content begins -->
    
    <!-- <link rel="stylesheet" href="/Admin/Public/dist/bootstrap/css/bootstrap.css"> -->
    <div id="content">
        <div class="contentTop">
            <span class="pageTitle"><span class=" icon-bookmark" aria-hidden="true"></span>商品订单</span>
            <div class="clear"></div>
        </div>
        <!-- Breadcrumbs line -->
        <div class="breadLine">
            <div class="bc">
                <ul id="breadcrumbs" class="breadcrumbs">
                    <li><a href="##">主页</a></li>
                    <li><a href="<?php echo U('Order/orderList');?>">订单</a></li>
                    <li class="current"><a href="##" title="">订单详情</a></li>
                </ul>
            </div>
        </div>
        <!-- Main content -->
        <div class="wrapper" style="padding-top:30px">
             <table class="table table-hover">
                <tr>
                    <th>订单详情ID</th>
                    <th>订单ID</th>
                    <th>商品名称</th>
                    <th>商品数量</th>
                    <th>操作</th>
                </tr>
                <?php if(is_array($orderDetailsData)): $i = 0; $__LIST__ = $orderDetailsData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><tr>
                        <form action="<?php echo U('Order/orderDetailEdit');?>" method="POST">
                            <input type="hidden" name="orderdetail_id" value="<?php echo ($val["orderdetail_id"]); ?>">
                            <input type="hidden" name="order_id" value="<?php echo ($val["order_id"]); ?>">
                            <td><?php echo ($val["orderdetail_id"]); ?></td>
                            <td><?php echo ($val["order_id"]); ?></td>
                            <td><?php echo ($val["book_name"]); ?></td>
                            <td>
                                <input type="number" name="book_num" value="<?php echo ($val["book_num"]); ?>">
                            </td>
                            <td>
                                <Button  type="submit" href="<?php echo U('Book/bookEdit',array('book_id'=>$val['book_id']));?>" class="btn btn-warning btn-xs">修改</Button>
                                <a href="<?php echo U('Order/orderDetailDelete',array('orderdetail_id'=>$val['orderdetail_id'],'order_id'=>$val['order_id']));?>" class="btn btn-danger btn-xs">删除</a>
                            </td>
                        </form>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </table>
            <div class="bookListPage">
                <?php echo ($page); ?>
            </div>
           
        </div>
        <script type="text/javascript">
        
        </script>
    </div>

    
    <!-- Content ends -->
</body>

</html>