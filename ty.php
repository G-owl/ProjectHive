<?php 

	$db = mysqli_connect('localhost','root','','hive');
	if($db)
	{
		$email = $_POST['email'];
		$uname = $_POST['uname'];
		$fname = $_POST['fname'];
		$bdate = $_POST['year']."-".$_POST['month']."-".$_POST['day'];
		$pass = $_POST['pass'];
		
		$sql_statement = "insert into user ( email, uname, fname, bdate, pass )";
		$sql_statement .= "values ('".$email."','".$uname."','".$fname."','".$bdate."','".$pass."')";

		$res = mysqli_query($db, $sql_statement);
		if ($res) {
			echo "<h1 align=center>THANK YOU</h1>";
		}
	}
 ?>