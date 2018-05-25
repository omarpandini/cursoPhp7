<?php

function trataNome($param) {
    if (!$param) {
        throw new Exception("Nenhum nome foi informado", 1);
    }

    echo ucfirst($param) . "<br>";
}

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
try {

    trataNome("Omar");
    trataNome("");
} catch (Exception $e) {
    echo $e->getMessage();
} finally {
    echo "<br>Executou o try!";
}
?>