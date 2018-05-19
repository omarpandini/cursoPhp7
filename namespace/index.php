<?php

	require_once("config.php");

	use Cliente\Cadastro;


	$cadastro = new Cadastro();

	$cadastro->setNome("Omar");
	$cadastro->setEmail("mzo.pandini@gmail.com");
	$cadastro->setSenha("mzo123");

	$cadastro->registrarVenda();
	//$cadastro->registrarVenda();
	

?>