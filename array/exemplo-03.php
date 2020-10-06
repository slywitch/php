<?php

$pessoas = array();

array_push($pessoas, array(
    'Nome'=>'Joao',
    'Idade'=>20
));

array_push($pessoas, array(
    'Nome'=>'Glaucio',
    'Idade'=>25
));

print_r($pessoas[0]['Nome']);

?>