<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//$file = fopen("log.txt", "w+"); // w+ => Cria um arquivo novo, zera o que estiver dentro
$file = fopen("log.txt", "a+"); // a+ => vai adicionando conteúdo no arquivo

//fwrite($file, "Hoje é dia ". date("d/m/Y H:i:s")); // Concatena o conteúdo lado a lado
fwrite($file, "Hoje é dia ". date("d/m/Y H:i:s") ."\r\n"); // Concatena o conteúdo pulando linha r = retorno n = nova linha

fclose($file);

echo "Arquivo criado com sucesso!";
?>

