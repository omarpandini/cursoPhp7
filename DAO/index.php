<?php 

	require_once("config.php");

	/*$sql = new Sql();

	$usuarios = $sql->select("select * from tb_usuarios");

	echo json_encode($usuarios);
	*/

	$user = new Usuario();

	//$user->loadById(1);
        
        $usuarios = $user->getUserById(1);

	echo json_encode($usuarios);
        
        

 ?>