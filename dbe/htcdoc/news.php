<?php
include "../configs/load.php";
include "../includes/DbeNews.class.php";

//if(!array_key_exists('user', $_SESSION)){
//	$currentPage = "index.php";
//	header("Location: login.php?pageto=".$currentPage);
//}

if(!array_key_exists('user', $_SESSION)){
//	$currentPage = "dbmessage.php";
//	header("Location: login.php?pageto=".$currentPage);
	$smarty->assign("loged",'N');
}else{
	$smarty->assign("loged",'Y');
	$user = $_SESSION['user'];
	$username = $user->user_name;
	$smarty->assign("username",$username);
}

$news_id = $_GET['news_id'];
$newsdb = new DbeNews($dbutil);
$news = $newsdb->getNewsById($news_id);

$allnews = $newsdb->getAllNews();

$smarty->assign("news",$news);

$smarty->assign("allnews",$allnews);

$smarty->display("news.tpl");

?>