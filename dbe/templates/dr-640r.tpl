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
        <div class="container" id="container">
        	<div id="sub-nav">
            	 <ul>
                 	<li class="subnav-01"><a href="index.php">首页</a></li> 
                    <li class="subnav-01"><a href="dbemessage.php?type=df-712u">DF-712U</a></li> 
                    <li class="subnav-03"><a href="dbemessage.php?type=dr-640r">DR-640R</a></li>
                 </ul>
            </div> 
           <div class="chanpjies1">
           		<div class="chanpjies-top-l">
                	<img src="images/photo01.png" style="padding-right:20px;" class="fl" />
                    <img src="images/pp2.png" class="fl" />
                    <p class="fl">
                    	<strong>产品特性</strong><br /><br />
                        •对人体和环境影响极小的环保性墨水<br />
                        • 搭载高艳丽的树脂墨水<br />
                        • 实现了高耐候性、耐水性和耐刮擦性<br />
                        • 极强的墨水伸缩性、柔软性及延展性，  适用于各种后加工处理<br />
                        •对无涂层材料有广泛的适应能力，  可开发不同行业的解决方案
                    </p>
                </div>
                <div class="chanpjies-top-r">
                	<strong>原厂墨水</strong>
                	<img src="images/jieshaoimages01.png" />
                </div>
                <div class="chanpjies-bot">
                	<img src="images/biao1.jpg" class="fl" />
                    <img src="images/photo02.png" style="position: absolute; float:left; bottom:36px; right:66px;" />
                </div>
           </div>  
        </div>
        {{include file='footer.tpl'}}
<!--        <div class="fotter2" style="margin-top:5px;">-->
<!--        	<a href="#" class="back">返回</a>  -->
<!--            <a href="#" class="link">友情连接</a>-->
<!--        </div> -->
    </div>
</body>
</html>
