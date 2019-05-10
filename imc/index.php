<?php

include 'classes/Pessoa.php';
include 'classes/Imc.php';

$pessoa = new Pessoa(70, 1.70);
// var_dump($pessoa);
$imc = new Imc($pessoa);

// var_dump($imc);

echo $imc->calcular();