<?php

$pessoa = array(
    'nome'=>'Jeff',
    'idade'=>37
);

foreach ($pessoa as &$value) {

    if (gettype($value) === 'integer') $value += 10;

    echo $value . "<br/>";

}

print_r($pessoa);

?>