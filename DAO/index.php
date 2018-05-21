<?php 

	require_once("config.php");	

	//$user = new Usuario();

	//Traz somete um usuário
        //$user->loadById(1);    
	//echo $user;  
        
        //Carrega uma lista de usuários
        //echo json_encode(Usuario::getList());
        
        //Carrega um usuário passado por parâmetro o login, com like %%
        //echo json_encode(Usuario::search("MZO") );
        
        //Faz validação de usuario e senha
        /*$login = "root";
        $senha = "adfasf";
        $user = new Usuario();
        $user->login($login, $senha);
        
        echo $user;*/
        
        //Criando um novo usuário no banco
        /*$novoUsuario = new Usuario();
        $novoUsuario->setDesLogin("mzo_novo_login");
        $novoUsuario->setDesSenha("nova_senha_para_mzo");
        $novoUsuario->insert();
        echo $novoUsuario;*/
        
        //Criando um novo usuário com construtor
        /*$novoUsuario = new Usuario("deia_mzo", "ucaucauca");
        $novoUsuario->insert();
        echo $novoUsuario;*/
        
        //Alterando um usuário
        $alteraUsuario = new Usuario();
        $alteraUsuario->loadById(3);
        $alteraUsuario->update("deia@_novo","deiamzo1020");
        

 ?>