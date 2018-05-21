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
        $login = "root";
        $senha = "adfasf";
        $user = new Usuario();
        $user->login($login, $senha);
        
        echo $user;
        

 ?>