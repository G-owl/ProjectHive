<?php 
	 if(!isset($_COOKIE["login"]))
	 {
	 	header("location:login.php");
	 }
	 
	 	echo "<h1>Welcome ".$_COOKIE["login"]."</h1>";


 ?>

 <!-- <body>
 		
 		<a href="logout.php">LOGOUT</a>

 </body> -->