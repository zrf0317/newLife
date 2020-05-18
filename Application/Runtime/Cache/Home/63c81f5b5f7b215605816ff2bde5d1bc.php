<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
<link rel="stylesheet" type="text/css" href="/newLife/Public/HOME/css/bbs.css">
<link rel="stylesheet" type="text/css" href="/newLife/Public/HOME/css/bootstrap.css">
<script src="/newLife/Public/HOME/js/jquery.min.js" type="text/javascript"></script>

<script>
$(function(){
		$(".nav>li").hover(function(){
			$(this).children('ul').stop(true,true).show(300);
		},function(){
			$(this).children('ul').stop(true,true).hide(300);
		});
		$("#hotclick").mousemove(function(){
			$("#hotforum").show(200);
			$("#newforum").hide();
			$("#replyforum").hide();
			$("#visitforum").hide();
			$("#origiforum").hide();
			});
		$("#newclick").mousemove(function(){
			$("#hotforum").hide();
			$("#newforum").show(200);
			$("#replyforum").hide();
			$("#visitforum").hide();
			$("#origiforum").hide();
			});
		$("#replyclick").mousemove(function(){
			$("#hotforum").hide();
			$("#newforum").hide();
			$("#replyforum").show(200);
			$("#visitforum").hide();
			$("#origiforum").hide();
			});
		$("#visitclick").mousemove(function(){
			$("#hotforum").hide();
			$("#newforum").hide();
			$("#replyforum").hide();
			$("#visitforum").show(200);
			$("#origiforum").hide();
			});
		$("#origiclick").mousemove(function(){
			$("#hotforum").hide();
			$("#newforum").hide();
			$("#replyforum").hide();
			$("#visitforum").hide();
			$("#origiforum").show(200);
			});	
	
	var lIndex = 0;
    $(".r-arr").click(function() {
        // 当被点击时，执行下面事件
        if (lIndex < 3) {
            lIndex++; // lIndex = lIndex + 1;
        } else {
            lIndex = 0;
        }
        // (lIndex<4)?(lIndex++):(lIndex=0);
        $(".but ul li").eq(lIndex).addClass("hover").siblings().removeClass("hover");
        $(".pic img").eq(lIndex).fadeIn(300).siblings().fadeOut(300); // 选中除了前面的图片的其他所有图片让其隐藏;fadeIn,fadeOut(慢慢淡入淡出)
    });
    $(".l-arr").click(function() {
        if (lIndex > 0) {
            lIndex--;
        } else {
            lIndex = 3;
        }
        $(".but ul li").eq(lIndex).addClass("hover").siblings().removeClass("hover");
        $(".pic img").eq(lIndex).fadeIn(300).siblings().fadeOut(300); // siblings().hide选中除了前面的图片的其他所有图片让其隐藏;fadeIn,fadeOut(慢慢淡入淡出默认400毫秒；可以fadeOut（300）自己定义)
    });
    $(".but ul li").click(function() {
        $(this).addClass("hover").siblings().removeClass("hover");
        var nIndex = $(this).index();
        $(".pic img").eq(nIndex).fadeIn(300).siblings().fadeOut(300);
        lIndex = nIndex;
    });
	setInterval(function() {
            (lIndex < 3) ? (lIndex++) : (lIndex = 0);
            $(".but ul li").eq(lIndex).addClass("hover").siblings().removeClass("hover");
            $(".pic img").eq(lIndex).fadeIn(300).siblings().fadeOut(300);
        }, 1600);
});
	function bc(){                //搜索框取得焦点时触发的事件
            document.getElementById("serch").style.border='1px solide #3366CC';
        }
        function lk(){               //搜索框失去焦点时触发的事件
            document.getElementById("serch").style.border='1px solid #66B6FF';
        }
</script>
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

<div class="bbsCont">
<div class="bbsContype row">
<div id="typeclick" class="col-md-8">
<a href="#" id="hotclick">热门</a>
 | 
<a href="#" id="newclick">最新</a>
 | 
<a href="#" id="replyclick">回复最多</a>
 | 
<a href="#" id="visitclick">浏览最多</a>
 | 
<a href="#" id="origiclick">原创帖子区域</a>
</div>
<div class="col-md-4" style="height:35px">帖子量:<span style="font-size:19px;color:#C6C;font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif"><?php echo ($notesum); ?></span>&nbsp;&nbsp;访问量:<span style="font-size:19px;color:#C6C;font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif"><?php echo ($pageview); ?></span></div>
</div>
<div class="bbsContcont row" >
<div id="hotforum" class="col-md-8">
<?php $i = '1'; ?>
<ul>
<?php if(is_array($hotnote)): $i = 0; $__LIST__ = $hotnote;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hotnote): $mod = ($i % 2 );++$i;?><li><img src="/newLife/Public/HOME/images/<?php echo ($i); ?>.gif"/><a href="/newLife/index.php/Home/Note/noteshow/id/<?php echo ($hotnote["id"]); ?>" style="font-weight: bold;font-size: 15px;width: 370px;"><?php echo ($hotnote["title"]); ?></a><span>作者:<?php echo ($hotnote["author"]); ?></span></li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
</div>

<div id="newforum" style="display:none" class="col-md-8">
<ul>
<?php if(is_array($newnote)): $i = 0; $__LIST__ = $newnote;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$newnote): $mod = ($i % 2 );++$i;?><li><img src="/newLife/Public/HOME/images/<?php echo ($i); ?>.gif"/><a href="/newLife/index.php/Home/Note/noteshow/id/<?php echo ($newnote["id"]); ?>" style="font-weight: bold;font-size: 15px;width: 370px;"><?php echo ($newnote["title"]); ?></a><span>作者:<?php echo ($newnote["author"]); ?></span></li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
</div>

<div id="replyforum" style="display:none" class="col-md-8">
<ul>
<?php if(is_array($replynote)): $i = 0; $__LIST__ = $replynote;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$replynote): $mod = ($i % 2 );++$i;?><li><img src="/newLife/Public/HOME/images/<?php echo ($i); ?>.gif"><a href="/newLife/index.php/Home/Note/noteshow/id/<?php echo ($replynote["id"]); ?>" style="font-weight: bold;font-size: 15px;width: 370px;"><?php echo ($replynote["title"]); ?></a><span>作者:<?php echo ($replynote["author"]); ?></span></li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
</div>

<div id="visitforum" style="display:none" class="col-md-8">
<ul>
<?php if(is_array($viewnote)): $i = 0; $__LIST__ = $viewnote;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$viewnote): $mod = ($i % 2 );++$i;?><li><img src="/newLife/Public/HOME/images/<?php echo ($i); ?>.gif"><a href="/newLife/index.php/Home/Note/noteshow/id/<?php echo ($viewnote["id"]); ?>" style="font-weight: bold;font-size: 15px;width: 370px;"><?php echo ($viewnote["title"]); ?></a><span>作者:<?php echo ($viewnote["author"]); ?></span></li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
</div>

<div id="origiforum" style="display:none" class="col-md-8">
<ul>
<?php if(is_array($originote)): $i = 0; $__LIST__ = $originote;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$originote): $mod = ($i % 2 );++$i;?><li><img src="/newLife/Public/HOME/images/<?php echo ($i); ?>.gif"><a href="/newLife/index.php/Home/Note/noteshow/id/<?php echo ($originote["id"]); ?>" style="font-weight: bold;font-size: 15px;width: 370px;"><?php echo ($originote["title"]); ?></a><span>作者:<?php echo ($originote["author"]); ?></span></li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
</div>
	<div  class="big col-md-4" style="border: 2px solid #000000;">
	<div class="pic">
	<img src="/newLife/Public/HOME/images/Recommend/1.JPG" width="265px"
	height="165px">
	</div>
	<div class="l-arr arr"> &lt; </div>
	<div class="r-arr arr"> &gt; </div>
	<div class="but">
		<ul>
			<li class="hover">今</li>
			<li>日</li>
			<li>推</li>
			<li>荐</li>
		</ul>
	</div>
	</div>
</div>

</div>
<div class="bbsbody">
<div class="newsbbs"><span>&nbsp;&nbsp;&nbsp;新闻版块</span>
<table>
<tbody id="type">
<tr><?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$forum): $mod = ($i % 2 );++$i;?><td>
<a href="/newLife/index.php/Home/Note/forumshow/forumID/<?php echo ($forum["id"]); ?>"><img src="/newLife/Public/HOME/<?php echo ($forum["icon"]); ?>" width="80px" height="80px"><span><?php echo ($forum["name"]); ?></span></a>
</td>
<div class="description" id="description<?php echo ($forum["id"]); ?>"><?php echo ($forum["description"]); ?></div><?php endforeach; endif; else: echo "" ;endif; ?>
</tr>
</tbody>
</table>
	
	
</div>
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
<script>
	$(function(){
		$("#type tr td").mousemove(function(e){
			var top = e.pageY-25;
   			var left = e.pageX+50;
  			 $("#description<?php echo ($forum["id"]); ?>").css({
   			 'top' : top + 'px',
    			'left': left+ 'px'}).show();
			});
		$("#type tr td").mouseout(function(e){
			$("#description<?php echo ($forum["id"]); ?>").hide();
			});
	})
	</script>
</html>