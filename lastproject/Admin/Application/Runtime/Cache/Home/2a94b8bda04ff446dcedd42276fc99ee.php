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
                        <a href="<?php echo U('Index/index');?>" title="" class="active"><img src="/lastproject/Admin/Public/TPLDIST/images/icons/mainnav/dashboard.png" alt="" /><span>主页</span></a>
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
                        <a href="<?php echo U('Book/book');?>" title=""><img src="/lastproject/Admin/Public/TPLDIST/images/icons/mainnav/forms.png" alt="" /><span>商品</span></a>
                    </li>
                     <li>
                        <a href="<?php echo U('Order/orderList');?>" title="" ><img src="/lastproject/Admin/Public/TPLDIST/images/icons/mainnav/statistics.png" alt="" /><span>订单</span></a>
                    </li>
                    <!-- <li>
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
    
        
        <div id="content">
            <div class="contentTop">
                <span class="pageTitle"><span class="icon-screen"></span>Dashboard</span>
                
                <div class="clear"></div>
            </div>
            <!-- Breadcrumbs line -->
            <div class="breadLine">
                <div class="bc">
                    <ul id="breadcrumbs" class="breadcrumbs">
                        <li><a href="#">主页</a></li>
                       <!--  <li><a href="#">UI elements</a>
                            <ul>
                                <li><a href="ui.html" title="">General elements</a></li>
                                <li><a href="ui_icons.html" title="">Icons</a></li>
                                <li><a href="ui_buttons.html" title="">Button sets</a></li>
                                <li><a href="ui_custom.html" title="">Custom elements</a></li>
                                <li><a href="ui_experimental.html" title="">Experimental</a></li>
                            </ul>
                        </li>
                        <li class="current"><a href="ui_grid.html" title="">Grid</a></li> -->
                    </ul>
                </div>
                <div class="breadLinks">
                    <ul>
                        <li><a href="#" title=""><i class="icos-list"></i><span>Orders</span> <strong>(+58)</strong></a></li>
                        <li><a href="#" title=""><i class="icos-check"></i><span>Tasks</span> <strong>(+12)</strong></a></li>
                        <li class="has">
                            <a title="">
                                <i class="icos-money3"></i>
                                <span>Invoices</span>
                                <span><img src="/lastproject/Admin/Public/TPLDIST/images/elements/control/hasddArrow.png" alt="" /></span>
                            </a>
                            <ul>
                                <li><a href="#" title=""><span class="icos-add"></span>New invoice</a></li>
                                <li><a href="#" title=""><span class="icos-archive"></span>History</a></li>
                                <li><a href="#" title=""><span class="icos-printer"></span>Print invoices</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="clear"></div>
                </div>
            </div>
            <!-- Main content -->
            <div class="wrapper">
                <ul class="middleNavR">
                    <li>
                        <a href="#" title="Add an article" class="tipN"><img src="/lastproject/Admin/Public/TPLDIST/images/icons/middlenav/create.png" alt="" /></a>
                    </li>
                    <li>
                        <a href="#" title="Upload files" class="tipN"><img src="/lastproject/Admin/Public/TPLDIST/images/icons/middlenav/upload.png" alt="" /></a>
                    </li>
                    <li>
                        <a href="#" title="Add something" class="tipN"><img src="/lastproject/Admin/Public/TPLDIST/images/icons/middlenav/add.png" alt="" /></a>
                    </li>
                    <li>
                        <a href="#" title="Messages" class="tipN"><img src="/lastproject/Admin/Public/TPLDIST/images/icons/middlenav/dialogs.png" alt="" /></a><strong>8</strong></li>
                    <li>
                        <a href="#" title="Check statistics" class="tipN"><img src="/lastproject/Admin/Public/TPLDIST/images/icons/middlenav/stats.png" alt="" /></a>
                    </li>
                </ul>
                <!-- Chart -->
                <div class="widget chartWrapper">
                    <div class="whead">
                        <h6>Charts</h6>
                        <div class="titleOpt">
                            <a href="#" data-toggle="dropdown"><span class="icos-cog3"></span><span class="clear"></span></a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="#"><span class="icos-add"></span>Add</a></li>
                                <li><a href="#"><span class="icos-trash"></span>Remove</a></li>
                                <li><a href="#" class=""><span class="icos-pencil"></span>Edit</a></li>
                                <li><a href="#" class=""><span class="icos-heart"></span>Do whatever you like</a></li>
                            </ul>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="body">
                        <div class="chart"></div>
                    </div>
                </div>
                <!-- 6 + 6 -->
                <div class="fluid">
                    <!-- Messages #1 -->
                    <div class="widget grid6">
                        <div class="whead">
                            <h6>Messages layout #1</h6>
                            <div class="on_off">
                                <span class="icon-reload-CW"></span>
                                <input type="checkbox" id="check1" checked="checked" name="chbox" />
                            </div>
                            <div class="clear"></div>
                        </div>
                        <ul class="messagesOne">
                            <li class="by_user">
                                <a href="#" title=""><img src="/lastproject/Admin/Public/TPLDIST/images/live/face1.png" alt="" /></a>
                                <div class="messageArea">
                                    <span class="aro"></span>
                                    <div class="infoRow">
                                        <span class="name"><strong>John</strong> says:</span>
                                        <span class="time">3 hours ago</span>
                                        <div class="clear"></div>
                                    </div>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel est enim, vel eleifend felis. Ut volutpat, leo eget euismod scelerisque, eros purus lacinia velit, nec rhoncus mi dui eleifend orci. Phasellus ut sem urna, id congue libero. Nulla eget arcu vel massa suscipit ultricies ac id velit
                                </div>
                                <div class="clear"></div>
                            </li>
                            <li class="divider"><span></span></li>
                            <li class="by_me">
                                <a href="#" title=""><img src="/lastproject/Admin/Public/TPLDIST/images/live/face2.png" alt="" /></a>
                                <div class="messageArea">
                                    <span class="aro"></span>
                                    <div class="infoRow">
                                        <span class="name"><strong>Eugene</strong> says:</span>
                                        <span class="time">3 hours ago</span>
                                        <div class="clear"></div>
                                    </div>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel est enim, vel eleifend felis. Ut volutpat, leo eget euismod scelerisque, eros purus lacinia velit, nec rhoncus mi dui eleifend orci. Phasellus ut sem urna, id congue libero. Nulla eget arcu vel massa suscipit ultricies ac id velit
                                </div>
                                <div class="clear"></div>
                            </li>
                            <li class="by_me">
                                <a href="#" title=""><img src="/lastproject/Admin/Public/TPLDIST/images/live/face2.png" alt="" /></a>
                                <div class="messageArea">
                                    <span class="aro"></span>
                                    <div class="infoRow">
                                        <span class="name"><strong>Eugene</strong> says:</span>
                                        <span class="time">3 hours ago</span>
                                        <div class="clear"></div>
                                    </div>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel est enim, vel eleifend felis. Ut volutpat, leo eget euismod scelerisque, eros purus lacinia velit, nec rhoncus mi dui eleifend orci. Phasellus ut sem urna, id congue libero. Nulla eget arcu vel massa suscipit ultricies ac id velit
                                </div>
                                <div class="clear"></div>
                            </li>
                            <li class="divider"><span></span></li>
                            <li class="by_user">
                                <a href="#" title=""><img src="/lastproject/Admin/Public/TPLDIST/images/live/face1.png" alt="" /></a>
                                <div class="messageArea">
                                    <span class="aro"></span>
                                    <div class="infoRow">
                                        <span class="name"><strong>John</strong> says:</span>
                                        <span class="time">3 hours ago</span>
                                        <div class="clear"></div>
                                    </div>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel est enim, vel eleifend felis. Ut volutpat, leo eget euismod scelerisque, eros purus lacinia velit, nec rhoncus mi dui eleifend orci. Phasellus ut sem urna, id congue libero. Nulla eget arcu vel massa suscipit ultricies ac id velit
                                </div>
                                <div class="clear"></div>
                            </li>
                            <li class="divider"><span></span></li>
                            <li class="by_me">
                                <a href="#" title=""><img src="/lastproject/Admin/Public/TPLDIST/images/live/face2.png" alt="" /></a>
                                <div class="messageArea">
                                    <span class="aro"></span>
                                    <div class="infoRow">
                                        <span class="name"><strong>Eugene</strong> says:</span>
                                        <span class="time">3 hours ago</span>
                                        <div class="clear"></div>
                                    </div>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel est enim, vel eleifend felis. Ut volutpat, leo eget euismod scelerisque, eros purus lacinia velit, nec rhoncus mi dui eleifend orci. Phasellus ut sem urna, id congue libero. Nulla eget arcu vel massa suscipit ultricies ac id velit
                                </div>
                                <div class="clear"></div>
                            </li>
                        </ul>
                    </div>
                    <!-- Calendar -->
                    <div class="widget grid6">
                        <div class="whead">
                            <h6>Calendar</h6>
                            <div class="clear"></div>
                        </div>
                        <div id="calendar"></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="widget">
                    <div class="whead">
                        <h6>Table with hidden toolbar</h6>
                        <div class="clear"></div>
                    </div>
                    <div id="dyn" class="hiddenpars">
                        <a class="tOptions" title="Options"><img src="/lastproject/Admin/Public/TPLDIST/images/icons/options" alt="" /></a>
                        <table cellpadding="0" cellspacing="0" border="0" class="dTable" id="dynamic">
                            <thead>
                                <tr>
                                    <th>Rendering engine<span class="sorting" style="display: block;"></span></th>
                                    <th>Browser</th>
                                    <th>Platform(s)</th>
                                    <th>Engine version</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="gradeX">
                                    <td>Trident</td>
                                    <td>Internet Explorer 4.0</td>
                                    <td>Win 95+</td>
                                    <td class="center">4</td>
                                </tr>
                                <tr class="gradeC">
                                    <td>Trident</td>
                                    <td>Internet Explorer 5.0</td>
                                    <td>Win 95+</td>
                                    <td class="center">5</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Trident</td>
                                    <td>Internet Explorer 5.5</td>
                                    <td>Win 95+</td>
                                    <td class="center">5.5</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Trident</td>
                                    <td>Internet Explorer 6</td>
                                    <td>Win 98+</td>
                                    <td class="center">6</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Trident</td>
                                    <td>Internet Explorer 7</td>
                                    <td>Win XP SP2+</td>
                                    <td class="center">7</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Trident</td>
                                    <td>AOL browser (AOL desktop)</td>
                                    <td>Win XP</td>
                                    <td class="center">6</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Firefox 1.0</td>
                                    <td>Win 98+ / OSX.2+</td>
                                    <td class="center">1.7</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Firefox 1.5</td>
                                    <td>Win 98+ / OSX.2+</td>
                                    <td class="center">1.8</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Firefox 2.0</td>
                                    <td>Win 98+ / OSX.2+</td>
                                    <td class="center">1.8</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Firefox 3.0</td>
                                    <td>Win 2k+ / OSX.3+</td>
                                    <td class="center">1.9</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Camino 1.0</td>
                                    <td>OSX.2+</td>
                                    <td class="center">1.8</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Camino 1.5</td>
                                    <td>OSX.3+</td>
                                    <td class="center">1.8</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Netscape 7.2</td>
                                    <td>Win 95+ / Mac OS 8.6-9.2</td>
                                    <td class="center">1.7</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Netscape Browser 8</td>
                                    <td>Win 98SE+</td>
                                    <td class="center">1.7</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Netscape Navigator 9</td>
                                    <td>Win 98+ / OSX.2+</td>
                                    <td class="center">1.8</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Mozilla 1.0</td>
                                    <td>Win 95+ / OSX.1+</td>
                                    <td class="center">1</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Mozilla 1.1</td>
                                    <td>Win 95+ / OSX.1+</td>
                                    <td class="center">1.1</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Mozilla 1.2</td>
                                    <td>Win 95+ / OSX.1+</td>
                                    <td class="center">1.2</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Mozilla 1.3</td>
                                    <td>Win 95+ / OSX.1+</td>
                                    <td class="center">1.3</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Mozilla 1.4</td>
                                    <td>Win 95+ / OSX.1+</td>
                                    <td class="center">1.4</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Mozilla 1.5</td>
                                    <td>Win 95+ / OSX.1+</td>
                                    <td class="center">1.5</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Mozilla 1.6</td>
                                    <td>Win 95+ / OSX.1+</td>
                                    <td class="center">1.6</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Mozilla 1.7</td>
                                    <td>Win 98+ / OSX.1+</td>
                                    <td class="center">1.7</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Mozilla 1.8</td>
                                    <td>Win 98+ / OSX.1+</td>
                                    <td class="center">1.8</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Seamonkey 1.1</td>
                                    <td>Win 98+ / OSX.2+</td>
                                    <td class="center">1.8</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Epiphany 2.20</td>
                                    <td>Gnome</td>
                                    <td class="center">1.8</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Webkit</td>
                                    <td>Safari 1.2</td>
                                    <td>OSX.3</td>
                                    <td class="center">125.5</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Webkit</td>
                                    <td>Safari 1.3</td>
                                    <td>OSX.3</td>
                                    <td class="center">312.8</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Webkit</td>
                                    <td>Safari 2.0</td>
                                    <td>OSX.4+</td>
                                    <td class="center">419.3</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Webkit</td>
                                    <td>Safari 3.0</td>
                                    <td>OSX.4+</td>
                                    <td class="center">522.1</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Webkit</td>
                                    <td>OmniWeb 5.5</td>
                                    <td>OSX.4+</td>
                                    <td class="center">420</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Webkit</td>
                                    <td>iPod Touch / iPhone</td>
                                    <td>iPod</td>
                                    <td class="center">420.1</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Webkit</td>
                                    <td>S60</td>
                                    <td>S60</td>
                                    <td class="center">413</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Presto</td>
                                    <td>Opera 7.0</td>
                                    <td>Win 95+ / OSX.1+</td>
                                    <td class="center">-</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Presto</td>
                                    <td>Opera 7.5</td>
                                    <td>Win 95+ / OSX.2+</td>
                                    <td class="center">-</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Presto</td>
                                    <td>Opera 8.0</td>
                                    <td>Win 95+ / OSX.2+</td>
                                    <td class="center">-</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Presto</td>
                                    <td>Opera 8.5</td>
                                    <td>Win 95+ / OSX.2+</td>
                                    <td class="center">-</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Presto</td>
                                    <td>Opera 9.0</td>
                                    <td>Win 95+ / OSX.3+</td>
                                    <td class="center">-</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Presto</td>
                                    <td>Opera 9.2</td>
                                    <td>Win 88+ / OSX.3+</td>
                                    <td class="center">-</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Presto</td>
                                    <td>Opera 9.5</td>
                                    <td>Win 88+ / OSX.3+</td>
                                    <td class="center">-</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Presto</td>
                                    <td>Opera for Wii</td>
                                    <td>Wii</td>
                                    <td class="center">-</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Presto</td>
                                    <td>Nokia N800</td>
                                    <td>N800</td>
                                    <td class="center">-</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Presto</td>
                                    <td>Nintendo DS browser</td>
                                    <td>Nintendo DS</td>
                                    <td class="center">8.5</td>
                                </tr>
                                <tr class="gradeC">
                                    <td>KHTML</td>
                                    <td>Konqureror 3.1</td>
                                    <td>KDE 3.1</td>
                                    <td class="center">3.1</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>KHTML</td>
                                    <td>Konqureror 3.3</td>
                                    <td>KDE 3.3</td>
                                    <td class="center">3.3</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>KHTML</td>
                                    <td>Konqureror 3.5</td>
                                    <td>KDE 3.5</td>
                                    <td class="center">3.5</td>
                                </tr>
                                <tr class="gradeX">
                                    <td>Tasman</td>
                                    <td>Internet Explorer 4.5</td>
                                    <td>Mac OS 8-9</td>
                                    <td class="center">-</td>
                                </tr>
                                <tr class="gradeC">
                                    <td>Tasman</td>
                                    <td>Internet Explorer 5.1</td>
                                    <td>Mac OS 7.6-9</td>
                                    <td class="center">1</td>
                                </tr>
                                <tr class="gradeC">
                                    <td>Tasman</td>
                                    <td>Internet Explorer 5.2</td>
                                    <td>Mac OS 8-X</td>
                                    <td class="center">1</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Misc</td>
                                    <td>NetFront 3.1</td>
                                    <td>Embedded devices</td>
                                    <td class="center">-</td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Misc</td>
                                    <td>NetFront 3.4</td>
                                    <td>Embedded devices</td>
                                    <td class="center">-</td>
                                </tr>
                                <tr class="gradeX">
                                    <td>Misc</td>
                                    <td>Dillo 0.8</td>
                                    <td>Embedded devices</td>
                                    <td class="center">-</td>
                                </tr>
                                <tr class="gradeX">
                                    <td>Misc</td>
                                    <td>Links</td>
                                    <td>Text only</td>
                                    <td class="center">-</td>
                                </tr>
                                <tr class="gradeX">
                                    <td>Misc</td>
                                    <td>Lynx</td>
                                    <td>Text only</td>
                                    <td class="center">-</td>
                                </tr>
                                <tr class="gradeC">
                                    <td>Misc</td>
                                    <td>IE Mobile</td>
                                    <td>Windows Mobile 6</td>
                                    <td class="center">-</td>
                                </tr>
                                <tr class="gradeC">
                                    <td>Misc</td>
                                    <td>PSP browser</td>
                                    <td>PSP</td>
                                    <td class="center">-</td>
                                </tr>
                                <tr class="gradeU">
                                    <td>Other browsers</td>
                                    <td>All others</td>
                                    <td>-</td>
                                    <td class="center">-</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="fluid">
                    <div class="grid6">
                        <!-- Search widget -->
                        <div class="searchLine">
                            <form action="">
                                <input type="text" name="search" class="ac" placeholder="Enter search text..." />
                                <button type="submit" name="find" value=""><span class="icos-search"></span></button>
                            </form>
                        </div>
                        <!-- Multiple files uploader -->
                        <div class="widget">
                            <div class="whead">
                                <h6>WYSIWYG editor</h6>
                                <div class="clear"></div>
                            </div>
                            <textarea id="editor" name="editor" rows="" cols="16">Some cool stuff here</textarea>
                        </div>
                    </div>
                    <!-- Media table -->
                    <div class="widget check grid6">
                        <div class="whead">
                            <span class="titleIcon"><input type="checkbox" id="titleCheck" name="titleCheck" /></span>
                            <h6>Media table</h6>
                            <div class="clear"></div>
                        </div>
                        <table cellpadding="0" cellspacing="0" width="100%" class="tDefault checkAll tMedia" id="checkAll">
                            <thead>
                                <tr>
                                    <td><img src="/lastproject/Admin/Public/TPLDIST/images/elements/other/tableArrows.png" alt="" /></td>
                                    <td width="50">Image</td>
                                    <td class="sortCol">
                                        <div>Description<span></span></div>
                                    </td>
                                    <td width="130" class="sortCol">
                                        <div>Date<span></span></div>
                                    </td>
                                    <td width="120">File info</td>
                                    <td width="100">Actions</td>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <td colspan="6">
                                        <div class="itemActions">
                                            <label>Apply action:</label>
                                            <select>
                                                <option value="">Select action...</option>
                                                <option value="Edit">Edit</option>
                                                <option value="Delete">Delete</option>
                                                <option value="Move">Move somewhere</option>
                                            </select>
                                        </div>
                                        <div class="tPages">
                                            <ul class="pages">
                                                <li class="prev"><a href="#" title=""><span class="icon-arrow-14"></span></a></li>
                                                <li><a href="#" title="" class="active">1</a></li>
                                                <li><a href="#" title="">2</a></li>
                                                <li><a href="#" title="">3</a></li>
                                                <li><a href="#" title="">4</a></li>
                                                <li>...</li>
                                                <li><a href="#" title="">20</a></li>
                                                <li class="next"><a href="#" title=""><span class="icon-arrow-17"></span></a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td>
                                        <input type="checkbox" name="checkRow" />
                                    </td>
                                    <td>
                                        <a href="images/big.png" title="" class="lightbox"><img src="/lastproject/Admin/Public/TPLDIST/images/live/face3.png" alt="" /></a>
                                    </td>
                                    <td class="textL"><a href="#" title="">Image1 description</a></td>
                                    <td>Feb 12, 2012. 12:28</td>
                                    <td class="fileInfo"><span><strong>Size:</strong> 215 Kb</span><span><strong>Format:</strong> .jpg</span></td>
                                    <td class="tableActs">
                                        <a href="#" class="tablectrl_small bDefault tipS" title="Edit"><span class="iconb" data-icon="&#xe1db;"></span></a>
                                        <a href="#" class="tablectrl_small bDefault tipS" title="Remove"><span class="iconb" data-icon="&#xe136;"></span></a>
                                        <a href="#" class="tablectrl_small bDefault tipS" title="Options"><span class="iconb" data-icon="&#xe1f7;"></span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" name="checkRow" />
                                    </td>
                                    <td>
                                        <a href="images/big.png" title="" class="lightbox"><img src="/lastproject/Admin/Public/TPLDIST/images/live/face7.png" alt="" /></a>
                                    </td>
                                    <td class="textL"><a href="#" title="">Image1 description</a></td>
                                    <td>Feb 12, 2012. 12:28</td>
                                    <td class="fileInfo"><span><strong>Size:</strong> 215 Kb</span><span><strong>Format:</strong> .jpg</span></td>
                                    <td class="tableActs">
                                        <a href="#" class="tablectrl_small bDefault tipS" title="Edit"><span class="iconb" data-icon="&#xe1db;"></span></a>
                                        <a href="#" class="tablectrl_small bDefault tipS" title="Remove"><span class="iconb" data-icon="&#xe136;"></span></a>
                                        <a href="#" class="tablectrl_small bDefault tipS" title="Options"><span class="iconb" data-icon="&#xe1f7;"></span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" name="checkRow" />
                                    </td>
                                    <td>
                                        <a href="images/big.png" title="" class="lightbox"><img src="/lastproject/Admin/Public/TPLDIST/images/live/face6.png" alt="" /></a>
                                    </td>
                                    <td class="textL"><a href="#" title="">Image1 description</a></td>
                                    <td>Feb 12, 2012. 12:28</td>
                                    <td class="fileInfo"><span><strong>Size:</strong> 215 Kb</span><span><strong>Format:</strong> .jpg</span></td>
                                    <td class="tableActs">
                                        <a href="#" class="tablectrl_small bDefault tipS" title="Edit"><span class="iconb" data-icon="&#xe1db;"></span></a>
                                        <a href="#" class="tablectrl_small bDefault tipS" title="Remove"><span class="iconb" data-icon="&#xe136;"></span></a>
                                        <a href="#" class="tablectrl_small bDefault tipS" title="Options"><span class="iconb" data-icon="&#xe1f7;"></span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" name="checkRow" />
                                    </td>
                                    <td>
                                        <a href="images/big.png" title="" class="lightbox"><img src="/lastproject/Admin/Public/TPLDIST/images/live/face5.png" alt="" /></a>
                                    </td>
                                    <td class="textL"><a href="#" title="">Image1 description</a></td>
                                    <td>Feb 12, 2012. 12:28</td>
                                    <td class="fileInfo"><span><strong>Size:</strong> 215 Kb</span><span><strong>Format:</strong> .jpg</span></td>
                                    <td class="tableActs">
                                        <a href="#" class="tablectrl_small bDefault tipS" title="Edit"><span class="iconb" data-icon="&#xe1db;"></span></a>
                                        <a href="#" class="tablectrl_small bDefault tipS" title="Remove"><span class="iconb" data-icon="&#xe136;"></span></a>
                                        <a href="#" class="tablectrl_small bDefault tipS" title="Options"><span class="iconb" data-icon="&#xe1f7;"></span></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- <p>More Templates <a href="##" target="_blank" title="模板之家">模板之家</a></p> -->
            </div>
            <!-- Main content ends -->
        </div>

    
    
    <!-- Content ends -->
</body>

</html>