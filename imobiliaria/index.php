<?php

include 'classes/Terreno.php';

//obtendo os dados formulario
// $areaMinima = $_POST['area_minima'];
$areaMinima = 1000;

//instanciando objetos
$terreno1 = new Terreno(100, 10, 50); 
$terreno2 = new Terreno(200, 20, 100); 
$terreno3 = new Terreno(300, 30, 150);

//criando lista (array) e atribuindo os objetos
$listaTerrenos = [];
$listaTerrenos[0] = $terreno1;
$listaTerrenos[1] = $terreno2;
$listaTerrenos[2] = $terreno3;

foreach($listaTerrenos as $t) {
    if ($t->calcularArea() >= $areaMinima) {
        echo $t->calcularArea() ."\n";
    }
}

// var_dump($listaTerrenos);