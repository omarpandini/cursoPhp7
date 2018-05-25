<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$cep = "89219020";
$link = "viacep.com.br/ws/$cep/json/ ";

$ch = curl_init($link);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //1 => TERÁ RESPOSTA DO WEBSERVICE
//curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

$response = curl_exec($ch); //Retorna json//

//echo $response;

curl_close($ch);

$dados = array();
$array = json_decode($response,true); //transforma de json para um array / se não colocar o true,ficará um objeto


array_push($dados, $array);


$cep = "89218580";
$link = "viacep.com.br/ws/$cep/json/ ";

$ch = curl_init($link);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //1 => TERÁ RESPOSTA DO WEBSERVICE

$response = curl_exec($ch); //Retorna json//

$array = json_decode($response,true); //transforma de json para um array / se não colocar o true,ficará um objeto


array_push($dados, $array);
print_r($dados);

curl_close($ch);


?>
