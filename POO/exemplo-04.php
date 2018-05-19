<?php 

	
	
	 class Pessoa
	{
		

		public $nome = "Omar";
		protected $idade = "33";
		private $senha = "123";


		public function verDados()
		{
			echo $this->nome."<br>";
			echo $this->idade."<br>";
			echo $this->senha."<br>";
		}

	} //fim classe

	$objeto = new Pessoa();

	echo $objeto->nome;

	echo "<br>";
	//echo $objeto->idade;

	$objeto->verDados();


 ?>