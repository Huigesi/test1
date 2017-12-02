<?php
    header("Content-type:text/html;charset=utf-8");
   	if(isset($_POST['oldxh'])){
		include("conn.php");
		include("init.inc.php");
		$oldxh = $_POST['oldxh'];
		$cj = $_POST['cj'];
		$km = $_POST['km'];
	
		$sql = "update tb_grade set cj='$cj' where xh='$oldxh' and km='$km'";
	
		if($r = mysql_query($sql)){
			echo '<script>alert("修改成功");location.href="showgrade.php";</script>';
		    
		}else{
			echo '<script>alert("修改失败，可能存在同名的学号");history.go(-1);</script>';
			//echo mysql_error();
		}
		
		
	}else{
		echo '<script>alert("请先选择要修改的记录");location.href="showgrade.php";</script>';
	}
?>