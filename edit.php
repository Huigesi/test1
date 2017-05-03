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
$id = $_REQUEST['id'];
$sql = "select * from student where id=$id";
$result = mysql_query($sql);
$row = mysql_fetch_array($result);
?>
<!DOCTYPE unspecified PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script type="text/javascript" src="js/laydate.js"></script>
<title>编辑页面</title>
</head>
<body>
	<div align='center'>
		<h1 align='center'>学生信息</h1>
		<form action="editdo.php" method="post">
			<input type='hidden' name='id' value='<?=$row ['id']?>' />
			<table width=20% cellspacing=1 cellpadding=5>
				<tr>
					<th>学号</th>
					<th><input size='30' value='<?= $row['studentId'] ?>' name='studentId'></th>
				</tr>
				<tr>
					<th>姓名</th>
					<th><input size='30' value='<?= $row['name'] ?>' name='name'></th>
				</tr>
				<tr>
					<th>班级</th>
					<th><input size='30' value='<?= $row['className'] ?>' name='className'></th>
				</tr>
				<tr>
					<th>生日</th>
					<td><input size='30' type='text' id='birthday' name='birthday'
						value="<?=$row ['birthday']?>" /></td>
						</tr>
				<tr>
					<th>性别</th>
					<th><input size='30' type="radio" value='男' name='sex'
						<?= $row['sex']=='男'?'checked':'' ?>>男</input> <input type="radio"
						value='女' name='sex' <?= $row['sex']=='女'?'checked':'' ?>>女</input>
					</th>
				</tr>
				<tr>
					<th>民族</th>
					<th><input size='30' value='<?= $row['nation'] ?>' name='nation'></th>
				</tr>
				<tr>
					<th colspan=1><input type='submit' value='确认修改' /></th>
				</tr>

			</table>
		</form>
	</div>
<script type="text/javascript">
!function(){
	laydate.skin('molv');//切换皮肤，请查看skins下面皮肤库
	laydate({elem: '#birthday'});//绑定元素
}();
</script>
</body>
</html>