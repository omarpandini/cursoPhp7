<?php

$image = imagecreatefromjpeg("certificado.jpg");
$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);
$xNome = 350;
$yNome = 450;

//imagettftext($image, $size, $angle, $x, $y, $color, $fontfile, $text)
imagettftext($image, 32, 0, 450, 150, $titleColor, "fonts".DIRECTORY_SEPARATOR."BEVAN".DIRECTORY_SEPARATOR."Bevan-Regular.ttf", "Certificado");
imagettftext($image, 32, 0, $xNome, $yNome-50, $titleColor, "fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf", "Omar Pandini");
imagettftext($image, 15, 0, $xNome, $yNome, $titleColor, "fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf", "Concluido em: ". date("d/m/Y"));


header("Content-Type:image/jpeg");
imagejpeg($image);
imagejpeg($image,"certificado-".date("d-m-y").".jpeg"); //Gerando o arquivo
imagedestroy($image);

?>