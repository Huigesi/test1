<?php
    header("Content-type:text/html;charset=utf-8");
		include("conn.php");
		include("init.inc.php");
		$xh = $_POST['xh'];
		
		$xm = $_POST['xm'];
		$bj = $_POST['bj'];
		$sex = $_POST['sex'];
	
		$sql = "insert into tb_stuinf (xh,xm,sex,s_class) values ('$xh','$xm',$sex,'$bj')";
			
		if($r = mysql_query($sql)){
			echo '<script>alert("增加成功");location.href="sy20.php";</script>';
		    
		}else{
			echo '<script>alert("增加失败，可能存在同名的学号");history.go(-1);</script>';
			//echo mysql_error();
		}
		
		
?>