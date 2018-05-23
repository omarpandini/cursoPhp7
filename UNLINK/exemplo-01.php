<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$file = fopen("teste.txt", "w+");

fclose($file);

unlink("teste.txt");

?>