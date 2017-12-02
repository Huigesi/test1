<?php

	if(isset($_POST['sub'])){
		include 'conn.php';
		include 'init.inc.php';
		$user = $_POST['user'];
		$pwd = $_POST['pwd'];
		$z="/\s+/";
		$a=preg_match($z,$user);
		$b=preg_match($z,$pwd);
		var_dump($b);
		if($a==0&&$b==0){		
			$sql = "select * from tb_user where (user='$user') and(pwd = '$pwd')";
			$r = mysql_query($sql);
			if($row = mysql_fetch_array($r)){
				
				echo "<script>alert('登陆成功');</script>";
				header ( "location:goindex.html" );
				
			}else{
			echo "<script>alert('用户名或密码错误!');</script>";
			echo "用户名或密码错误！<br/>";
			echo "<a href='login.html'>重新登陆</a>";
			//header ( "location:login.html" );
			}
		}else{
			echo "<script>alert('用户名或密码不合法!');</script>";
			echo "用户名或密码错误！<br/>";
			echo "<a href='login.html'>重新登陆</a>";
			//header ( "location:login.html" );
		}
}

?>