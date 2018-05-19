<?php 

	
	// Vetor = Array com uma única dimensão
	$frutas = array("laranja","abacaxi","melancia");

	print_r($frutas);

	echo "<br>";

	var_dump($frutas);

	echo "<br>";
	echo "<br>";

	//Array bidimensional
	$carros[0][0] = "GM";
	$carros[0][1] = "COBALT";
	$carros[0][2] = "ONIX";


	$carros[1][0] = "FORD";
	$carros[1][1] = "FIESTA";
	$carros[1][2] = "FUSION";

	print_r($carros);
	echo "<br>";
	echo $carros[1][1];


	//Funçõces
	echo "<br>";
	echo "<br>";

	$pessoas = array();
	echo "<br>";

	//Incluindo valores no array
	array_push($pessoas, array(
		'nome' => 'Omar',
		'idade' => '33'
	));

	array_push($pessoas, array(
		'nome' => 'Andreia',
		'idade' => '30'
	));

	print_r($pessoas);
	echo "<br>";
	echo "<br>";

	foreach ($pessoas as $key => $pessoa) {
		echo $pessoa["nome"]."<br>";
	};


 ?>