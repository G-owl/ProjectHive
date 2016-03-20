<?php 

	setcookie( "name", "", time()- 60, "/","", 0);
    header("location:login.php");
 ?>