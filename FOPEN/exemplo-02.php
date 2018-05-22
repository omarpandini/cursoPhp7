<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'config.php';

$sql = new Sql();
$usuarios = $sql->select("select * from tb_usuarios order by idusuario");
$usuario = "";

//echo json_encode($usuarios);

$file = fopen("usuarios.csv", "w+"); // w+ => Cria um arquivo novo, zera o que estiver dentro

foreach ($usuarios as $key => $value) {
    foreach ($value as $key => $user) {
        $usuario .=$user.";";
    }
    fwrite($file , $usuario."\r\n");
    $usuario ="";
}

fclose($file);

?>