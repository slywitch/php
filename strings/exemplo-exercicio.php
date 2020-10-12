<?php

$name = 'Hcode Treinamentos';

$replace = 'Cursos';

//Primeira Opcao

//$new_name = substr($name, strpos($name, 'T')) . $replace;

//Segunda Opcao

//$new_name = substr($name, 0, 'T') . $replace;

//Terceira Opcao

$new_name = substr($name, 0, strpos($name, 'T')) . $replace;

//Quarta Opcao

//$new_name = str_replace('T', $replace, $name);

echo $new_name;

?>