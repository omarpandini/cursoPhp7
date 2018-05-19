<?php 

	require_once("config.php");

	//Gerar um novo id
	session_regenerate_id();

	echo session_id();

 ?>