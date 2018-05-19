<?php 

	$meses = array("Janeiro","Fevereiro","Março");

	foreach ($meses as $mes) {
		echo "O mês é ".$mes."<br>";
	}

	echo "<br><br>";

	//Exemplo Com indice
	foreach ($meses as $index => $mes) {
		echo  "$index  O mês é $mes <br>";
	}

 ?>