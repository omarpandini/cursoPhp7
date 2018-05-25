<?php

$image = imagecreatefromjpeg("certificado.jpg");
$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

imagestring($image, 5, 450, 150, "Certificado", $titleColor);
imagestring($image, 5, 440, 350, "Omar Pandini", $titleColor);
imagestring($image, 3, 440, 370, "Concluido em: ". date("d/m/Y"), $titleColor);

header("Content-Type:image/jpeg");
//imagejpeg($image);
imagejpeg($image,"certificado-".date("d-m-y").".jpeg"); //Gerando o arquivo
imagedestroy($image);

?>