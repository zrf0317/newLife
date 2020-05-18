<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>查看商品</title>
<link href="__PUBLC__/Admin/css/index.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="header">
  <h1><img src="__PUBLC__/Admin/images/bbb(2).png" />看百味后台管理系统</h1>
</div>

<div id="left">
   <h3><img src="__PUBLC__/Admin/images/houtai1_03.gif" />用户管理<img src="__PUBLC__/Admin/images/houtai1_03.gif" /></h3>
  <ul>
    <li><img src="__PUBLC__/Admin/images/houtai_03.gif" /><a href="lookshopym.html">修改用户信息</a></li>
  </ul>
  <h3><img src="__PUBLC__/Admin/images/houtai1_03.gif" />帖子类别管理<img src="__PUBLC__/Admin/images/houtai1_03.gif" /></h3>
  <ul>
    <li><img src="__PUBLC__/Admin/images/houtai_03.gif"  border="0px"/><a href="lookleibieym.html">删除帖子</a><a href="lookleibieym.php"></a></li>
    <li><img src="__PUBLC__/Admin/images/houtai_03.gif" /><a href="leibieym.html">填加帖子</a></li>
	   <li><img src="__PUBLC__/Admin/images/houtai_03.gif" /><a href="leibieym.html">修改帖子</a></li>
  </ul>
	<h3><img src="__PUBLC__/Admin/images/houtai1_03.gif" />评论管理<img src="__PUBLC__/Admin/images/houtai1_03.gif" /></h3>
  <ul>
    <li><img src="__PUBLC__/Admin/images/houtai_03.gif" /><a href="shopym.html">评论管理</a></li>
    
  </ul>
</div>
<div id="right" >
  <p style="background:#628e37; padding-left:10px; color:#FFF;">您当前的位置：用户管理－＞修改用户信息</p>
 
  <form action="#" method="post" >
    <span style="text-align:right; padding-right:10px;">
    
    </span>
    <table width="670" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td  bgcolor="#666666"><table width="670" cellspacing="1" border="0px">
            <tr>
              <td width="33"  bgcolor="#FFFFFF"><div>复选</div></td>
              <td width="99"  bgcolor="#FFFFFF"><div>用户名称</div></td>
              <!--              <td width="73"  bgcolor="#FFFFFF"><div>图书类型</div></td>
-->
              <td width="61"  bgcolor="#FFFFFF"><div>密码</div></td>
              <td width="115"  bgcolor="#FFFFFF"><div>昵称</div></td>
              <td width="59"  bgcolor="#FFFFFF"><div>个性签名</div></td>
              <td width="77"  bgcolor="#FFFFFF"><div>QQ邮箱</div></td>
              <td width="77"  bgcolor="#FFFFFF"><div>电话号码</div></td>
			  <td width="77"  bgcolor="#FFFFFF"><div>注册日期</div></td>
              <td width="126"  bgcolor="#FFFFFF"><div>操作</div></td>
            </tr>

            <tr>
              <td  bgcolor="#FFFFFF" style="text-align:center;"><input type="checkbox" name="1" value="1" /></td>
              <td  bgcolor="#FFFFFF"style="text-align:center;">平凡的世界 </td>
              <!--              <td bgcolor="#FFFFFF"style="text-align:center;"><?php echo $row[''];?></td>
-->
              <td bgcolor="#FFFFFF"style="text-align:center;">路遥</td>
              <td bgcolor="#FFFFFF"style="text-align:center;">北京十月文艺出版社</td>
              <td bgcolor="#FFFFFF"style="text-align:center;">2012-11-12</td>
			<td bgcolor="#FFFFFF"style="text-align:center;">2012-11-12</td>
              <td bgcolor="#FFFFFF"style="text-align:center;">45</td>
              <td bgcolor="#FFFFFF"style="text-align:center;">新书推荐</td>
              <td bgcolor="#FFFFFF" style="text-align:center;"><a href="xgshopym.html">修改</a>&nbsp;<a href= "delelookshop.html">删除</a></td>
            </tr>
             <?php }?>
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