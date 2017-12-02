<?php
include 'conn.php';
$sql="select g.xh,s.xm,g.km,g.cj from tb_grade g,tb_stuinf s where g.xh=s.xh";
$r=mysql_query($sql);
while($row=mysql_fetch_array($r)){
	$array[]=$row;
}
include_once("init.inc.php");
	$ary = $array;
	$smarty->assign("ary",$ary);
	$smarty->display("grade.html");
//var_dump($array);
