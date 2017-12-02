<?php
include 'conn.php';
$sql="select * from tb_km";
$r=mysql_query($sql);
while($row=mysql_fetch_array($r)){
	$array[]=$row;
}
include_once("init.inc.php");
	$ary = $array;
	$smarty->assign("ary",$ary);
	$smarty->display("km.html");
//var_dump($array);
