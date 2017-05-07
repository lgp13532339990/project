<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html >

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <title>Aquincum - premium admin template by Eugene Kopyov</title>
    <script type="text/javascript" src="/PHP_2/Admin/Public/dist/jquery1.9.1/jquery.min.js"></script>
    <!-- <script type="text/javascript" src="/PHP_2/Admin/Public/dist/bootstrap/js/bootstrap.js"></script> -->
    <script type="text/javascript" src="/PHP_2/Admin/Public/dist/bootstrap/js/bootstrap.js"></script>

    <link rel="stylesheet" href="/PHP_2/Admin/Public/dist/bootstrap/css/bootstrap.css">
    <link href="/PHP_2/Admin/Public/TPLDIST/css/styles.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="/PHP_2/Admin/Public/dist/jquery1.7.2/jquery.min.js"></script>
    <script type="text/javascript" src="/PHP_2/Admin/Public/TPLDIST/js/plugins/forms/ui.spinner.js"></script>
    <script type="text/javascript" src="/PHP_2/Admin/Public/TPLDIST/js/plugins/forms/jquery.mousewheel.js"></script>
    <script type="text/javascript" src="/PHP_2/Admin/Public/dist/jqueryUi1.8/jquery-ui.min.js"></script>
    <script type="text/javascript" src="/PHP_2/Admin/Public/TPLDIST/js/plugins/charts/excanvas.min.js"></script>
    <script type="text/javascript" src="/PHP_2/Admin/Public/TPLDIST/js/plugins/charts/jquery.flot.js"></script>
    <script type="text/javascript" src="/PHP_2/Admin/Public/TPLDIST/js/plugins/charts/jquery.flot.orderBars.js"></script>
    <script type="text/javascript" src="/PHP_2/Admin/Public/TPLDIST/js/plugins/charts/jquery.flot.pie.js"></script>
    <script type="text/javascript" src="/PHP_2/Admin/Public/TPLDIST/js/plugins/charts/jquery.flot.resize.js"></script>
    <script type="text/javascript" src="/PHP_2/Admin/Public/TPLDIST/js/plugins/charts/jquery.sparkline.min.js"></script>
    <script type="text/javascript" src="/PHP_2/Admin/Public/TPLDIST/js/plugins/tables/jquery.dataTables.js"></script>
    <script type="text/javascript" src="/PHP_2/Admin/Public/TPLDIST/js/plugins/tables/jquery.sortable.js"></script>
    <script type="text/javascript" src="/PHP_2/Admin/Public/TPLDIST/js/plugins/tables/jquery.resizable.js"></script>
    <script type="text/javascript" src="/PHP_2/Admin/Public/TPLDIST/js/plugins/forms/autogrowtextarea.js"></script>
    <script type="text/javascript" src="/PHP_2/Admin/Public/TPLDIST/js/plugins/forms/jquery.uniform.js"></script>
    <script type="text/javascript" src="/PHP_2/Admin/Public/TPLDIST/js/plugins/forms/jquery.inputlimiter.min.js"></script>
    <script type="text/javascript" src="/PHP_2/Admin/Public/TPLDIST/js/plugins/forms/jquery.tagsinput.min.js"></script>
    <script type="text/javascript" src="/PHP_2/Admin/Public/TPLDIST/js/plugins/forms/jquery.maskedinput.min.js"></script>
    <script type="text/javascript" src="/PHP_2/Admin/Public/TPLDIST/js/plugins/forms/jquery.autotab.js"></script>
    <script type="text/javascript" src="/PHP_2/Admin/Public/TPLDIST/js/plugins/forms/jquery.chosen.min.js"></script>
    <script type="text/javascript" src="/PHP_2/Admin/Public/TPLDIST/js/plugins/forms/jquery.dualListBox.js"></script>
    <script type="text/javascript" src="/PHP_2/Admin/Public/TPLDIST/js/plugins/forms/jquery.cleditor.js"></script>
    <script type="text/javascript" src="/PHP_2/Admin/Public/TPLDIST/js/plugins/forms/jquery.ibutton.js"></script>
    <script type="text/javascript" src="/PHP_2/Admin/Public/TPLDIST/js/plugins/forms/jquery.validationEngine-en.js"></script>
    <script type="text/javascript" src="/PHP_2/Admin/Public/TPLDIST/js/plugins/forms/jquery.validationEngine.js"></script>
    <script type="text/javascript" src="/PHP_2/Admin/Public/TPLDIST/js/plugins/uploader/plupload.js"></script>
    <script type="text/javascript" src="/PHP_2/Admin/Public/TPLDIST/js/plugins/uploader/plupload.html4.js"></script>
    <script type="text/javascript" src="/PHP_2/Admin/Public/TPLDIST/js/plugins/uploader/plupload.html5.js"></script>
    <script type="text/javascript" src="/PHP_2/Admin/Public/TPLDIST/js/plugins/uploader/jquery.plupload.queue.js"></script>
    <script type="text/javascript" src="/PHP_2/Admin/Public/TPLDIST/js/plugins/wizards/jquery.form.wizard.js"></script>
    <script type="text/javascript" src="/PHP_2/Admin/Public/TPLDIST/js/plugins/wizards/jquery.validate.js"></script>
    <script type="text/javascript" src="/PHP_2/Admin/Public/TPLDIST/js/plugins/wizards/jquery.form.js"></script>
    <script type="text/javascript" src="/PHP_2/Admin/Public/TPLDIST/js/plugins/ui/jquery.collapsible.min.js"></script>
    <script type="text/javascript" src="/PHP_2/Admin/Public/TPLDIST/js/plugins/ui/jquery.breadcrumbs.js"></script>
    <script type="text/javascript" src="/PHP_2/Admin/Public/TPLDIST/js/plugins/ui/jquery.tipsy.js"></script>
    <script type="text/javascript" src="/PHP_2/Admin/Public/TPLDIST/js/plugins/ui/jquery.progress.js"></script>
    <script type="text/javascript" src="/PHP_2/Admin/Public/TPLDIST/js/plugins/ui/jquery.timeentry.min.js"></script>
    <script type="text/javascript" src="/PHP_2/Admin/Public/TPLDIST/js/plugins/ui/jquery.colorpicker.js"></script>
    <script type="text/javascript" src="/PHP_2/Admin/Public/TPLDIST/js/plugins/ui/jquery.jgrowl.js"></script>
    <script type="text/javascript" src="/PHP_2/Admin/Public/TPLDIST/js/plugins/ui/jquery.fancybox.js"></script>
    <script type="text/javascript" src="/PHP_2/Admin/Public/TPLDIST/js/plugins/ui/jquery.fileTree.js"></script>
    <script type="text/javascript" src="/PHP_2/Admin/Public/TPLDIST/js/plugins/ui/jquery.sourcerer.js"></script>
    <script type="text/javascript" src="/PHP_2/Admin/Public/TPLDIST/js/plugins/others/jquery.fullcalendar.js"></script>
    <script type="text/javascript" src="/PHP_2/Admin/Public/TPLDIST/js/plugins/others/jquery.elfinder.js"></script>
    <script type="text/javascript" src="/PHP_2/Admin/Public/TPLDIST/js/plugins/ui/jquery.easytabs.min.js"></script>
    <script type="text/javascript" src="/PHP_2/Admin/Public/TPLDIST/js/files/bootstrap.js"></script>

    <script type="text/javascript" src="/PHP_2/Admin/Public/TPLDIST/js/files/functions.js"></script>
    <script type="text/javascript" src="/PHP_2/Admin/Public/TPLDIST/js/charts/chart.js"></script>
    <script type="text/javascript" src="/PHP_2/Admin/Public/TPLDIST/js/charts/hBar_side.js"></script>
    <link rel="stylesheet" href="/PHP_2/Admin/Public/dist/FontAwesome3.2.1/css/font-awesome.css">

    <script type="text/javascript" charset="utf-8" src="/PHP_2/Admin/Public/dist/baiduUeditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/PHP_2/Admin/Public/dist/baiduUeditor/ueditor.all.min.js"> </script>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <script type="text/javascript" charset="utf-8" src="/PHP_2/Admin/Public/dist/baiduUeditor/lang/zh-cn/zh-cn.js"></script>
  

    <!-- <link rel="stylesheet" href="/PHP_2/Admin/Public/dist/lib/css/booksPage.css"> -->
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
            <a href="index.html" title="" class="logo"><img src="/PHP_2/Admin/Public/TPLDIST/images/logo.png" alt="" /></a>
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
                <a title="" class="leftUserDrop"><img src="/PHP_2/Admin/Public/TPLDIST/images/user.png" alt="" /><span><strong>3</strong></span></a><span><?php echo ($user_name); ?></span>
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
            <a href="<?php echo U('Index/index');?>" title=""><img src="/PHP_2/Admin/Public/TPLDIST/images/icons/mainnav/dashboard.png" alt="" /><span>主页</span></a>
        </li>
        <li>
            <a href="" title=""><img src="/PHP_2/Admin/Public/TPLDIST/images/icons/mainnav/ui.png" alt="" /><span>用户</span></a>
            <ul>
                <li><a href="ui.html" title=""><span class="icol-fullscreen"></span>1</a></li>
                <li><a href="ui_icons.html" title=""><span class="icol-images2"></span>Icons</a></li>
                <li><a href="ui_buttons.html" title=""><span class="icol-coverflow"></span>Button sets</a></li>
                <li><a href="ui_grid.html" title=""><span class="icol-view"></span>Grid</a></li>
                <li><a href="ui_custom.html" title=""><span class="icol-cog2"></span>Custom elements</a></li>
                <li><a href="ui_experimental.html" title=""><span class="icol-beta"></span>Experimental</a></li>
            </ul>
        </li>
        <li>
            <a href="<?php echo U('Book/book');?>" class="active" title=""><img src="/PHP_2/Admin/Public/TPLDIST/images/icons/mainnav/forms.png" alt="" /><span>商品</span></a>
            <ul>
                <li><a href="forms.html" title=""><span class="icol-list"></span>Inputs &amp; elements</a></li>
                <li><a href="form_validation.html" title=""><span class="icol-alert"></span>Validation</a></li>
                <li><a href="form_editor.html" title=""><span class="icol-pencil"></span>File uploader &amp; WYSIWYG</a></li>
                <li><a href="form_wizards.html" title=""><span class="icol-signpost"></span>Form wizards</a></li>
            </ul>
        </li>
        <li>
            <a href="<?php echo U('Order/orderList');?>" title=""><img src="/PHP_2/Admin/Public/TPLDIST/images/icons/mainnav/statistics.png" alt="" /><span>订单</span></a>
        </li>
    </ul>

        </div>
        
    </div>
    <!-- Sidebar ends -->
    <!-- Content begins -->
    
    <!-- <link rel="stylesheet" href="/PHP_2/Admin/Public/dist/bootstrap/css/bootstrap.css"> -->
    <div id="content">
        <div class="contentTop">
            <span class="pageTitle"><span class=" icon-book" aria-hidden="true"></span>商品修改</span>
            <div class="clear"></div>
        </div>
        <!-- Breadcrumbs line -->
        <div class="breadLine">
            <div class="bc">
                <ul id="breadcrumbs" class="breadcrumbs">
                    <li><a href="##">主页</a></li>
                    <li><a href="<?php echo U('Book/book');?>">商品</a></li>
                    <li class="current"><a href="##" title="">商品修改</a></li>
                </ul>
            </div>
        </div>
        <!-- Main content -->
        <div class="wrapper" style="padding-top:30px">
            <div class="row ">
                <div class="col-sm-8 col-md-6">
                    <div class="thumbnail " style="padding:30px">
                        <h1>商品修改</h1>
                        <hr>
                        <form class="form-horizontal" action="<?php echo U('Book/bookAction');?>" method="POST" enctype="multipart/form-data" >
                            <input type="hidden" name="book_id" value="<?php echo ($bookDetails["book_id"]); ?>">
                            <div class="form-group">
                                <div class="col-sm-offset-1 col-sm-9">
                                    <label for="imageFile"><img src="/Admin/<?php echo ($bookDetails["image_Name_S"]); ?>" alt="..." class="img-rounded" style="width:160px;height:160px;"></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">书面</label>
                                <div class=" col-sm-9">
                                    <input type="file" name="image_name" id="imageFile">

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">书名</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputEmail3" placeholder="请输入书名" name="book_title" value="<?php echo ($bookDetails["book_title"]); ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">作者</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputPassword3" placeholder="请输入作者" name="book_author" value="<?php echo ($bookDetails["book_author"]); ?>">
                                </div>
                            </div>
                             <div class="form-group">
                                <label for="" class="col-sm-2 control-label">类别</label>
                                <div class=" col-sm-9">
                                    <select class="form-control" name="cate_id">
                                        <?php if(is_array($CateAllData)): foreach($CateAllData as $key=>$val): ?><option value="<?php echo ($val["cate_id"]); ?>"  <?php echo ($val['cate_id'] == $bookDetails['cate_id'])?'selected':'';?> ><?php echo ($val["cate_name"]); ?></option><?php endforeach; endif; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">价格</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputPassword3" placeholder="请输入价格" name="book_price" value="<?php echo ($bookDetails["book_price"]); ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-9">
                                    <script id="book_desc" name="book_desc" type="text/plain"><?php echo ($bookDetails["book_desc"]); ?></script>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group">
                                <div class="col-sm-offset-8 col-sm-10">
                                    <a href="<?php echo U('Book/book');?>" type="submit" class="btn btn-default btn-lg">返回</a>
                                    <button type="submit" class="btn btn-success btn-lg">修改</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
        var bookDes = UE.getEditor('book_desc');
        window.onload = function() {
            bookDes.setHeight(200);

        }
        </script>
    </div>

    
    <!-- Content ends -->
</body>

</html>