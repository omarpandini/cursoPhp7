<?php 

	//Exemplo Polimorfismo

	/**
	 * 
	 */
	abstract class Animal
	{
		
		public function falar()
		{
			return "som";
		}

		public function mover()
		{
			return "Anda";
		}
	}// fim classe

	/**
	 * 
	 */
	class Cachorro extends Animal
	{
		
		public function falar()
		{
			return "Late e ". parent::falar(); //Parent acessa a classe pai
		}
	}

	$pluto = new Cachorro();
	echo $pluto->falar();

 ?>