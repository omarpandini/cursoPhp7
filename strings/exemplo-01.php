<?php 

$nome = "Omar";

$nome2 = 'Pandini';

var_dump($nome, $nome2);

echo "<br>";

//Sring com aspas duplas, é impresso o valor da variável dentro de uma nova string
echo "Nome $nome";


echo "<br>";

//tudo maiusculo
echo strtoupper($nome.' '.$nome2);
echo "<br>";

//tudo minusculo
echo strtolower($nome.' '.$nome2);
echo "<br>";

//somente primiero caracter de cada string
echo ucwords($nome.' '.$nome2);
echo "<br>";

//Trocar caracteres
echo str_replace("O", "KK", $nome);
echo "<br>";

//Verificar posição do caracter na frase
$frase = "Olá mundo, hoje o dia está bonito";
echo $frase;
echo "<br>";

$palavra = ",";
$tamanhoP = strlen($palavra);
$tamanhoFrase = strlen($frase);

$q = strpos($frase, $palavra);
echo "<br>";

var_dump($q);
echo "<br>";

//Remover trechos da frase Ex: Buscar somente antes da virgula
$novoTexto = substr($frase, 0,$q);
echo $novoTexto;
echo "<br>";

//Buscar texto depois da vírgula
$novoTexto2 = substr($frase, $q+$tamanhoP  , $tamanhoFrase );
echo $novoTexto2;

 ?>