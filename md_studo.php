<?php
    header("Content-type:text/html;charset=utf-8");
   	if(isset($_POST['xh'])){
		include("conn.php");
		include("init.inc.php");
		$xh = $_POST['xh'];
		$oldxh = $_POST['oldxh'];
		$xm = $_POST['xm'];
		$bj = $_POST['bj'];
		$sex = $_POST['sex'];
	
		$sql = "update tb_stuinf set xh='$xh',xm='$xm',s_class='$bj',sex=$sex where xh='$oldxh'";
	
		if($r = mysql_query($sql)){
			echo '<script>alert("修改成功");location.href="sy20.php";</script>';
		    
		}else{
			echo '<script>alert("修改失败，可能存在同名的学号");history.go(-1);</script>';
		}
		
		
	}else{
		echo '<script>alert("请先选择要修改的记录");location.href="sy20.php";</script>';
	}
?>