<?php 

	$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");

	$stmt = $conn->prepare("update tb_usuarios set deslogin = :LOGIN,dessenha =:PASSWORD where idusuario = :IDUSUARIO");

	$login = "joseUpdate";
	$password = "j123_update";
	$idusuario = 4;

	$stmt->bindParam(":LOGIN",$login);
	$stmt->bindParam(":PASSWORD",$password);
	$stmt->bindParam(":IDUSUARIO",$idusuario);

	$stmt-> execute();

	echo "Atualizado Ok!";


 ?>