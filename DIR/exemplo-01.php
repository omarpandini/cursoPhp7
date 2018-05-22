<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$name = "images";

//Verificar se existe um diretório
//se não existir, irá criar
if (!is_dir($name)) {
    mkdir($name); //Cria diretório
   // echo "Diretório " . $name . " criado com sucesso!";
} else {
    //rmdir($name); //Remove diretório
    //echo "Já existe o diretório: " . $name;
}

//echo "<br><br>";

$data = array();

$images = scandir($name); //Irá scanear o diretório / retorna um array
//var_dump($images);
foreach ($images as $img) {
    if (!in_array($img, array(".", ".."))) { //Não exibir . e .. in_array faz busca dentro de um array
        $filename = $name.DIRECTORY_SEPARATOR.$img;
        //echo "Arquivos ".$filename . "<br><br>";        
        
        $info = pathinfo($filename); //Obter mais informações do arquivo
        $info["size"] = filesize($filename); //Adicionando o tamanho do arquivo
        $info["modefied"] = date("d/m/Y H:i:s", filemtime($filename)); //Adicionando data da última modificação
        $info["url"] = "http://localhost/cursoPHP7/DIR/".str_replace("\\", "/", $filename);
        
        array_push($data, $info);
    }
}

echo json_encode($data);
?>

