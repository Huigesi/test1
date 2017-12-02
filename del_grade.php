<?php
    header("Content-type:text/html;charset=utf-8");
   	if(isset($_GET['xh'])){
		include("conn.php");
		include("init.inc.php");
		$xh = $_GET['xh'];
		$km = $_GET['km'];
	
		$sql = "delete from tb_grade where xh='$xh' and km='$km'";
	
		if($r = mysql_query($sql)){
			echo '<script>alert("删除成功")location.href="showgrade.php";</script>';
		    
		}else{
			echo '<script>alert("删除失败");history.go(-1);</script>';
			//echo mysql_error();
		}
		
		
}
?>