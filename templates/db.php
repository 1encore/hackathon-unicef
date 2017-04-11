<?php
	$connection=new mysqli("localhost", "root", "", "myDatabase");
	if($connection->connect_error){
		echo "Error with db connection.";
	}
?>