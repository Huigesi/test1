<?php
    header("Content-type:text/html;charset=utf-8");
   
		include("conn.php");
		include("init.inc.php");
		$xh = $_GET['xh'];
		$sql = "select * from tb_stuinf where xh='$xh'";
		$r = mysql_query($sql);		
		if($row = mysql_fetch_array($r)){
			$smarty->assign("stu",$row);
		    $smarty->display("add_stu.tpl");
		}
		
?>