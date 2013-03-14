<?php
require '../../configs/load.php';
include BASE_HOME.'includes/Administrator.class.php';

$result = true;

if(array_key_exists('username', $_POST) && array_key_exists('password', $_POST)){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$admindb = new Administrator($dbutil);
	$result = $admindb->checkLogin($username, encodePassword($password));
	if($result){
		$_SESSION['administrator'] = $result;
//		$pageto = $_GET['pageto'];
//		if(!$pageto){
//			$pageto = "index.php";
//		}
		$pageto = "index.php";
		header("Location: ".$pageto);
	}
}


if($result == false){
	$smarty->assign("error", true);
}else{
	$smarty->assign("error", false);
}

$smarty->display("admin/login.tpl");
?>