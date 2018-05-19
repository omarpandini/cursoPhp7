<?php 

	/**
	 * 
	 */
	class Carro
	{
		
		private $motor;
		private $modelo;
		private $ano;

		public function getModelo()
		{
			return $this->modelo;
		}

		public function setModelo($modelo)
		{
			$this->modelo = $modelo;
		}

		public function getMotor()
		{
			return $this->motor;
		}

		public function setMotor($motor)
		{
			$this->motor = $motor;
		}

		public function getAno():int
		{
			return $this->ano;
		}

		public function setAno($ano)
		{
			$this->ano = $ano;
		}

		public function exibir()
		{
			return array(
				"modelo"=>$this->getModelo(),
				"motor"=>$this->getMotor(),
				"ano"=>$this->getAno()
			);
		}

	} //Fechando classe carro


	/**
	 * 
	 */
	class Pessoa
	{
		
		private $nome; //Atributo

		public function setNome($nome)
		{
			$this->nome = $nome;
		}

		public function falar() //Método
		{
			return "O meu nome é ".$this->nome;
		}

	}

	$omar = new Pessoa();
	$omar ->setNome("Omar Pandini");

	echo $omar -> falar();

	echo "<br><br>";

	$jetta = new Carro();

	$jetta->setMotor("TSI");
	$jetta->setModelo("JETTA");
	$jetta->setAno("2018");

	echo $jetta->getModelo();


	echo "<br><br>";

	var_dump( $jetta->exibir() );


 ?>