<?php
$tarifas= array("INDIVIDUAL" => 2500, "DOBLE" => 4600, "FAMILIAR" => 5200);
$personas = 3;
$dias_hospedaje = 6;
$precio_hospedaje = 0;
$precioconIva = 0;
$precioconDescuento = 0;

if($personas == 1){
    $precio_hospedaje= $tarifas['INDIVIDUAL'] * $dias_hospedaje;
    $precioconIva= $precio_hospedaje + ($precio_hospedaje * 0.19);
    $precioconDescuento= $precioconIva - ($precio_hospedaje * 0.05);
}
else if($personas == 2){
    $precio_hospedaje= $tarifas['DOBLE'] * $dias_hospedaje;
    $precioconIva= $precio_hospedaje + ($precio_hospedaje * 0.19);
    $precioconDescuento= $precioconIva - ($precio_hospedaje * 0.09);
}
else if($personas >= 3){
    $precio_hospedaje= $tarifas['FAMILIAR'] * $dias_hospedaje;
    $precioconIva= $precio_hospedaje + ($precio_hospedaje * 0.19);
    $precioconDescuento= $precioconIva - ($precio_hospedaje * 0.15);
}

echo "Precio sin Iva: $precio_hospedaje <br>";
echo "Precio con iva: $precioconIva <br>";
echo "Precio con Descuento: $precioconDescuento";
