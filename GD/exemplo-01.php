<?php

header("Content-Type:image/png");
$image = imagecreate(1000, 500);
$black = imagecolorallocate($image, 51, 204, 255);
$red = imagecolorallocate($image, 255, 0, 0);

imagestring($image, 5, 60, 120, "Curso de PHP", $red);
imagestring($image, 3, 80, 140, "Hello de boa", $red);

$position = 140;
for ($index = 0; $index < 10; $index++) {
    $position += 20;
    imagestring($image, 3, 80, $position, "Hello de boa ".$index, $red);
}
imagepng($image);
imagedestroy($image);
?>