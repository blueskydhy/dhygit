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
		{{include file='statusbar.tpl'}}
    	{{include file='header.tpl'}}
        <div style=" background:url(images/bgwen.jpg); float:left; width:1180px; height:632px;">
        <div class="container" id="container">
        	<div id="sub-nav">
            	 <ul>
                 	<li class="subnav-01"><a href="index.php">首页</a></li> 
                    <li class="subnav-03"><a href="#">下载中心</a></li>
                 </ul>
            </div> 
            <ul class="dow">
            	<li>
                	<img src="images/d1.png" />
                	<a href="download.php?fileName=test.docx" {{if $loged=='N'}}onclick="alert('请先登录');return false;"{{/if}}>点击下载</a>
                </li>
                <li>
                	<img src="images/d2.png" />
                	<a href="download.php?fileName=test.docx" {{if $loged=='N'}}onclick="alert('请先登录');return false;"{{/if}}>点击下载</a>
                </li>
            </ul>
        </div>
        {{include file='footer.tpl'}}
<!--        <div class="fotter2" style="margin-top:5px;">-->
<!--        	<a href="#" class="back">返回</a>  -->
<!--            <a href="#" class="link">友情连接</a>-->
<!--        </div>-->
        </div>
    </div>
</body>
</html>
