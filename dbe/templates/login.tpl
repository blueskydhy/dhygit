<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>index</title>
<link href="style/dbe-style.css" type="text/css" rel="stylesheet" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"type="text/javascript"></script>
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
    	{{include file='header.tpl'}}
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
    <form method="post">
      <table width="100%" border="0" cellspacing="0" cellpadding="0" class="login_table">
        <tr>
          <td colspan="3" valign="top"><h2><span  class="zhuce">登录</span><a href="register.php">注册</a></h2></td>
        </tr>
        <tr>
          <td colspan="3" valign="top">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td align="right">用户名/密码</td>
          <td><input name="user_name" type="text" class="input_css" /></td>
          <td rowspan="5"><img src="images/logo2.jpg" width="329" height="175" /></td>
        </tr>
        <tr>
          <td  align="right">登录密码</td>
          <td><input name="user_passwd" type="text" class="input_css" /></td>
        </tr>
        <tr>
          <td colspan="2">
          	<table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="62%"><input name="" type="submit" class="login_button" value=""/></td>
                <td width="38%"><a href="register.php" style="margin-top:20px;">注册</a></td>
              </tr>
            </table>
           </td>
        </tr>
      </table>
      </form>
    </div>
    <div class="fotter2"> <a href="#" class="back">返回</a> <a href="#" class="link">友情连接</a> </div>
  </div>
</div>
</body>
</html>
