<?php
/*
comentario

$anoNascimento = 1990;

$nomeCompleto = "";

*/

$nome1 = "Jeff";

$sobrenome = "Slywitch";

$nomeCompleto = $nome1 . " " . $sobrenome;

echo $nomeCompleto;

exit;

echo $nome1;

echo "<br/>";

unset($nome1);

if (isset($nome1)) {
    
    echo $nome1;

}

//comentario

?>