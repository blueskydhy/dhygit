<?php
include "../configs/load.php";
include "../includes/DbeNews.class.php";

//if(!array_key_exists('user', $_SESSION)){
//	$currentPage = "index.php";
//	
//	header("Location: login.php?pageto=".$currentPage);
//	
//}else{
//	//查询所有新闻
//	
//	$smarty->assign("loged",'Y');
//	
//	$newsdb = new DbeNews($dbutil);
//	$news = $newsdb->getAllNews();
//	$smarty->assign("news",$news);
//	$smarty->display("index.tpl");
//}

//查询所有新闻
	if(!array_key_exists('user', $_SESSION)){
		$smarty->assign("loged",'N');
		
	}else{
		$smarty->assign("loged",'Y');
		$user = $_SESSION['user'];
		$username = $user->user_name;
		$smarty->assign("username",$username);
	}
	
	$newsdb = new DbeNews($dbutil);
	$news = $newsdb->getAllNews();
	$smarty->assign("news",$news);
	$smarty->display("index.tpl");



?>