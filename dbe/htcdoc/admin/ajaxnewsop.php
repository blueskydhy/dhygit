<?php
include '../../configs/load.php';
include '../../includes/DbeNews.class.php';

$method = $_POST['method'];
if($method=="updatenews"){
	$id = $_POST['news_id'];
	$news_title = $_POST['news_title'];
	$news_order = $_POST['news_order'];
	$news_type = $_POST['news_type'];
	$news_body = $_POST['news_body'];
//	$news_createtime = date('Y-m-d H:i:s',$_POST['news_createtime']);
	$news_createtime = date('Y-m-d H:i:s');
	
	$news = array("id"=>$id,"news_title"=>$news_title,"news_order"=>$news_order,"news_type"=>$news_type,"news_createtime"=>$news_createtime,"news_body"=>$news_body);
	$dbenews = new DbeNews($dbutil);
	echo $dbenews->updateNew($news,$id);
	exit(0);
	
}else if($method=="deletenews"){
	$news_id = $_POST['news_id'];
	$dbenews = new DbeNews($dbutil);
	$result = $dbenews->deleteNew($news_id);
	echo $result;
	exit(0);
}else if($method=="getnewsbyid"){
	$news_id = $_POST['news_id'];
	$dbenews = new DbeNews($dbutil);
	$result = $dbenews->getNewsById($news_id);
	echo $result = json_encode($result);
	exit(0);
}


?>
