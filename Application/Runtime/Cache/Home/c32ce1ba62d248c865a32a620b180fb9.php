<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
<link rel="stylesheet" type="text/css" href="/newLife/Public/HOME/css/blog.css">
<link rel="stylesheet" type="text/css" href="/newLife/Public/HOME/css/bootstrap1.css">
<script src="/newLife/Public/HOME/js/jquery.min.js" type="text/javascript"></script>
<script src="/newLife/Public/HOME/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/newLife/Public/HOME/js/plugin.js" type="text/javascript"></script>
</head>
<script>
	$(function(){
		$("#iconshow").click(function(){
			$("[name=file]").click();
			$("[name=file]").change(function(){
				$("[name=file]").css("display","block");
				$("#updateicon").css("display","block");
				var file = $('#icon').get(0).files[0];
				var reader = new FileReader();
				reader.readAsDataURL(file);
				reader.onload=function(e){
					console.log(e);
					$('#imgshow').get(0).src = e.target.result;
				}
			});
		});
		$("#close").click(function(){
			$("#updateicon").css("display","none");
		});
		$("#updatebtn").click(function(){
			$("#update").css("display","block");
		});
		$("#closebtn").click(function(){
			$("#update").css("display","none");
		});
		$("#updatepswbtn").click(function(){
			$("#updatepsw").css("display","block");
		});
		$("#pswclose").click(function(){
			$("#updatepsw").css("display","none");
		});
	});
	</script>

<body>
<div class="blog-masthead">
	<div class="container">
		<a class="blog-nav" style="color:#fff" href="/newLife/index.php/Home/Index/index">首页</a>
		<a class="blog-nav-item" style="color: #1075F4">个人中心</a>
		<a class="blog-nav-item" href="/newLife/index.php/Home/Index/exitlogin">退出</a>
	</div>
</div>
<div class="intr">
	<?php if(is_array($personal)): foreach($personal as $key=>$personal): ?><div style="padding-top:60px;">
		<div id="img">
		<img src="/newLife/Public<?php echo ($personal["icon"]); ?>" id="iconshow" width="100" height="100" title="点击修改图片" style="border-radius: 50%;"/></div>
		<div class="update" id="updateicon"><div><form action="/newLife/index.php/Home/Index/uploadicon" method="post"  enctype="multipart/form-data"><div>
    <img id="imgshow" src="" alt="" width="100" height="100" style="border-radius: 50%;"/>
  </div><input type="file" name="file" id="icon"/><input type="submit" name="submit" value="修改"/><input type="button" id="close" value="取消"/></form></div></div>
	</div>
	<div class="update" id="update">
		<div>
		<form action="/newLife/index.php/Home/Index/updatepersonal" method="post">
			<a href="#" id="closebtn">×</a><br>
			<span>昵称:<input type="text" name="nickname" value="<?php echo ($personal["nickname"]); ?>"></span>
			<span>个人简介:<input type="text" name="description" value="<?php echo ($personal["description"]); ?>"></span>
			<span>电话:<input type="text" name="phonenum" value="<?php echo ($personal["phonenum"]); ?>"></span>
			<span>QQ邮箱:<input type="text" name="email" value="<?php echo ($personal["email"]); ?>"></span>
			<span><input type="submit" id="btn1" value="修改" style="border-bottom-left-radius: 5px"><input type="reset" value="重置" style="border-bottom-right-radius: 5px;background: #23C5F7;"></span>
			</form>
		</div>
  	</div>
		<div class="update" id="updatepsw"><div>
			<form action="/newLife/index.php/Home/Index/updatepassworld" method="post">
			<span>旧密码：<input type="text" name="oldpsw"></span>
			<span>新密码:<input type="password" name="newpsw"></span>
			<span><input type="text" name="code" placeholder="请输入验证码"><img src="verify" width="90px" height="40px" onClick="this.src=this.src+'?'+Math.random()"/></span>
			<span><input type="submit" value="修改" style="background: #23C5F7;border-right: 1px dotted #808080;border-bottom-left-radius: 5px"><input type="button" id="pswclose" value="关闭" style="border-bottom-right-radius: 5px;background: #23C5F7;"></span>
			</form></div>
		</div>
	<table>
		<tr><p class="peointr"><?php echo ($personal["nickname"]); ?></p>
		<p class="peointr1"><?php echo ($personal["description"]); ?></p></tr>
		<tr> <p class="peointr1">联系电话：<?php echo ($personal["phonenum"]); ?></p></tr>
		<tr> <p class="peointr1">QQ邮箱：<?php echo ($personal["email"]); ?></p></tr>
		<tr> <p class="peointr1">注册日期：<?php echo ($personal["regdate"]); ?></p></tr>
		<a href="#" class="updatebtn" id='updatebtn'>修改信息</a>&emsp;&emsp;&emsp;<a href="#" class="updatebtn" id='updatepswbtn'>修改密码</a>	
	</table><?php endforeach; endif; ?>
</div>
<div class="title">帖子中心</div>
  <div class="content">
		<ul class="nav nav-tabs" role="tablist">
			<li class="active"><a href="#home" role="tab" data-toggle="tab">发表的帖子</a></li>
	  </ul>
	  <?php if(is_array($invitation)): $i = 0; $__LIST__ = $invitation;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$invitation): $mod = ($i % 2 );++$i;?><div class="tab-content" style="margin: 50px;">
		  <div class="tab-pane active" id="home">
			  <div style="height: 100px;">
				  <div>
				  <p class="text"><a href="/newLife/index.php/Home/Note/noteshow/id/<?php echo ($invitation["id"]); ?>"><?php echo ($invitation["title"]); ?></a>&nbsp;&nbsp;&nbsp;&nbsp;</p><p>发布日期<?php echo ($invitation["date"]); ?></p>
			     </div>
				  <div class="qq">
				  	<td ><?php echo ($invitation["content"]); ?></td>
				  </div>
				  <div style="float: right;font-size:10px;margin-top: 8px;"><td>评论量：<?php echo ($invitation["replysum"]); ?></td>&nbsp;&nbsp;<td>浏览量：<?php echo ($invitation["pageview"]); ?></td></div>
			  </div>
			  
		  </div>	
	</div><hr style="border-bottom:1px dotted #717171"><?php endforeach; endif; else: echo "" ;endif; ?>
	</div>
</body>
</html>