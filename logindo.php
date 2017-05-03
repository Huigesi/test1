<?php
if(!isset($_SESSION)){
	session_start();
}
if(isset($_SESSION['userName'])){
	header("location:index.php");
}elseif(!isset($_REQUEST['username'])){
	header("location:login.php");
}else{	
	$username=$_REQUEST['username'];
	$password=$_REQUEST['password'];
	$password2=sha1($password);
	include_once 'configdb.php';
	$sql="SELECT  * FROM user WHERE username='$username' and password='$password2'";
	if(mysql_query($sql)){
		$_SESSION['userName']= $username;
		header("location:index.php");
	}else{
		echo "<script>alert('用户名或密码错误');</script>";
		echo "用户名或密码错误"."<a href='login.php'>重新登录</a>";
	}
}