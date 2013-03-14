<?php
include "../../configs/load.php";
include '../../includes/DbeNews.class.php';
include BASE_HOME.'includes/Page.class.php';

if(!array_key_exists('administrator', $_SESSION)){
	header("Location: login.php");
}

$newsdb = new DbeNews($dbutil);

if(array_key_exists('pageNo', $_GET)){
	$pageNo = $_GET['pageNo'];
}else{
	$pageNo = 1;
}

$page = new Page($pageNo,10);
$news = $newsdb->getNewsByPage($page)->result;
$smarty->assign("news",$news);

$smarty->assign("page",$page);

$maxdisplaypageNum = 5;
if($page->totalpage<=5){
	$startPage = 1;
	$endPage = $page->totalpage;
}else{
	if($page->pageNo>(int)$maxdisplaypageNum/2+1){
		if($page->pageNo+2<$page->totalpage){
			$startPage = $page->pageNo-2;
			$endPage = $page->pageNo+2;
		}else{
			$startPage = $page->totalpage-$maxdisplaypageNum+1;
			$endPage = $page->totalpage;
		}
	}else{
		$startPage = 1;
		if($page->totalpage>5){
			$endPage = $maxdisplaypageNum;
		}else{
			$endPage = $page->totalpage;
		}
	}
}
$smarty->assign("startPage",$startPage);
$smarty->assign("endPage",$endPage);


$smarty->assign("currentnav","news");
$smarty->assign("managetpl","admin/displaynews.tpl");
$smarty->display("admin/index.tpl");

?>