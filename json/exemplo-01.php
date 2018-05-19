<?php 


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

	echo json_encode($pessoas);

 ?>