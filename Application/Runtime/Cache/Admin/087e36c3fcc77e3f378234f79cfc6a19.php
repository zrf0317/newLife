<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>填加类别</title>
<link href="/newLife/Public/Admin/css/index.css" rel="stylesheet" type="text/css" />
</head>
<script language="javascript">
function lbyz(fom){
	if(fom.mc.value==''){
		alert('请输入类别名称');
		fom.mc.select();
		return false;
		}
	if(fom.ms.value==''){
		alert('请输入类别描述');
		fom.ms.select();
		return false;
		}
	}
</script>
<body>
<div id="header">
  <h1><img src="/newLife/Public/Admin/images/logo.jpg" width="150px"; height="100px";/>看百味后台管理系统</h1>
</div>

<div id="left">
   <h3><img src="/newLife/Public/Admin/images/houtai1_03.gif" />用户管理<img src="/newLife/Public/Admin/images/houtai1_03.gif" /></h3>
  <ul>
    <li><img src="/newLife/Public/Admin/images/houtai_03.gif" /><a href="/newLife/index.php/Admin/Index/index">修改用户信息</a></li>
  </ul>
  <h3><img src="/newLife/Public/Admin/images/houtai1_03.gif" />帖子类别管理<img src="/newLife/Public/Admin/images/houtai1_03.gif" /></h3>
  <ul>
    <li><img src="/newLife/Public/Admin/images/houtai_03.gif"  border="0px"/><a href="/newLife/index.php/Admin/Index/noteshow">删除帖子</a><a href="lookleibieym.php"></a></li>
    <li><img src="/newLife/Public/Admin/images/houtai_03.gif" /><a href="/newLife/index.php/Admin/Index/addnoteshow">填加帖子</a></li>
  </ul>
	<h3><img src="/newLife/Public/Admin/images/houtai1_03.gif" />评论管理<img src="/newLife/Public/Admin/images/houtai1_03.gif" /></h3>
  <ul>
    <li><img src="/newLife/Public/Admin/images/houtai_03.gif" /><a href="/newLife/index.php/Admin/Index/commentshow">评论管理</a></li>
    
  </ul>
</div>
<div id="right" >
  <p style="background:#2c7e8a; padding-left:10px; color:#FFF;">您当前的位置：帖子管理－＞填加帖子</p>
  <form action="/newLife/index.php/Admin/Index/notechange/noteid/<?php echo ($note["id"]); ?>" method="post" onsubmit="return lbyz(this)" >
    <table width="670" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td  bgcolor="#666666"><table width="670" cellspacing="1" border="0px">
            <tr>
              <td width="103"  bgcolor="#FFFFFF"><div>帖子标题:</div></td>
              <td width="560"  bgcolor="#FFFFFF"><input type="text" name="title" value="<?php echo ($note["title"]); ?>"/></td>
            </tr> 
            <tr>
              <td width="103"  bgcolor="#FFFFFF"><div>板块:</div></td>
              <td width="560"  bgcolor="#FFFFFF"><select name="forumID"><?php if(is_array($forumname)): $i = 0; $__LIST__ = $forumname;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$forumname): $mod = ($i % 2 );++$i; if(intval($forumname.id) == intval($note.forumid)): ?><option value="<?php echo ($forumname["id"]); ?>" selected><?php echo ($forumname["name"]); ?></option><?php else: ?><option value="<?php echo ($forumname["id"]); ?>"><?php echo ($forumname["name"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?></select></td>
			  </tr>
            <tr>
             <td width="103"  bgcolor="#FFFFFF"><div>帖子内容:</div></td>
              <td width="560"  bgcolor="#FFFFFF"><textarea name="content" cols="" rows="" style=" margin-left:10px; width:350px; height:200px;"><?php echo ($note["content"]); ?></textarea></td>
            </tr>
			<tr>
              <td width="103"  bgcolor="#FFFFFF"><div>是否置顶:</div></td>
              <td width="560"  bgcolor="#FFFFFF"><select name="top"><?php if($note["top"] == 1): ?><option value="1" selected>是</option><option value="2" >否</option><?php else: ?><option value="1" >是</option><option value="2" selected>否</option><?php endif; ?></select></td>
			  </tr>
             <tr>
              <td colspan="4"  bgcolor="#FFFFFF"><input type="submit" name="ok" value="修改帖子&nbsp;" style="width:55px; height:30px;" /></td>
            </tr>         
          </table></td>
      </tr>
    </table>    
  </form>
</div>
<div id="footer">
 <p>地址：北京市朝阳区***路***号 版权所有：北京天天书屋有限公司</p>
  <p>互联网信息服务备案编号：京ICP备06001111号  技术支持：计算机信息工程系</p>
</div>
</body>
</html>