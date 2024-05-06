<?php

$jugadores= array(
    'DIM' => 3,
    'Nacional' => 5,
    'Envigado' => 2,
    'Aguilas' => 4
);

$equipos= array(
    'DIM' => 3000000,
    'Nacional' => 2100000,
    'Envigado' => 1650000,
    'Aguilas' => 350000
);

$inversion_DIM = $jugadores[ 'DIM' ] * $equipos['DIM']  ;
//echo ("La inversión del DIM fue de $inversion_DIM <br>");
$output = "La inversión del DIM fue de $inversion_DIM" . PHP_EOL;

$inversion_Nacional = $jugadores[ 'Nacional' ] * $equipos['Nacional'];
//echo ("La inversión del Nacional fue de $inversion_Nacional <br>");
$output = "La inversión del DIM fue de  $inversion_Nacional" . PHP_EOL;

$inversion_Envigado = $jugadores[ 'Envigado' ] * $equipos['Envigado'];
//echo ("La inversión del Envigado fue de $inversion_Envigado <br>");
$output .= "La inversión del Aguilas fue de $inversion_Envigado" . PHP_EOL;

$inversion_Aguilas = $jugadores[ 'Aguilas' ] * $equipos['Aguilas'];
//echo ("La inversión del Aguilas fue de $inversion_Aguilas <br>");
$output .= "La inversión del Aguilas fue de $inversion_Aguilas" . PHP_EOL;

$inversion_total = $inversion_DIM + $inversion_Nacional + $inversion_Envigado + $inversion_Aguilas;
//echo( "La Inversión total de los equipos es $inversion_total");
$output .= "La inversión del Aguilas fue de $inversion_total" ;

$file = 'inversiones.txt';
file_put_contents($file, $output);

echo "Los resultados se han guardado en el archivo $file";