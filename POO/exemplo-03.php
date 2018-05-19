<?php 

	//Exemplo de método construtor

	/**
	 * 
	 */
	class Endereco
	{

		private $logradouro;
		private $numero;
		private $cidade;
		
		public function __construct($a, $b, $c)
		{
			$this->logradouro = $a;
			$this->numero = $b;
			$this->cidade = $c;
		}

		public function __destruct(){ //Apagar os atributos
			echo "Destruiu";
		}


		public function __toString()
		{
			return $this->logradouro;
		}


	}

	$meuEndereco = new Endereco("Rua Helena","424","Joinville");

	var_dump($meuEndereco);

	echo "<br>";

	echo $meuEndereco;

	echo "<br>";

	unset($meuEndereco);

	echo "<br>";



 ?>