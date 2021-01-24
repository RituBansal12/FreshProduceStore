<?php

	define("ROOT_URL","http://localhost/ekart/");
	
	$con = new mysqli('localhost','root','','eKart');

	if(mysqli_connect_errno()){
		echo "Error : ".mysqli_connect_errno();
	}
?>
