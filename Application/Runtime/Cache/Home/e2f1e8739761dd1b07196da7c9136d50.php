<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Register2.0</title>
    <!-- 设置 viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- 兼容国产浏览器的高速模式 -->
    <meta name="renderer" content="webkit">
    <link rel="stylesheet" href="/newLife/Public/Home/css/reset.css">
    <link rel="stylesheet" href="/newLife/Public/Home/css/register2.0.css">
</head>
<body>
 <div class="main" style="background:url( /newLife/Public/HOME/images/login_bg.jpg) 0 0 no-repeat">
    <div class="box">
	<form action="/newLife/index.php/Home/Index/register" method="post">
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
                   <input type="text" name="username" id="userName" placeholder="用户名">
                   <span class="user_1">请输入用户名</span>
                   <span class="user_2">用户名已存在</span>
                </td>
             </tr>
             <tr>
                <td>
                   <i class="iconfont i1 i13">&#xe791;</i>
                </td>
                <td style="position:relative;">
                   <input type="text" name="phonenum" id="phoneNumber" placeholder="手机号">
                   <span class="phone_1">请输入手机号</span>
                   <span class="phone_2">手机号已注册</span>
                   <span class="phone_3">手机号格式错误</span>
                </td>
             </tr>
             <tr>
                <td>
                  <!--  <i class="iconfont i1 i12">&#xe791;</i> -->
                </td>
                <td style="position:relative;">
                   <input name="code" id="verifycode" placeholder="验证码">
                   <span class="get_num"><img src="verify" width="90px" height="40px" onClick="this.src=this.src+'?'+Math.random()"/></span>
                   <span class="yN_1">请输入验证码</span>
                   <span class="yN_2">验证码错误</span>
                </td>
             </tr>
             <tr>
                <td>
                   <i class="iconfont i1 i14">&#xe642;</i>
                </td>
                <td style="position:relative;">
                  <input type="password"  name="password" id="passWord" placeholder="密码">
                  <i id="pass" class="iconfont i1 i15">&#xe617;</i>
                  <span class="pass_1">请输入密码</span>
                  <span class="pass_2">密码必须是数字、字母和特殊符号的组合</span>
                  <span class="pass_3">密码至少8个字符</span>
                </td>
             </tr>
          </table>
          <table>
            <!-- <tr>
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
             </tr> -->
             <tr style="height: 60px;">
                <td style="width:100%;">
                   <input class="login_btn"  type="submit" value="注册">
                </td>
             </tr>
             <tr style="height: 20px;">
                <td style="width:100%;">
                  <a class="login_c" href="/newLife/index.php/Home/Index/loginshow">已有账户?去登陆</a>
                </td>
             </tr>
          </table>
        </div>
      </div>
	</form>
    </div>

    <!-- 底部 -->
    <div class="login_footer">
        <div class="f_top">© Copyright 2012 canevent.com,inc. All rights reserved.</div>
        <div class="f_bottom">
          <div>
            <img src="/newLife/Public/Home/images/security.png" style="float:left;">
            <span class="wenz">沪公网安备 31010602000712号</span>
          </div>
        </div>
    </div>

 </div>


<script src="/newLife/Public/HOME/js/jquery.js"></script>
<script src="/newLife/Public/HOME/js/register2.0.js"></script>
<script>
    // 我们自己的 JS 代码

</script>
</body>
</html>