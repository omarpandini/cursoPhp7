<?php

//Escopo de variáveis

$nome = "Omar";

function teste()
{
	global $nome;
	echo $nome;
}

teste();

?>