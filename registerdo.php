<?php
require_once 'configdb.php';
header("content-type:text/html;charset=utf-8");
$username=$_REQUEST['username'];
$password=$_REQUEST['password'];
$password2=sha1($password);
$sql="INSERT INTO `user`(`id`, `username`, `password`,status) VALUES (null,'$username','$password2',1)";
if(!mysql_query($sql)){die('插入数据出错'.mysql_error());}
echo "注册成功";
echo "<a href='login.php'>去登录吧</a>";
?>