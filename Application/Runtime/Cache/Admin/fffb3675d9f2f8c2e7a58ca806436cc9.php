<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;  charset=utf-8" />
<title>查看商品</title>
<link href="/newLife/Public/Admin/css/index.css" rel="stylesheet" type="text/css" />
</head>
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
  <p style="background:#2c7e8a; padding-left:10px; color:#FFF;">您当前的位置：用户管理－＞修改用户信息</p>
 
  <form action="#" method="post" >
    <span style="text-align:right; padding-right:10px;">
    
    </span>
    <table width="670" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td  bgcolor="#666666"><table width="670" cellspacing="1" border="0px">
            <tr>
              <td width="33"  bgcolor="#FFFFFF"><div>复选</div></td>
              <td width="33"  bgcolor="#FFFFFF"><div>用户名</div></td>
              <td width="115"  bgcolor="#FFFFFF"><div>昵称</div></td>
              <td width="59"  bgcolor="#FFFFFF"><div>个性签名</div></td>
              <td width="77"  bgcolor="#FFFFFF"><div>EMAIL</div></td>
              <td width="77"  bgcolor="#FFFFFF"><div>电话号码</div></td>
			  <td width="77"  bgcolor="#FFFFFF"><div>注册日期</div></td>
              <td width="126"  bgcolor="#FFFFFF"><div>操作</div></td>
            </tr>
<?php if(is_array($user)): $i = 0; $__LIST__ = $user;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$user): $mod = ($i % 2 );++$i;?><tr>
              <td  bgcolor="#FFFFFF" style="text-align:center;"><input type="checkbox" name="1" value="1" /></td>
              <td bgcolor="#FFFFFF"style="text-align:center;"><?php echo ($user["username"]); ?></td>
              <td bgcolor="#FFFFFF"style="text-align:center;"><?php echo ($user["nickname"]); ?></td>
              <td bgcolor="#FFFFFF"style="text-align:center;"><?php echo ($user["description"]); ?></td>
              <td bgcolor="#FFFFFF"style="text-align:center;"><?php echo ($user["email"]); ?></td>
			<td bgcolor="#FFFFFF"style="text-align:center;"><?php echo ($user["phonenum"]); ?></td>
              <td bgcolor="#FFFFFF"style="text-align:center;"><?php echo ($user["regdate"]); ?></td>
              <td bgcolor="#FFFFFF" style="text-align:center;"><a href= "/newLife/index.php/Admin/Index/deleteuser/userid/<?php echo ($user["uid"]); ?>">删除</a></td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
          </table></td>
      </tr>
     <td><table width="670" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>

    <td  style="text-align:right; padding-right:10px;"> 
	<input type="submit" value="删除选择项" class="buttoncss" style="margin-right:255px;" >
	  
      
		 </td>   <td  style="text-align:right; padding-right:10px;"> 
本站共有 1 条记录 每页显示 7 条 第 1 页/共 1 页
	  
      
		 </td>
  </tr>
</table></td>
    </table>
   
 
  <p style=" text-align:right; margin-right:5px;">  

</p>
  </form></div>
  <div id="footer">
  <p>地址：北京市朝阳区***路***号 版权所有：北京天天书屋有限公司</p>
  <p>互联网信息服务备案编号：京ICP备06001111号  技术支持：计算机信息工程系</p>
</div></body>

</html>