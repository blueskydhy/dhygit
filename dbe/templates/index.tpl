<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>index</title>
<link href="style/dbe-style.css" type="text/css" rel="stylesheet" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript"></script>
<script src="js/marqueerun.js" type="text/javascript"></script>
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

<script type="text/javascript"> 
	$(document.body).ready(function(){ 
	$("#newsRun").RollTitle({line:1,speed:200,timespan:1500}); 
	}); 
</script> 

</head>

<body>
	<div id="conter">
		{{include file='statusbar.tpl'}}
    	{{include file='header.tpl'}}
        <div class="container" id="container">
        	<div class="nav">
            	<img src="images/index-title.png" class="titletxt"/>
                <div class="nav-list"> 
                    <span><a href="dbemessage.php?type=dbe" class="nav-li"><img src="images/home1.png" /></a></span> 
                    <span class="dis-y">
                    	<a href="dbemessage.php?type=df-712u" class="chanp1 nav-li"><img src="images/home2.png" /></a>
                        <div class="dis-no">
                        	<img src="images/pp1.png" />
                            UV打印高品质！<br />
							安全！环保！节能！<br />
							<a href="dbemessage.php?type=df-712u">了解更多</a>
                        </div>
                    </span>  
                    <span class="dis-y">
                    	<a href="dbemessage.php?type=dr-640r" class="chanp2 nav-li"><img src="images/home3.png" /></a>
                        <div class="dis-no">
                        	<img src="images/pp2.png" />
                            全新无图层解决方案！<br /> 
							<a href="dbemessage.php?type=dr-640r">了解更多</a>
                        </div>
                    </span> 
                    <span><a href="download.php" class="nav-li"><img src="images/home4.png" /></a></span>
                </div>
            </div>
            <div class="guanywm">
            	<p>研发创新和不断的技术改进是我们走向成功的关键因素之一。<br />
每件产品在设计初期及投入量产前，我们都会通过与客户的广泛交流和沟通，<br />
进行产品的市场可行性评估。<br />
我们投入大量的资源以确保在研发和技术改进方面处于行业领先地位，并促使我们在基础材料、生产工艺和品质提升拥有源源不断地成长动力，使我们与竞争对手有所不同。  
</p>
            </div>
            <div class="newlist">
            	<span class="newlist-title"><img src="images/newlistioc.png" align="absbottom"/>&nbsp;<a href="#">marre&gt;&gt;</a></span>
                <ul id="newsRun">
                	{{foreach $news as $new}}
                	<li><a href="news.php?news_id={{$new->id}}"><font size="3">&bull;</font>&nbsp;{{$new->news_title}}<span>{{$new->news_createtime}}</span></a></li>
                	{{/foreach}}
                </ul>
            </div>
        </div>
        <div class="fotter"> 
        	<div>
            	<font size="4">&bull;</font>
                开创无版彩印&nbsp;&nbsp;&nbsp;&nbsp;提供优质色彩方案
                <font size="4">&bull;</font>
            </div>
            <a href="#">友情连接</a>
        </div>
    </div>
</body>
</html>
