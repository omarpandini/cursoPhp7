<?php 

	$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");

	//Exemplo de delete
	$stmt = $conn->prepare("delete from tb_usuarios where idusuario = :IDUSUARIO");

	$idusuario = 2;

	$stmt->bindParam(":IDUSUARIO",$idusuario);

	$stmt-> execute();

	echo "Apagado Ok!";


 ?>