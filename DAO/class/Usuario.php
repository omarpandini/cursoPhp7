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
        
        
        public function __construct($deslogin="", $dessenha="") {
            $this->deslogin = $deslogin;
            $this->dessenha = $dessenha;
        }

        	
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
			$this->setData($results[0]);
		}

	}
        
        public static function getList() {
            
            $sql = new Sql();
            
            return $sql->select("select * from tb_usuarios order by deslogin");          
            
            
        }
        
        public static function search($login) {
            
            $sql = new Sql();
            
            return $sql->select("select * from tb_usuarios where deslogin like :SEARCH order by deslogin",array(
                ":SEARCH"=>"%".$login."%"
            ));
            
        }
        
        public function login($login,$senha) {
            $sql = new Sql();

            $results = $sql->select("select * from tb_usuarios where deslogin = :LOGIN and dessenha = :SENHA",array(
                    ":LOGIN"=>$login,
                    ":SENHA"=>$senha
            ));


            //Verificar se sql trouxe algum retorno
            if ( isset($results[0]) ) 
            {
                    $this->setData($results[0]);
            }else
            {
                throw new Exception("Usuário inválido");
            }
        }
        
        public function insert() {
            
            $sql = new Sql();
            
            $results = $sql->select("CALL sp_usuarios_insert(:LOGIN,:SENHA)",array(
                ':LOGIN'=>$this->getDesLogin(),
                ':SENHA'=>$this->getDesSenha()
            ));
            
            if ( count($results) > 0 ) {
                $this->setData($results[0]);
            }
            
        }
        
        public function update($login,$senha) {
            
            $this->setDesLogin($login);
            $this->setDesSenha($senha);
            
            $sql = new Sql();
            $sql->query("update tb_usuarios set deslogin = :LOGIN, dessenha = :SENHA where idusuario = :ID",array(
                ":LOGIN"=>$this->getDesLogin(),
                ":SENHA"=>$this->getDesSenha(),
                ":ID"=>$this->getIdUsuario()
            ));
        }
        
        public function setData($data) {
            $this-> setIdUsuario($data["idusuario"]);
            $this-> setDesLogin($data["deslogin"]);
            $this-> setDesSenha($data["dessenha"]);
            $this-> setDtCadastro( new DateTime( $data["dtcadastro"]));
            
        }

	public function __toString()
	{
		return json_encode(array(
			"idUsuario"=>$this->getIdUsuario(),
			"deslogin"=>$this->getDesLogin(),
                        "dessenha"=>$this->getDesSenha(),
			"dtcadastro"=>$this->getDtCadastro()->format("d/m/Y H:i:s")
		));

	}


}

 ?>