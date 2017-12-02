<?php
	include("conn.php");
	include("init.inc.php");
	$sql = "select * from tb_stuinf";
	$r = mysql_query($sql);
	
	while($row = mysql_fetch_array($r)){
		$array[]=$row;
	}
	$stu = $array;
	$smarty->assign("stu",$stu);
	$smarty->display("sy20.tpl");
	
?>