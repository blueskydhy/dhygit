<?php /* Smarty version Smarty-3.1.13, created on 2013-03-13 23:54:16
         compiled from "D:\workspace4php\dbe\dbe\templates\register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27387513bfcf38d6f54-17787464%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62be6e363da81da83e33a0eb573c01edba1e8afb' => 
    array (
      0 => 'D:\\workspace4php\\dbe\\dbe\\templates\\register.tpl',
      1 => 1363190052,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27387513bfcf38d6f54-17787464',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_513bfcf3a782b2_66482957',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_513bfcf3a782b2_66482957')) {function content_513bfcf3a782b2_66482957($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>index</title>
<link href="style/dbe-style.css" type="text/css" rel="stylesheet" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript"></script>
<script src="js/register.js" type="text/javascript"></script>
<script type="text/javascript">  
$(window).resize(function() {
   if($(window).width()<1180){
	$("#conter") .css ({"margin-left":"0","left":"0"});
}else{
$("#conter") .css ({"margin-left":"-590px","left":"50%"}); 
}
 if($(window).height()<700){
	$("#conter") .css ({"margin-top":"0","top":"0"});
}else{
$("#conter") .css ({"margin-top":"-361px","top":"50%"}); 
}
}); 
 $(function(){
          $('#wrapper').hide();
          $('.xiaogu').mouseenter(function(){
          	
          	 $('#wrapper').slideDown("slow");
          	  
           });
          $('#head').mouseleave(function(){
          	  $('#wrapper').slideUp();
          	  
           });
  	});
function switchmodTag(modtag,modcontent,modk) {
	 for(i=1; i <4; i++) {
		 if (i==modk) {
			 document.getElementById(modtag+i).className="menuOn";document.getElementById(modcontent+i).
			 className="slidingList";}
		 else {
			 document.getElementById(modtag+i).className="menuNo";document.getElementById(modcontent+i).
			 className="slidingList_none";}
		 }
 }

</script>

</head>

<body>
	<div id="conter">
    	<?php echo $_smarty_tpl->getSubTemplate ('statusbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    	<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

  <div style=" background:url(images/bgwen.jpg); float:left; width:1180px; height:632px;">
    <div class="container" id="container">
      <div id="sub-nav">
        <ul>
          <li class="subnav-01"><a href="index.php">首页</a></li>
          <li class="subnav-01"><a href="register.php">注册</a></li>
          <li class="subnav-03"><a href="login.php">登录</a></li>
        </ul>
      </div>
    </div>
    <div  class="login_center">
    <form >
      <table width="100%" style="height:345px" border="0" cellspacing="0" cellpadding="0" class="login_table ta_box">
        <tr>
         	<td colspan="4" valign="top"><h2><a href="login.php">登录</a><span  class="zhuce">注册</span></h2></td>
        </tr>
        <tr>
          <td colspan="4" height="20"></td>
        </tr>
        <tr>
          <td align="right">用户名</td>
          <td><input id="user_name" type="text" class="input_css" /></td>
          <td align="right">公司</td>
          <td><input id="user_company" type="text" class="input_css" /></td>
        </tr>
        <tr>
          <td align="right">登录密码</td>
          <td><input id="user_passwd" type="password" class="input_css" /></td>
          <td align="right">行业</td>
          <td><input id="user_industy" type="text" class="input_css" /></td>
        </tr>
        <tr>
          <td align="right">确认密码</td>
          <td><input id="user_passwd2" type="password" class="input_css" /></td>
          <td align="right">电话</td>
          <td><input id="user_phone" type="text" class="input_css" /></td>
        </tr>
        <tr>
          <td align="right">姓名</td>
          <td><input id="user_fullname" type="text" class="input_css" /></td>
          <td align="right">邮箱</td>
          <td><input id="user_email" type="text" class="input_css" /></td>
        </tr>
        <tr>
          <td align="right">设备近期采购</td>
          <td colspan="3"> 
              &nbsp;&nbsp;&nbsp;&nbsp;
              <input type="radio" name="purchase" id="radio" value="1" />
              <label for="radio">3个月</label>
              &nbsp;&nbsp;&nbsp;&nbsp;
              <input type="radio" name="purchase" id="radio2" value="2" />
              <label for="radio2">6个月</label>
              &nbsp;&nbsp;&nbsp;
              <input type="radio" name="purchase" id="radio3" value="3" />
              <label for="radio3">12个月</label>
              &nbsp;&nbsp;&nbsp;
              <input type="radio" name="purchase" id="radio4" value="4" />
              <label for="radio4">一年以后</label> </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
           <td>&nbsp;</td>
          <td><input id="registerBt" type="button" class="login_zc" value=""/></td>
        </tr>
         <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td><label id="wrongMsg" style="color:red;"></label></td>
        </tr>
      </table>
      </form>
    </div>
    <div class="fotter2"> <a href="#" class="back">返回</a> <a href="#" class="link">友情连接</a> </div>
  </div>
</div>
</body>
</html>
<?php }} ?>