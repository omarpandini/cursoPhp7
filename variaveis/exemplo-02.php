<?php

$nome = "Omar";

echo $nome;

//Apagando a variável

unset($nome);

echo $nome;

//Verificar se variável existe
if ( isset($nome) ) {
	echo $nome;
}else{
	echo "variável não existe";
}


?>