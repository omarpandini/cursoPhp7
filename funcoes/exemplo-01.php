<?php 

	function ola(){
		return "Olá Mundo! <br>";
	}


	echo ola();

	echo "<br><br><br>";

	
	//Passagem por referência

	$a = 10;

	function trocaValor(&$a){
		$a += 50;

		return $a;
	}

	echo trocaValor($a);
	echo "<br><br><br>";

	echo $a;
	echo "<br><br><br>";

	//Exemplo de função com parametros dinamicos
	function soma(int ...$valores){

		return array_sum($valores);

	};

	echo "Soma igual = ". soma(1,5,6,7);


	echo "<br><br><br>";

	//Exemplo de função com parametros dinamicos, e setando o tipo de retorno
	function soma2(int ...$valores):string{

		return array_sum($valores);

	};

	var_dump(soma2(3,4,5));

	echo "<br><br><br>";

	

 ?>