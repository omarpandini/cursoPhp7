<?php 

	//Exemplo de herança

	/**
	 * 
	 */
	class Documento
	{
		
		private $numero;

		public function getNumero()
		{
			return $this->numero;
		}

		public function setNumero($numero)
		{
			$this->numero = $numero;
		}

	} //fim da classe

	/**
	 * 
	 */
	class Cpf extends Documento
	{
		
		public function validar():bool
		{
			//validação do cpf
			return true;
		}
	} //fim da classe


	$doc = new Cpf();

	$doc->setNumero("465466454");
	echo $doc->getNumero();

 ?>