<?php

$articulos = array("Zapatos" => 350000, "Tenis"=> 280000,"Camisetas"=> 175000,"Jeans"=> 200000);
echo"Precio:" . "<br>";
echo "Precio Zapatos: " .$articulos[ 'Zapatos' ]. " <br>" . "Precio Tenis: " . $articulos['Tenis']. " <br>" . "Precio Camisetas: " . $articulos['Camisetas'] ." <br>" . "Precio Jeans: " . $articulos['Jeans'];


$costoTotal = $articulos[ 'Zapatos' ] + $articulos['Tenis'] + $articulos['Camisetas'] + $articulos['Jeans'];
echo "<br>" .'Costo total de los articulos: '. $costoTotal. "<br>";

$promedio= $costoTotal/4;
echo 'El promedio es:'. $promedio.'<br>';

$precioJeans_aumentado = $articulos['Jeans'] + ($articulos[ "Jeans" ]* 6.2/100);

echo "Precio de Jeans con aumentro: " . $precioJeans_aumentado."<br>";

$disminuirprecio_zapatos = $articulos["Zapatos"] - ($articulos["Zapatos"] *0.8/100);
echo "Precio de Zapatos disminuido: ". $disminuirprecio_zapatos."<br>";

