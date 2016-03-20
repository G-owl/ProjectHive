<?php 
	
	$db = mysqli_connect('localhost','root','','hive');
	$uname = $_REQUEST['uname'];
	$pass = $_REQUEST['pass'];

	$sql = "select * from user where uname = '".$uname."' and pass = '".$pass."'";
	$res = mysqli_query($db, $sql);
	$count = mysqli_num_rows($res);
	echo "<pre>";
	print_r($GLOBALS);
	if($count > 0)
	{
		setcookie("login", $uname);
		header("location:index.php");
	}
	else
	{
		header("location:login.php");
	}
 ?>