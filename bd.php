<?php

	$conn= new mysqli('localhost','root','root', 'a8504',0,
	'/var/lib/mysql/mysql.sock');
	
	//localhost - servidor
	//root - utilizador por defeito
	//'' - palavra-passe
	//malas - nome da base de dados
	
	if($conn->connect_error){
		die("Connection failed: " .$conn->connect_error);
		exit();
	}

?>

