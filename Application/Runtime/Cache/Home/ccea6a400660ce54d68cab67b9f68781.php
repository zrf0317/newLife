<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Login2.0</title>
    <!-- 设置 viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- 兼容国产浏览器的高速模式 -->
    <meta name="renderer" content="webkit">
    <link rel="stylesheet" href="/newLife/Public/HOME/css/reset.css">
    <link rel="stylesheet" href="/newLife/Public/HOME/css/login2.0.css">
</head>
<body>
 <div class="main">
    <div class="box">
	<form action="/newLife/index.php/Home/Index/login"  method="post">
      <div class="logo_box">
          <a href="/newLife/index.php/Home/Index/index"><img src="/newLife/Public/HOME/images/logo.jpg" width="100" style="border-radius: 10px;" /></a>
      </div>
      <div class="login_box">
        <div class="login">
          <table style="margin-top:30px;">
             <tr>
                <td>
                   <i class="iconfont i1 i12">&#xe600;</i>
                </td>
                <td style="position:relative;">
                   <input id="userName" name="username" placeholder="用户名/注册手机号/邮箱">
                   <span class="user_1">请输入手机号/邮箱/用户名</span>
                   <span class="user_2">用户名不存在</span>
                   <span class="user_3">手机号不存在</span>
                </td>
             </tr>
             <tr>
                <td>
                   <i class="iconfont i1 i13">&#xe642;</i>
                </td>
                <td style="position:relative;">
                  <input id="passWord" name="password" placeholder="密码" type="password">
                  <i id="pass" class="iconfont i1 i15">&#xe617;</i>
                  <span class="pass_1">请输入密码</span>
                  <span class="pass_2">密码错误</span>
                </td>
             </tr>
          </table>
          <table>
            <tr style="height:60px;">
                <td style="width:100%;">
                  <div class="login_l">
                     <i id="no" class="iconfont i2">&#xe676;</i>
                     <i id="yes" class="iconfont i2 i22">&#xe616;</i>
                     <span class="remember">记住密码</span>
                  </div>
                  <div class="login_r">
                    <span class="no_remember">忘记密码?</span>
                  </div>
                </td>
             </tr>
             <tr>
                <td style="width:100%;">
                    <input type="submit" class="login_btn" value="登  录" >
                </td>
             </tr>
             <tr>
                <td style="width:100%;">
                  <a class="login_c" href="/newLife/index.php/Home/Index/registershow">没有账户?创建免费账户</a>
                </td>
             </tr>
          </table>
        </div>
    </div>
	</form>
</div>
	
    <!-- 底部 -->
    <div class="login_footer">
        <div class="f_top">© Copyright 2019 canevent.com,inc. All rights reserved.</div>
        <div class="f_bottom">
          <div>
            <img src="/newLife/Public/HOME/images/security.png" style="float:left;">
            <span class="wenz">粤公网安备 31010602000712号</span>
          </div>
        </div>
    </div>
	</div>
<script src="/newLife/Public/HOME/js/jquery.js"></script>
<script src="/newLife/Public/HOME/js/login2.0.js"></script>
<script>

</script>
</body>
</html>