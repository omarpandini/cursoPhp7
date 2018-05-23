<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$filename = "images/flamengo1.jpg";

$fileinfo = new finfo(FILEINFO_MIME_TYPE);

$mimetype = $fileinfo->file($filename);

$base64 = base64_encode(file_get_contents($filename) ); //Lê o conteúdo de um arquivo

$base64encode =  "data:".$mimetype.";base64,".$base64;

?>

<a href="<?=$base64encode?>" target="_blank">Link para imagem</a>

<img src="<?=$base64encode?>">

