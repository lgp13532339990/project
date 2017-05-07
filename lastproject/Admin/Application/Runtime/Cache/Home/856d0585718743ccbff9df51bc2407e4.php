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
                        <a href="#" title="" class="logout"></a>
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
                        <a href="<?php echo U('Index/quit');?>" title="" class="logout"></a>
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
            <a href="<?php echo U('Book/book');?>" class="active" title=""><img src="/Admin/Public/TPLDIST/images/icons/mainnav/forms.png" alt="" /><span>商品</span></a>
            <ul>
                <li><a href="forms.html" title=""><span class="icol-list"></span>Inputs &amp; elements</a></li>
                <li><a href="form_validation.html" title=""><span class="icol-alert"></span>Validation</a></li>
                <li><a href="form_editor.html" title=""><span class="icol-pencil"></span>File uploader &amp; WYSIWYG</a></li>
                <li><a href="form_wizards.html" title=""><span class="icol-signpost"></span>Form wizards</a></li>
            </ul>
        </li>
        <li>
            <a href="<?php echo U('Order/orderList');?>" title=""><img src="/Admin/Public/TPLDIST/images/icons/mainnav/statistics.png" alt="" /><span>订单</span></a>
        </li>
        <!-- <li>
                        <a href="messages.html" title=""><img src="/Admin/Public/TPLDIST/images/icons/mainnav/messages.png" alt="" /><span>Messages</span></a>
                    </li>
                    <li>
                        <a href="statistics.html" title=""><img src="/Admin/Public/TPLDIST/images/icons/mainnav/statistics.png" alt="" /><span>Statistics</span></a>
                    </li>
                    <li>
                        <a href="tables.html" title=""><img src="/Admin/Public/TPLDIST/images/icons/mainnav/tables.png" alt="" /><span>Tables</span></a>
                        <ul>
                            <li><a href="tables.html" title=""><span class="icol-frames"></span>Standard tables</a></li>
                            <li><a href="tables_dynamic.html" title=""><span class="icol-refresh"></span>Dynamic table</a></li>
                            <li><a href="tables_control.html" title=""><span class="icol-bullseye"></span>Tables with control</a></li>
                            <li><a href="tables_sortable.html" title=""><span class="icol-transfer"></span>Sortable and resizable</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="other_calendar.html" title=""><img src="/Admin/Public/TPLDIST/images/icons/mainnav/other.png" alt="" /><span>Other pages</span></a>
                        <ul>
                            <li><a href="other_calendar.html" title=""><span class="icol-dcalendar"></span>Calendar</a></li>
                            <li><a href="other_gallery.html" title=""><span class="icol-images2"></span>Images gallery</a></li>
                            <li><a href="other_file_manager.html" title=""><span class="icol-files"></span>File manager</a></li>
                            <li><a href="#" title="" class="exp"><span class="icol-alert"></span>Error pages <span class="dataNumRed">6</span></a>
                                <ul>
                                    <li><a href="other_403.html" title="">403 error</a></li>
                                    <li><a href="other_404.html" title="">404 error</a></li>
                                    <li><a href="other_405.html" title="">405 error</a></li>
                                    <li><a href="other_500.html" title="">500 error</a></li>
                                    <li><a href="other_503.html" title="">503 error</a></li>
                                    <li><a href="other_offline.html" title="">Website is offline error</a></li>
                                </ul>
                            </li>
                            <li><a href="other_typography.html" title=""><span class="icol-create"></span>Typography</a></li>
                            <li><a href="other_invoice.html" title=""><span class="icol-money2"></span>Invoice template</a></li>
                        </ul>
                    </li> -->
    </ul>

        </div>
        
    </div>
    <!-- Sidebar ends -->
    <!-- Content begins -->
    
    <!-- <link rel="stylesheet" href="/Admin/Public/dist/bootstrap/css/bootstrap.css"> -->
    <div id="content">
        <div class="contentTop">
            <span class="pageTitle"><span class=" icon-book" aria-hidden="true"></span>商品评论</span>
            <div class="clear"></div>
        </div>
        <!-- Breadcrumbs line -->
        <div class="breadLine">
            <div class="bc">
                <ul id="breadcrumbs" class="breadcrumbs">
                    <li><a href="##">主页</a></li>
                    <li><a href="<?php echo U('Book/book');?>">商品</a>
                    </li>
                    <li class="current"><a href="##" title="">商品评论</a></li>
                </ul>
            </div>
        </div>
        <!-- Main content -->
        <div class="wrapper" style="padding-top:30px" style="">
            <div class="media col-xs-8 thumbnail " style="padding:30px;max-height:600px;">
                <h1 >书名：<?php echo ($bookData["book_title"]); ?></h1>
                    
                <table class="table table-hover" style="margin-top:20px;">
                    <tr>
                        <th>ID</th>
                        <th>评论用户</th>
                        <th>评论内容</th>
                        <th>评论时间</th>
                        <!-- <th>书详情</th> -->
                        <th>操作</th>
                    </tr>

                    <?php if(is_array($CommentData)): $i = 0; $__LIST__ = $CommentData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><tr>
                            <td><?php echo ($val["comment_id"]); ?></td>
                            <td><?php echo ($val["user_id"]); ?></td>
                            <td><?php echo ($val["comment_content"]); ?></td>
                            <td><?php echo ($val["comment_addtime"]); ?></td>
                            
                            <!-- <td><?php echo ($val["book_desc"]); ?></td> -->
                            <td>
                                <a href="<?php echo U('Book/bookCommentEdit',array('comment_id'=>$val['comment_id'],'book_id'=>$book_id));?>" class="btn btn-warning btn-xs">修改</a>
                                <a href="<?php echo U('Book/bookCommentDeleteAction',array('comment_id'=>$val['comment_id'],'book_id'=>$book_id));?>" class="btn btn-danger btn-xs">删除</a>
                            </td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>

                </table>
            </div>
        </div>
        <!-- Main content ends -->

    
    <!-- Content ends -->
</body>

</html>