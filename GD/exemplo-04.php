<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

header("Content-type:image/jpeg");
$file = "wallpaper.jpg";
$new_width = 256;
$new_hight = 256;

$data = ( getimagesize($file));
$width = $data[0];

list($old_width,$old_height) = getimagesize($file);

$newImage = imagecreatetruecolor($old_width, $old_height);
$oldImage = imagecreatefromjpeg($file);

imagecopyresampled($newImage, $oldImage, 0, 0, 0, 0, $new_hight, $new_hight, $old_width, $old_height);

imagejpeg($newImage);
imagedestroy($oldImage);

?>

