<?php
	include("conn.php");
	include("init.inc.php");
	$sql = "select * from tb_stuinf";
	$r = mysql_query($sql);
	$stu = array();
	while($row = mysql_fetch_array($r)){
		$stu[] = $row;
	}
	$smarty->assign("stu",$stu);
	$smarty->display("sy20.tpl");
	
?>