<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if (isset($_COOKIE["NOME_DO_COOKIE"])) {
   // echo "existe o cookie<br>";
    //Transformando em objeto ao invés de array
    $obj = json_decode($_COOKIE["NOME_DO_COOKIE"]);
    
    //var_dump($obj);
    
    echo $obj->empresa;
}

?>