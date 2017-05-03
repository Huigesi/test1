<?php
if(!isset($_SESSION)){
	session_start();
}
if(isset($_SESSION['userName'])){
	session_destroy();
	header("location:login.php");
}