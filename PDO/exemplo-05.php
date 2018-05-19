<?php 

	//Exemplo de transação com commit ou rollback
	$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");

	$conn->beginTransaction();

	//Exemplo de delete
	$stmt = $conn->prepare("delete from tb_usuarios where idusuario = ?");

	$idusuario = 4;

	$stmt->execute(array($idusuario));

	//$conn->rollback();
	$conn->commit();

	echo "Apagado Ok!";


 ?>