<?php 

	$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");

	$stmt = $conn->prepare("insert into tb_usuarios(deslogin,dessenha) values(:LOGIN,:PASSWORD)");

	$login = "jose";
	$password = "j123";

	$stmt->bindParam(":LOGIN",$login);
	$stmt->bindParam(":PASSWORD",$password);

	$stmt-> execute();

	echo "Inserido Ok!";


 ?>