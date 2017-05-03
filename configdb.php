<?php
$db=array(
		'username'=>'root',
		'password'=>'',
		'database'=>'gdmec',
                'server'=>'localhost',
                'port'=>'3306'
);

$con=mysql_connect($db['server'].":".$db['port'],$db['username'],$db['password']);
if(!$con){die(mysql_error());}
mysql_set_charset("utf8");
mysql_select_db($db['database'],$con);
