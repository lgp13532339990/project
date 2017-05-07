<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>

<head>
    <title>Home</title>
    <!-- Custom Theme files -->
    <link href="/lastproject/Admin/Public/dist/lib/css/login.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Custom Theme files -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
    <div class="login">
        <h2>这不是一个登录</h2>
        <div class="login-top">
            <form action="<?php echo U('Home/Login/action');?>" method="POST">
                <h1>登录</h1>
                <input type="text"  name="user_name" placeholder="请输入帐号">
                <input type="password"  name="user_password" placeholder="请输入密码">
                <div class="forgot">
                    <a href="#">密码忘记</a>
                    <input type="submit" value="Login..." >
                </div>
            </form>
        </div>
        <div class="login-bottom">
            <h3>帐号请联系</h3>
        </div>
    </div>
    
</body>

</html>