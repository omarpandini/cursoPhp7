<?php 

    //Transformar json em array

	$json = '[{"nome":"Omar","idade":"33"},{"nome":"Andreia","idade":"30"}]';

	$data = json_decode($json,true);

	var_dump($data);

 ?>