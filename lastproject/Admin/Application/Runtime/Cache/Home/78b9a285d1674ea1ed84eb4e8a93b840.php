<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html >

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <title>Aquincum - premium admin template by Eugene Kopyov</title>
    <script type="text/javascript" src="/lastproject/Admin/Public/dist/jquery1.9.1/jquery.min.js"></script>
    <!-- <script type="text/javascript" src="/lastproject/Admin/Public/dist/bootstrap/js/bootstrap.js"></script> -->
    <script type="text/javascript" src="/lastproject/Admin/Public/dist/bootstrap/js/bootstrap.js"></script>

    <link rel="stylesheet" href="/lastproject/Admin/Public/dist/bootstrap/css/bootstrap.css">
    <link href="/lastproject/Admin/Public/TPLDIST/css/styles.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="/lastproject/Admin/Public/dist/jquery1.7.2/jquery.min.js"></script>
    <script type="text/javascript" src="/lastproject/Admin/Public/TPLDIST/js/plugins/forms/ui.spinner.js"></script>
    <script type="text/javascript" src="/lastproject/Admin/Public/TPLDIST/js/plugins/forms/jquery.mousewheel.js"></script>
    <script type="text/javascript" src="/lastproject/Admin/Public/dist/jqueryUi1.8/jquery-ui.min.js"></script>
    <script type="text/javascript" src="/lastproject/Admin/Public/TPLDIST/js/plugins/charts/excanvas.min.js"></script>
    <script type="text/javascript" src="/lastproject/Admin/Public/TPLDIST/js/plugins/charts/jquery.flot.js"></script>
    <script type="text/javascript" src="/lastproject/Admin/Public/TPLDIST/js/plugins/charts/jquery.flot.orderBars.js"></script>
    <script type="text/javascript" src="/lastproject/Admin/Public/TPLDIST/js/plugins/charts/jquery.flot.pie.js"></script>
    <script type="text/javascript" src="/lastproject/Admin/Public/TPLDIST/js/plugins/charts/jquery.flot.resize.js"></script>
    <script type="text/javascript" src="/lastproject/Admin/Public/TPLDIST/js/plugins/charts/jquery.sparkline.min.js"></script>
    <script type="text/javascript" src="/lastproject/Admin/Public/TPLDIST/js/plugins/tables/jquery.dataTables.js"></script>
    <script type="text/javascript" src="/lastproject/Admin/Public/TPLDIST/js/plugins/tables/jquery.sortable.js"></script>
    <script type="text/javascript" src="/lastproject/Admin/Public/TPLDIST/js/plugins/tables/jquery.resizable.js"></script>
    <script type="text/javascript" src="/lastproject/Admin/Public/TPLDIST/js/plugins/forms/autogrowtextarea.js"></script>
    <script type="text/javascript" src="/lastproject/Admin/Public/TPLDIST/js/plugins/forms/jquery.uniform.js"></script>
    <script type="text/javascript" src="/lastproject/Admin/Public/TPLDIST/js/plugins/forms/jquery.inputlimiter.min.js"></script>
    <script type="text/javascript" src="/lastproject/Admin/Public/TPLDIST/js/plugins/forms/jquery.tagsinput.min.js"></script>
    <script type="text/javascript" src="/lastproject/Admin/Public/TPLDIST/js/plugins/forms/jquery.maskedinput.min.js"></script>
    <script type="text/javascript" src="/lastproject/Admin/Public/TPLDIST/js/plugins/forms/jquery.autotab.js"></script>
    <script type="text/javascript" src="/lastproject/Admin/Public/TPLDIST/js/plugins/forms/jquery.chosen.min.js"></script>
    <script type="text/javascript" src="/lastproject/Admin/Public/TPLDIST/js/plugins/forms/jquery.dualListBox.js"></script>
    <script type="text/javascript" src="/lastproject/Admin/Public/TPLDIST/js/plugins/forms/jquery.cleditor.js"></script>
    <script type="text/javascript" src="/lastproject/Admin/Public/TPLDIST/js/plugins/forms/jquery.ibutton.js"></script>
    <script type="text/javascript" src="/lastproject/Admin/Public/TPLDIST/js/plugins/forms/jquery.validationEngine-en.js"></script>
    <script type="text/javascript" src="/lastproject/Admin/Public/TPLDIST/js/plugins/forms/jquery.validationEngine.js"></script>
    <script type="text/javascript" src="/lastproject/Admin/Public/TPLDIST/js/plugins/uploader/plupload.js"></script>
    <script type="text/javascript" src="/lastproject/Admin/Public/TPLDIST/js/plugins/uploader/plupload.html4.js"></script>
    <script type="text/javascript" src="/lastproject/Admin/Public/TPLDIST/js/plugins/uploader/plupload.html5.js"></script>
    <script type="text/javascript" src="/lastproject/Admin/Public/TPLDIST/js/plugins/uploader/jquery.plupload.queue.js"></script>
    <script type="text/javascript" src="/lastproject/Admin/Public/TPLDIST/js/plugins/wizards/jquery.form.wizard.js"></script>
    <script type="text/javascript" src="/lastproject/Admin/Public/TPLDIST/js/plugins/wizards/jquery.validate.js"></script>
    <script type="text/javascript" src="/lastproject/Admin/Public/TPLDIST/js/plugins/wizards/jquery.form.js"></script>
    <script type="text/javascript" src="/lastproject/Admin/Public/TPLDIST/js/plugins/ui/jquery.collapsible.min.js"></script>
    <script type="text/javascript" src="/lastproject/Admin/Public/TPLDIST/js/plugins/ui/jquery.breadcrumbs.js"></script>
    <script type="text/javascript" src="/lastproject/Admin/Public/TPLDIST/js/plugins/ui/jquery.tipsy.js"></script>
    <script type="text/javascript" src="/lastproject/Admin/Public/TPLDIST/js/plugins/ui/jquery.progress.js"></script>
    <script type="text/javascript" src="/lastproject/Admin/Public/TPLDIST/js/plugins/ui/jquery.timeentry.min.js"></script>
    <script type="text/javascript" src="/lastproject/Admin/Public/TPLDIST/js/plugins/ui/jquery.colorpicker.js"></script>
    <script type="text/javascript" src="/lastproject/Admin/Public/TPLDIST/js/plugins/ui/jquery.jgrowl.js"></script>
    <script type="text/javascript" src="/lastproject/Admin/Public/TPLDIST/js/plugins/ui/jquery.fancybox.js"></script>
    <script type="text/javascript" src="/lastproject/Admin/Public/TPLDIST/js/plugins/ui/jquery.fileTree.js"></script>
    <script type="text/javascript" src="/lastproject/Admin/Public/TPLDIST/js/plugins/ui/jquery.sourcerer.js"></script>
    <script type="text/javascript" src="/lastproject/Admin/Public/TPLDIST/js/plugins/others/jquery.fullcalendar.js"></script>
    <script type="text/javascript" src="/lastproject/Admin/Public/TPLDIST/js/plugins/others/jquery.elfinder.js"></script>
    <script type="text/javascript" src="/lastproject/Admin/Public/TPLDIST/js/plugins/ui/jquery.easytabs.min.js"></script>
    <script type="text/javascript" src="/lastproject/Admin/Public/TPLDIST/js/files/bootstrap.js"></script>

    <script type="text/javascript" src="/lastproject/Admin/Public/TPLDIST/js/files/functions.js"></script>
    <script type="text/javascript" src="/lastproject/Admin/Public/TPLDIST/js/charts/chart.js"></script>
    <script type="text/javascript" src="/lastproject/Admin/Public/TPLDIST/js/charts/hBar_side.js"></script>
    <link rel="stylesheet" href="/lastproject/Admin/Public/dist/FontAwesome3.2.1/css/font-awesome.css">

    <script type="text/javascript" charset="utf-8" src="/lastproject/Admin/Public/dist/baiduUeditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/lastproject/Admin/Public/dist/baiduUeditor/ueditor.all.min.js"> </script>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <script type="text/javascript" charset="utf-8" src="/lastproject/Admin/Public/dist/baiduUeditor/lang/zh-cn/zh-cn.js"></script>
  

    <!-- <link rel="stylesheet" href="/lastproject/Admin/Public/dist/lib/css/booksPage.css"> -->
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
            <a href="index.html" title="" class="logo"><img src="/lastproject/Admin/Public/TPLDIST/images/logo.png" alt="" /></a>
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
                <a title="" class="leftUserDrop"><img src="/lastproject/Admin/Public/TPLDIST/images/user.png" alt="" /><span><strong>3</strong></span></a><span><?php echo ($user_name); ?></span>
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
            <a href="<?php echo U('Index/index');?>" title=""><img src="/lastproject/Admin/Public/TPLDIST/images/icons/mainnav/dashboard.png" alt="" /><span>主页</span></a>
        </li>
        <li>
            <a href="" title=""><img src="/lastproject/Admin/Public/TPLDIST/images/icons/mainnav/ui.png" alt="" /><span>用户</span></a>
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
            <a href="<?php echo U('Book/book');?>" class="active" title=""><img src="/lastproject/Admin/Public/TPLDIST/images/icons/mainnav/forms.png" alt="" /><span>商品</span></a>
            <ul>
                <li><a href="forms.html" title=""><span class="icol-list"></span>Inputs &amp; elements</a></li>
                <li><a href="form_validation.html" title=""><span class="icol-alert"></span>Validation</a></li>
                <li><a href="form_editor.html" title=""><span class="icol-pencil"></span>File uploader &amp; WYSIWYG</a></li>
                <li><a href="form_wizards.html" title=""><span class="icol-signpost"></span>Form wizards</a></li>
            </ul>
        </li>
        <li>
            <a href="<?php echo U('Order/orderList');?>" title=""><img src="/lastproject/Admin/Public/TPLDIST/images/icons/mainnav/statistics.png" alt="" /><span>订单</span></a>
        </li>
        <!-- <li>
                        <a href="messages.html" title=""><img src="/lastproject/Admin/Public/TPLDIST/images/icons/mainnav/messages.png" alt="" /><span>Messages</span></a>
                    </li>
                    <li>
                        <a href="statistics.html" title=""><img src="/lastproject/Admin/Public/TPLDIST/images/icons/mainnav/statistics.png" alt="" /><span>Statistics</span></a>
                    </li>
                    <li>
                        <a href="tables.html" title=""><img src="/lastproject/Admin/Public/TPLDIST/images/icons/mainnav/tables.png" alt="" /><span>Tables</span></a>
                        <ul>
                            <li><a href="tables.html" title=""><span class="icol-frames"></span>Standard tables</a></li>
                            <li><a href="tables_dynamic.html" title=""><span class="icol-refresh"></span>Dynamic table</a></li>
                            <li><a href="tables_control.html" title=""><span class="icol-bullseye"></span>Tables with control</a></li>
                            <li><a href="tables_sortable.html" title=""><span class="icol-transfer"></span>Sortable and resizable</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="other_calendar.html" title=""><img src="/lastproject/Admin/Public/TPLDIST/images/icons/mainnav/other.png" alt="" /><span>Other pages</span></a>
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
    
    <!-- <link rel="stylesheet" href="/lastproject/Admin/Public/dist/bootstrap/css/bootstrap.css"> -->
    <div id="content">
        <div class="contentTop">
            <span class="pageTitle"><span class=" icon-book" aria-hidden="true"></span>商品信息</span>
            <div class="clear"></div>
        </div>
        <!-- Breadcrumbs line -->
        <div class="breadLine">
            <div class="bc">
                <ul id="breadcrumbs" class="breadcrumbs">
                    <li><a href="##">主页</a></li>
                    <li><a href="<?php echo U('Book/book');?>">商品</a>
                    </li>
                    <li class="current"><a href="##" title="">商品信息</a></li>
                </ul>
            </div>
        </div>
        <!-- Main content -->
        <div class="wrapper" style="padding-top:30px">
            <a class="btn btn-info btn" style="margin-bottom:10px;" data-toggle="modal" data-target="#myModalBook">添加商品</a>
            <br>
            <a class="btn btn-success btn" style="margin-bottom:10px;" data-toggle="modal" data-target="#showMyModalCat">查看分类</a>
            <a class="btn btn-info btn" style="margin-bottom:10px;" data-toggle="modal" data-target="#addmyModalCat">添加分类</a>
            <a class="btn btn-info btn" style="margin-bottom:10px;" data-toggle="modal" data-target="#editmyModalCat">修改分类名称</a>
            <table class="table table-hover">
                <tr>
                    <th>ID</th>
                    <th>书名</th>
                    <th>作者</th>
                    <th>类别</th>
                    <th>价格</th>
                    <th>添加时间</th>
                    <!-- <th>书详情</th> -->
                    <th>操作</th>
                </tr>
                <?php if(is_array($Booklist)): $i = 0; $__LIST__ = $Booklist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><tr>
                        <td><?php echo ($val["book_id"]); ?></td>
                        <td><?php echo ($val["book_title"]); ?></td>
                        <td><?php echo ($val["book_author"]); ?></td>
                        <td><?php echo ($val["cate_id"]); ?></td>
                        <td>￥<?php echo ($val["book_price"]); ?></td>
                        <td><?php echo (date("Y-m-d H:d:s",$val["book_pudate"])); ?></td>
                        <!-- <td><?php echo ($val["book_desc"]); ?></td> -->
                        <td>
                            <a href='<?php echo U("Book/bookDetails",array("book_id"=>$val["book_id"]));?>' class="btn btn-success btn-xs">查看详情</a>
                            <a href='<?php echo U("Book/bookComment",array("book_id"=>$val["book_id"]));?>' class="btn btn-success btn-xs">查看评论</a>
                            <a href="<?php echo U('Book/bookEdit',array('book_id'=>$val['book_id']));?>" class="btn btn-warning btn-xs">修改</a>
                            <a href="<?php echo U('Book/bookDelete',array('book_id'=>$val['book_id']));?>" class="btn btn-danger btn-xs">删除</a>
                        </td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </table>
            <div class="bookListPage">
                <?php echo ($page); ?>
            </div>
           
        </div>
        <!-- Main content ends -->
        <!-- 添加商品模态框 -->
        <div class="modal fade " id="myModalBook" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog " role="document" style="margin-top:10%">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">添加商品</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo U('Book/BookAdd');?>" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="form-group">
                                <div class="col-sm-offset-1 col-sm-9">
                                    <label for="imageFile"><img src="/lastproject/Admin/Public/dist/bookImage/1.jpg" alt="..." class="img-rounded"></label>
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
                                    <input type="text" class="form-control" id="inputEmail3" placeholder="请输入书名" name="book_title" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">作者</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputPassword3" placeholder="请输入作者" name="book_author" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">类别</label>
                                <div class=" col-sm-9">
                                    <select class="form-control" name="cate_id">
                                        <?php if(is_array($CateAllData)): $i = 0; $__LIST__ = $CateAllData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><option value="<?php echo ($val["cate_id"]); ?>"><?php echo ($val["cate_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">价格</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" id="inputPassword3" placeholder="请输入价格" name="book_price" value="<?php echo ($bookDetails["book_price"]); ?>">
                                </div>
                            </div>
                            <div class="form-group" style="margin-bottom:0px;">
                                <div class="col-sm-offset-2 col-sm-9">
                                    <script id="book_desc" name="book_desc" type="text/plain"></script>
                                </div>
                            </div>
                            <!-- <div class="form-group">
                                <div class="col-sm-offset-8 col-sm-10">
                                    <button type="submit" class="btn btn-default btn-lg">返回</button>
                                    <button type="submit" class="btn btn-success btn-lg">修改</button>
                                </div>
                            </div> -->
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                            <button type="submit" class="btn btn-primary">添加</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script type="text/javascript">
        var bookDes = UE.getEditor('book_desc');
        window.onload = function() {
            bookDes.setHeight(200);

        }
        </script>
        <!-- 查看分类信息模态框 -->
        <div class="modal fade " id="showMyModalCat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-sm" role="document" style="margin-top:10%">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">分类名称</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <?php if(is_array($CateAllData)): $i = 0; $__LIST__ = $CateAllData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><div class="col-md-3">
                                    <button type="button" class="btn btn-default" style="outline:none;"><?php echo ($val["cate_name"]); ?></button>
                                </div><?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- 添加分类信息模态框 -->
        <div class="modal fade " id="addmyModalCat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-sm" role="document" style="margin-top:10%">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">添加分类</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo U('Book/bookCateAdd');?>" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="inputPassword3" class="col-xs-4 control-label">
                                    <h5>分类名称</h5></label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="inputPassword3" placeholder="请输入分类名称" name="cate_name" value="">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">关闭</button>
                            <button type="submit" class="btn btn-success">添加</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- editmyModalCat -->
        <div class="modal fade " id="editmyModalCat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-sm" role="document" style="margin-top:10%">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">修改分类</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo U('Book/bookCateEdit');?>" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="" class="col-sm-5 control-label"><h5>分类名称</h5></label>
                                <div class=" col-sm-7">
                                    <select class="form-control" name="cate_id">
                                        <?php if(is_array($CateAllData)): $i = 0; $__LIST__ = $CateAllData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><option value="<?php echo ($val["cate_id"]); ?>"><?php echo ($val["cate_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-5 control-label"><h5>新名称</h5></label>
                                <div class=" col-sm-7">
                                    <input type="text" name="cate_name" id="imageFile" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">关闭</button>
                            <button type="submit" class="btn btn-success">修改</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    
    <!-- Content ends -->
</body>

</html>