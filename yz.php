<?php
	header("Content-type:text/html;charset=utf-8");
	if(isset($_GET['code'])){
	   $yz = $_GET['code'];
	   session_start();
	   $code = $_SESSION["code"];
	   if($yz==$code){
		   echo "r";
	   }else{
		   echo "e";
	   }
	}
	
?>
