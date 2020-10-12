<?php

$nome = "Jeff";

function teste() {

    global $nome;
    echo $nome;

}

function teste2() {

    $nome = "Slywitch";
    echo $nome . " agora no teste 2";

}

teste();
echo "<br/>";
teste2();

?>