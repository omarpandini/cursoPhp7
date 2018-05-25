<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$data = array(
    "empresa"=>"Unimed",
    "cargo"=>"Analista de Sistemas"
);


setcookie("NOME_DO_COOKIE", json_encode($data), time() + /*segundos*/3600);

echo "Ok";

?>