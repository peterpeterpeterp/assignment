<?php
		include_once('db.php');
		$username = $_POST['username'];
		$password = $_POST['password'];
	if(mysql_query("INSERT INTO database VALUES('username' 'password')"))
	echo "Successfully Inserted";
	else
	echo "Insertion Failed";
	
	
	
	
?>