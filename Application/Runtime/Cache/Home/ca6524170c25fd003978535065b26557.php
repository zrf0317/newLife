<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
<link rel="stylesheet" type="text/css" href="/newLife/Public/HOME/css/bbs.css">
<link rel="stylesheet" type="text/css" href="/newLife/Public/HOME/css/bootstrap.css">
<script src="/newLife/Public/HOME/js/jquery.min.js" type="text/javascript"></script>
</head>
<script>
	$(function(){
		$("#reply").toggle(function(){
			$("#contentdiv").css("display","block");
		},function(){
			$("#contentdiv").css("display","none");
		});
	})
	</script>
<body style="background-color:#CFF">
<div style="background:url(/newLife/Public/HOME/images/head.jpg);background-size: 100%;">
<div class="head"><div class="nav"><p><?php echo ($_SESSION['username']); ?>欢迎来到看百味论坛</p>
<li style="margin:10px 20px; "><img src="/newLife/Public/HOME/images/gz.jpg" width="18px" height="18px">关注百味
	<ul class="sub-nav" style="display: none;">
		<a href="#"><li><img src="/newLife/Public/HOME/images/timg.jpg" width="20px" height="20px">官方微博</li></a>
		<a href="#"><li><img src="/newLife/Public/HOME/images/wxlogin.jpg" width="20px" height="20px">官方微信</li></a>
	</ul>
</li>
<div class="righthead">
	<?php if(strtoupper($_SESSION['username']) == null): ?><a href="/newLife/index.php/Home/Index/loginshow"><img src="/newLife/Public/Home/images/icon/0.jpg" width="40px" height="40px" title="点击登录"/></a><a href="/newLife/index.php/Home/Index/registershow">注册</a><a href="/newLife/index.php/Home/Index/loginshow"><img src="/newLife/Public/HOME/images/qqlogin.jpg" width="22px" height="10px">QQ登录</a><a href="/newLife/index.php/Home/Index/registershow"><img src="/newLife/Public/HOME/images/timg.jpg" width="22px" height="10px"/>微博登陆</a><?php else: ?>
	<a href="/newLife/index.php/Home/Index/personalshow"><img src="/newLife/Public<?php echo ($_SESSION['icon']); ?>" width="40px" height="40px" title="进入个人页面"/></a><a href="/newLife/index.php/Home/Index/exitlogin">注销</a><?php endif; ?></div>
</div>
</div>
<div class="bbsheader"><form method="get" class="searchform" action="/newLife/index.php/Home/Note/searchnote"><a href="/newLife/index.php/Home/Index/index"><img src="/newLife/Public/HOME/images/logo.jpg"  class="logo"></a><input name="notetitle" class="searchtext" type="text" id="serch" onfocus="bc()" onblur="lk()" placeholder="搜索帖子"><button type="submit" class="search-submit" /></form></div>
<?php if(strtoupper($_SESSION['username']) == null): ?><a href="/newLife/index.php/Home/Index/loginshow" style="position: absolute;top:45px;right:250px;margin-left: 50px;z-index: 1;"><img src="/newLife/Public/Home/images/fabu.jpg" width="70" height="80" title="发布帖子" ></a><?php else: ?><a href="/newLife/index.php/Home/Note/fabu" style="position: absolute;top:45px;right:250px;margin-left: 50px;z-index: 1;width:100px;"><img src="/newLife/Public/Home/images/fabu.jpg" width="70" height="80" title="发布帖子" ></a><?php endif; ?>
</div>

<div  class="bbsCont" style="margin: 0 auto;height: 500px; width: 60%;background: #fff; border-radius: 4px;opacity: 0.8;">
<div >
	<div ><div><h5><?php echo ($note["title"]); ?></h5></div><div style="border-bottom: 1px dashed #898989;border-right: 1px dashed #898989;; float: left;text-align: center;margin-right: 20px;"><img src="/newLife/Public<?php echo ($author["icon"]); ?>" width="80" height="80" style="border-radius: 50%;margin: 5px 20px"><p style="font-size: 13px;">作者：<?php echo ($author["nickname"]); ?></p></div><p>&emsp;&emsp;<?php echo ($note["content"]); ?></p><div style="float: right;margin-right: 10px;font-size: 12px;"><span id="reply" style="color: #0095F1">我想评论</span>&emsp;&emsp;<span>发布日期：<?php echo ($note["date"]); ?></span>&emsp;&emsp;<span>浏览量：<?php echo ($note["pageview"]); ?></span></div></div>
	<div id="contentdiv" style="display: none;z-index: 1; text-align: center;clear: both; background: #AFAFAF;opacity: 0.7;padding: 30px"><form action="/newLife/index.php/Home/Note/addreply/noteid/<?php echo ($note["id"]); ?>" method="post" ><textarea rows="6" cols="90%" name="comment"></textarea><input type="submit" value="评论" style="background: #50B9FA;border: none;border-radius: 4px;"/></form></div>
</div>
	<div style="border: 1px solid #000000;margin-top:60px;"><table><?php if(is_array($reply)): $i = 0; $__LIST__ = $reply;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$comment): $mod = ($i % 2 );++$i;?><tr><td><?php echo ($comment["username"]); ?></td><td><?php echo ($comment["content"]); ?></td></tr><?php endforeach; endif; else: echo "" ;endif; ?></table></div>
</div>

<div class="login_footer">
        <div class="f_top">© Copyright 2019 canevent.com,inc. All rights reserved.</div>
        <div class="f_bottom">
          <div>
            <img src="/newLife/Public/HOME/images/security.png" style="float:left;">
            <span class="wenz">粤公网安备 31010602000712号</span>
          </div>
        </div>
    </div>

</body>
</html>