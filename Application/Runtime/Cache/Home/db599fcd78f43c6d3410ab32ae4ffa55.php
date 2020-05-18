<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
<link rel="stylesheet" type="text/css" href="/newLife/Public/HOME/css/bbs.css">
<link rel="stylesheet" type="text/css" href="/newLife/Public/HOME/css/blog.css">
<link rel="stylesheet" type="text/css" href="/newLife/Public/HOME/css/bootstrap1.css">
<script src="/newLife/Public/HOME/js/jquery.min.js" type="text/javascript"></script>
<script src="/newLife/Public/HOME/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/newLife/Public/HOME/js/plugin.js" type="text/javascript"></script>
</head>
<body>
<div>
<div style="background:url(/newLife/Public/HOME/images/head.jpg);background-size: 100%;">
<div class="head"><div class="nav"><p><?php echo ($_SESSION['username']); ?>欢迎来到看百味论坛</p>
<div class="righthead">
	<?php if(strtoupper($_SESSION['username']) == null): ?><a href="/newLife/index.php/Home/Index/loginshow"><img src="/newLife/Public/Home/images/icon/0.jpg" width="40px" height="40px" title="点击登录"/></a><a href="/newLife/index.php/Home/Index/registershow">注册</a><a href="/newLife/index.php/Home/Index/loginshow"><img src="/newLife/Public/HOME/images/qqlogin.jpg" width="22px" height="10px">QQ登录</a><a href="/newLife/index.php/Home/Index/registershow"><img src="/newLife/Public/HOME/images/timg.jpg" width="22px" height="10px"/>微博登陆</a><?php else: ?>
	<a href="/newLife/index.php/Home/Index/personalshow"><img src="/newLife/Public<?php echo ($_SESSION['icon']); ?>" width="40px" height="40px" title="进入个人页面"/></a><a href="/newLife/index.php/Home/Index/exitlogin">注销</a><?php endif; ?></div>
</div>
</div>
<div class="bbsheader"><form class="searchform" action="/newLife/index.php/Home/Note/searchnote"><a href="/newLife/index.php/Home/Index/index"><img src="/newLife/Public/HOME/images/logo.jpg"  class="logo"></a><input name="notetitle" class="searchtext" type="text" id="serch" onfocus="bc()" onblur="lk()" placeholder="搜索帖子"><button type="submit" class="search-submit" /></form></div>

</div></div>
  <div class="content">
		<ul class="nav nav-tabs" role="tablist">
			<li class="active"><a href="#home" role="tab" data-toggle="tab">搜索如下</a></li>
	  </ul>
	  <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><div class="tab-content" style="margin: 50px;">
		  <div class="tab-pane active" id="home">
			  <div style="height: 100px;">
				  <div>
				  <p class="text"><a href="/newLife/index.php/Home/Note/noteshow/id/<?php echo ($list["id"]); ?>"><?php echo ($list["title"]); ?></a>&nbsp;&nbsp;&nbsp;&nbsp;</p><p>发布日期<?php echo ($list["date"]); ?></p>
			     </div>
				  <div class="qq">
				  	<td ><?php echo ($list["content"]); ?></td>
				  </div>
				  <div style="float: right;font-size:10px;margin-top: 8px;"><td>作者：<?php echo ($list["author"]); ?></td>&nbsp;&nbsp;<td>评论量：<?php echo ($list["replysum"]); ?></td>&nbsp;&nbsp;<td>浏览量：<?php echo ($list["pageview"]); ?></td></div>
			  </div>
			  
		  </div>	
	</div><hr style="border-bottom:1px dotted #717171"><?php endforeach; endif; else: echo "" ;endif; ?>
	</div>
</body>
</html>