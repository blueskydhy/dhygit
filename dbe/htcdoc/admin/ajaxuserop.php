<?php
include '../../configs/load.php';
include BASE_HOME."includes/Administrator.class.php";
include BASE_HOME.'includes/DbeUser.class.php';

$method = $_GET['method'];
if($method == 'addadmin'){
	$username = $_GET['username'];
	$password = $_GET['password'];
	$admindb = new Administrator($dbutil);
	$user = $admindb->getAdminByName($username);
	if($user){
		echo "error";
	}else{
		$admindb->addAdmin(array('admin_name'=>$username, 'admin_passwd'=>encodePassword($password)));
		echo "success";
	}
	exit(0);
}else if($method == 'updateadmin'){
	$username = $_GET['username'];
	$password = $_GET['password'];
	$admindb = new Administrator($dbutil);
	$admindb->updateAdmin(array('admin_passwd'=> encodePassword($password)), $username);
	echo "success";
	exit(0);
}elseif ($method == 'deleteadmin'){
	$username = $_GET['username'];
	$admindb = new Administrator($dbutil);
	$result = $admindb->deleteAdmin($username);
	echo $result;
	exit(0);
}elseif ($method == 'deleteuser'){
	$username = $_GET['username'];
	$admindb = new Administrator($dbutil);
	echo $admindb->deleteUser($username);
	exit(0);
}elseif ($method == 'checkemail'){
	$email = $_GET['email'];
	$userdb = new DbeUser($dbutil);
	$re = $userdb->checkEmailUnique($email);
	if($re){
		echo "yes";
	}else{
		echo "no";
	}
	exit(0);
}elseif ($method=='checkusername'){
	$username = $_GET['username'];
	$userdb = new DbeUser($dbutil);
	$result = $userdb->checkUsername($username);
	if($result){
		echo "yes";
	}else{
	 	echo "no";
		
	}
 	exit(0);
}else if($method=='register'){
	$user_company = $_GET['user_company'];
	$user_name = $_GET['user_name'];
	$user_email = $_GET['user_email'];
	$user_passwd = $_GET['user_passwd'];
	$user_industy = $_GET['user_industy'];
	$user_phone = $_GET['user_phone'];
	$user_fullname = $_GET['user_fullname'];
	$user_purchasing = $_GET['user_purchasing'];
	$user_company = $_GET['user_company'];
	$user_registertime = date('Y-m-d H:m:s');
	
	$user = array("user_name"=>$user_name,
		"user_passwd"=>encodePassword($user_passwd),
		"user_fullname"=>$user_fullname,
		"user_company"=>$user_company,
		"user_industy"=>$user_industy,
		"user_phone"=>$user_phone,
		"user_email"=>$user_email,
		"user_regdate"=>$user_registertime,
		"user_purchasing"=>$user_purchasing
	);
	
	$userdb = new DbeUser($dbutil);
	$result = $userdb->addUser($user);
	echo $result;
//	if($result!=-1){
//		echo "success";
//	}else{
//		echo "error";
//	}
	exit(0);
}


?>