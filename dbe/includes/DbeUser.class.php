﻿<?php
/**
 * 用户管理类
 */

class DbeUser{
	var $dbutil;
	
	//构造函数
	function __construct($dbutil){
		$this->dbutil = $dbutil;
	}
	
	
	
	/**
	 * 用户登录
	 * @param unknown_type $username 用户名或邮箱
	 * @param unknown_type $passwd 密码
	 */
	function login($username,$passwd){
		$sql = "select * from dbe_user where (user_name='".$username."' and user_passwd='".$passwd."') or(user_email='".$username."' and user_passwd='".$passwd."')";
		return $this->dbutil->get_row($sql);
		
	}
	
	/**
	 * 
	 * 注册
	 * @param unknown_type $user
	 */
	function addUser($user){
		if($user==null){
			return;
		}
		$result = $this->dbutil->insert("dbe_user", $user);
		if($result!=-1){
			$user = $this->dbutil->get_row("select * from dbe_user where user_email='".$user.user_name."'");
			$_SESSION['user'] = $user;
		}
		return $result;
	}
	
	/**
	 * 检查用户邮箱是否唯一
	 * Enter description here ...
	 * @param unknown_type $email
	 */
	function checkEmailUnique($email){
		$email = $this->dbutil->get_var("select user_email from dbe_user where user_email='".$email."'");
		if($email){
			return true;
		}else{
			return false;
		}
	}
	
	function getUser($email){
		$user = $this->dbutil->get_row("select * from ibo_user where user_email='".$email."'");
		return $user;
	}
	
	function updateUsername($userKey,$username){
		$this->dbutil->update("ibo_user", array("user_name"=> $username), array("user_id"=>$userKey) );
	}
	
	function updatePassword($userKey,$password){
		$this->dbutil->update("ibo_user", array("user_password"=> $password), array("user_id"=>$userKey) );
	}
	
	function updatePhoto($userKey,$photoPath){
		$res = $this->dbutil->update("ibo_user", array("user_photo"=> $photoPath), array("user_id"=>$userKey) );
		return $res;
	}
	
	function updateUserMoney($user){
		$this->dbutil->update("ibo_user", array("user_vmoney"=> $user->user_vmoney), array("user_id"=>$user->user_id) );
	}
	
	function updateUserMessage($user, $id){
		$this->dbutil->update("ibo_user", $user, array("user_id"=>$id));
	}
	
	/**
	 * 检查用户名唯一
	 * @param unknown_type $username
	 */
	function checkUsername($username){
		$username = $this->dbutil->get_var("select user_name from dbe_user where user_name='".$username."'");
		if($username){
			return true;
		}
		return false;
	}
}
?>