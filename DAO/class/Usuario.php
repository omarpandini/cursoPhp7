<?php 

/**
 * 
 */
class Usuario
{
	private $idusuario;
	private $deslogin;
	private $dessenha;
	private $dtcadastro;

	
    //Getters
	public function getIdUsuario()
	{
		return $this->idusuario;
	}
	public function getDesLogin()
	{
		return $this->deslogin;
	}
	public function getDesSenha()
	{
		return $this->dessenha;
	}
	public function getDtCadastro()
	{
		return $this->dtcadastro;
	}


	//Setters
	public function setIdUsuario($idusuario)
	{
		$this->idusuario = $idusuario;
	}
	public function setDesLogin($deslogin)
	{
		$this->deslogin = $deslogin;
	}
	public function setDesSenha($dessenha)
	{
		$this->dessenha = $dessenha;
	}
	public function setDtCadastro($dtcadastro)
	{
		$this->dtcadastro = $dtcadastro;
	}




	public function loadById($id)
	{

		$sql = new Sql();

		$results = $sql->select("select * from tb_usuarios where idusuario = :ID",array(
			":ID"=>$id
		));


		//Verificar se sql trouxe algum retorno
		if ( isset($results[0]) ) 
		{
			$row = $results[0];

			$this-> setIdUsuario($row["idusuario"]);
			$this-> setDesLogin($row["deslogin"]);
			$this-> setDesSenha($row["dessenha"]);
			$this-> setDtCadastro( new DateTime( $row["dtcadastro"]));
		}

	}



	public function __toString()
	{
		return json_encode(array(
			"idUsuario"=>$this->getIdUsuario(),
			"deslogin"=>$this->getDesLogin(),
			"dtcadastro"=>$this->getDtCadastro()
		));

	}


}

 ?>