<?php
header("content-type:text/html;charset=utf-8");

if (! isset($_SESSION)) {
    session_start();
}
if (! isset($_SESSION['userName'])) {
    header("location:login.php");
}
$userName = $_SESSION['userName'];
require_once 'configdb.php';
$sql="SELECT * FROM student";
$result=mysql_query($sql);
?>
<<!DOCTYPE div PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<div align='right'>用户名:<?=$userName?><a href="loginout.php">退出登录</a>
</div>
<hr />


<div align="center">
	<h1>学生主页</h1>
	<table border="1" width=80% cellspacing=0 cellpadding=5>
		<tr>
			<th>学号</th>
			<th>姓名</th>
			<th>班级</th>
			<th>生日</th>
			<th>性别</th>
			<th>民族</th>
			<th>编辑</th>
		</tr>
		<?php 
		while($row=mysql_fetch_array($result)){
		echo "<tr>";
        echo "<th>".$row['studentId']."</th>";
        echo "<th>".$row['name']."</th>";
        echo "<th>".$row['className']."</th>";
        echo "<th>".$row['birthday']."</th>";
        echo "<th>".$row['sex']."</th>";
        echo "<th>".$row['nation']."</th>";
        echo "<td><a href='edit.php?id=".$row ['id']. "'>编辑</a></td>"; 
        echo "</tr>";
		}
		?>
	</table>
</div>
</body>
</html>