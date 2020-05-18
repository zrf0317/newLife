<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
<link rel="stylesheet" type="text/css" href="/newLife/Public/HOME/css/bbs.css">
<link rel="stylesheet" type="text/css" href="/newLife/Public/HOME/css/bootstrap.css">
<script src="/newLife/Public/HOME/js/jquery.min.js" type="text/javascript"></script>
</head>

<body style="background-color:#CFF">
<div>
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

<div class="bbsbody">
	<table><?php if(is_array($topnote)): $i = 0; $__LIST__ = $topnote;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$topnote): $mod = ($i % 2 );++$i;?><tr style="border-bottom: 1px dotted #706D6D"><td style="font-weight: bold;display: inline;"><span style="color: #AB0002;font-size: 4px;display: inline;margin-right: 5px;">置顶</span><a href="/newLife/index.php/Home/Note/noteshow/id/<?php echo ($topnote["id"]); ?>" style="color: #000000"><?php echo ($topnote["title"]); ?></a></td><td style="color: #707070;font-size: 2px;">发布时间:<?php echo ($topnote["date"]); ?></td></tr><?php endforeach; endif; else: echo "" ;endif; ?>
	<?php if(is_array($note)): $i = 0; $__LIST__ = $note;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$note): $mod = ($i % 2 );++$i;?><tr style="border-bottom: 1px dotted #706D6D"><td style="font-weight: bold;display: inline;"><a href="/newLife/index.php/Home/Note/noteshow/id/<?php echo ($note["id"]); ?>" style="color: #000000"><?php echo ($note["title"]); ?></a></td><td style="color: #707070;font-size: 2px;">发布时间:<?php echo ($note["date"]); ?></td></tr><?php endforeach; endif; else: echo "" ;endif; ?>
	</table>
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

</div>

</body>
</html>