<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>index</title>
<link href="style/dbe-style.css" type="text/css" rel="stylesheet" />
<link href="style/jquery.mCustomScrollbar.css" rel="stylesheet" />
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
          <li class="subnav-03"><a href="#">DBE新闻中心</a></li>
        </ul>
      </div>
    </div> 
    <div id="newpage">
        <div class="newlist">
            <span class="newlist-title">最新消息</span>
            <ul>
            {{foreach $allnews as $new}}
            <li><a href="news.php?news_id={{$new->id}}"><font size="3">&bull;</font>&nbsp;{{$new->news_title}}<br /><span>{{$new->news_createtime}}</span></a></li>
            {{/foreach}}
            </ul> 
        </div> 
        
         <div id="content_1" class="content">
            <h1>{{$news->news_title}}</h1>
            <p>
              {{$news->news_body}}            
             </p>
             <p>     
                DF-712U的特点
             </p>
             <p> 
                 ● 采用色域宽广的Digital Best Engineering UV墨水，高精度打印技术配合高清晰度墨水，实现至高UV打印品质。<br />
                 ● CMYK配合LcLm六色，能呈现纤细白皙柔滑肌肤的打印效果。配合白色及透明墨水，实现表现力丰富的高附加价值的打印。<br />
                 ● 开放式宽幅平台W)730mm x D)1,200mm印刷，充分节省空间的设计，伸缩高度为100mm，为有厚度的打印材料专门设计。实现高效直喷/打样/量产。
                 ● 采用不含汞的低温UV-LED光源，安全环保，也适用于耐热性低的材料。
             </p>
             <p>    
                About DF-712U
             </p>
             <p>  
                高附加价值的方案应用<br />
                ●　高遮密性的白色墨水；透明墨水的立体打印。<br />
                ●　高精度的PLC程序控制，精确的重复打印。<br />
                ●　2Pt字体的精准清晰打印<br />
                ●　高伸缩性墨水，适合柔性材料打印。<br />
                ●  日本制造的打印引擎，动作安定，品质保证，价格合理。
            </p>
            <p>  
                高附加价值的方案应用<br />
                ●　高遮密性的白色墨水；透明墨水的立体打印。<br />
                ●　高精度的PLC程序控制，精确的重复打印。<br />
                ●　2Pt字体的精准清晰打印<br />
                ●　高伸缩性墨水，适合柔性材料打印。<br />
                ●  日本制造的打印引擎，动作安定，品质保证，价格合理。
            </p>
            <p>  
                高附加价值的方案应用<br />
                ●　高遮密性的白色墨水；透明墨水的立体打印。<br />
                ●　高精度的PLC程序控制，精确的重复打印。<br />
                ●　2Pt字体的精准清晰打印<br />
                ●　高伸缩性墨水，适合柔性材料打印。<br />
                ●  日本制造的打印引擎，动作安定，品质保证，价格合理。
            </p>
            <p>  
                高附加价值的方案应用<br />
                ●　高遮密性的白色墨水；透明墨水的立体打印。<br />
                ●　高精度的PLC程序控制，精确的重复打印。<br />
                ●　2Pt字体的精准清晰打印<br />
                ●　高伸缩性墨水，适合柔性材料打印。<br />
                ●  日本制造的打印引擎，动作安定，品质保证，价格合理。
            </p>
        </div> 
	<!-- Google CDN jQuery with fallback to local -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>!window.jQuery && document.write(unescape('%3Cscript src="js/minified/jquery-1.9.1.min.js"%3E%3C/script%3E'))</script>
	<!-- custom scrollbars plugin -->
	<script src="js/jquery.mCustomScrollbar.concat.min.js" type="text/javascript"></script>
	<script>
		(function($){
			$(window).load(function(){
				$("#content_1").mCustomScrollbar({
					scrollButtons:{
						enable:true
					}
				});
				//ajax demo fn
				$("a[rel='load-content']").click(function(e){
					e.preventDefault();
					var $this=$(this),
						url=$this.attr("href");
					$this.addClass("loading");
					$.get(url,function(data){
						$this.removeClass("loading");
						$("#content_1 .mCSB_container").html(data); //load new content inside .mCSB_container
						$("#content_1").mCustomScrollbar("update"); //update scrollbar according to newly loaded content
						$("#content_1").mCustomScrollbar("scrollTo","top",{scrollInertia:200}); //scroll to top
					});
				});
				$("a[rel='append-content']").click(function(e){
					e.preventDefault();
					var $this=$(this),
						url=$this.attr("href");
					$this.addClass("loading");
					$.get(url,function(data){
						$this.removeClass("loading");
						$("#content_1 .mCSB_container").append(data); //append new content inside .mCSB_container
						$("#content_1").mCustomScrollbar("update"); //update scrollbar according to newly appended content
						$("#content_1").mCustomScrollbar("scrollTo","h2:last",{scrollInertia:2500,scrollEasing:"easeInOutQuad"}); //scroll to appended content
					});
				});
			});
		})(jQuery);
	</script>
    </div>
    <div class="fotter2"> <a href="#" class="back">返回</a> <a href="#" class="link">友情连接</a> </div>
  </div>
</div>
</body>
</html>
