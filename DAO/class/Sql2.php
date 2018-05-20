<?php 

	/**
	 * CLASSE SOMENTE INSTANCIANDO A CONFIGURAÇÃO DO BANCO
	 */
	class Sql2 extends PDO
	{		
		private $conn;
                
                public function __construct()
		{
			$this->conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");
		}
                
                public function getConn()
                {
                    return $this->conn;
                }
                
                public function selectGetAll($statement) 
                {
                    
                    $stmt = $this->conn->prepare($statement);
                    
                    $stmt-> execute();

                    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    
                    return  $results;
                    
                }
                
                public function selectGetByParam($statement,$params = Array()) 
                {
                    $stmt = $this->conn->prepare($statement);                    
                    
                    
                    foreach ($params as $key => $value) {
                        $stmt->bindParam($key,$value);
                    };
                    
                    $stmt-> execute();

                    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    
                    return  $results;
                    
                }
		
	}

 ?>