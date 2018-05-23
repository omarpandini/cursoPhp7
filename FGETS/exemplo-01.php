<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$filename = "usuarios.csv";
$linhas = "";
$data = array();

//Verificar se arquivo existe
if (file_exists($filename)) {
    $file = fopen($filename, "r"); // r = modo leitura
    $headers = explode(";", fgets($file)); //fgets retorna true ou false caso ainda tenha linhas

    $data = array();
    
    while ($row = fgets($file)) {
        $rowdata = explode(";", $row);
        $linha = array();
        
        for ($index = 0; $index < count($headers); $index++) {
            $linha[$headers[$index]] = $rowdata[$index];
        }
                
        array_push($data, $linha);
    }
    
    fclose($file);
    
    echo json_encode($data);
    
}
?>

