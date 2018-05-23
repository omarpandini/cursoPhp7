<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'config.php';

$sql = new Sql();
$usuarios = $sql->select("select * from tb_usuarios order by idusuario");

$file = fopen("usuarios.csv", "w+"); // w+ => Cria um arquivo novo, zera o que estiver dentro

$headers = array();

foreach ($usuarios[0] as $key => $value) {
    array_push($headers, $key);
}

fwrite($file, implode(";", $headers) . "\r\n");

foreach ($usuarios as $key => $value) {
    $lines = array();
    foreach ($value as $key => $user) {
        array_push($lines, $user);
    }
    fwrite($file, implode(";", $lines) . "\r\n");
}

fclose($file);
?>