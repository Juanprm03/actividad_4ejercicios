<?php

$tipo_proyecto = "B";
$precios = array("A" => 20000,"B" => 10000,"C" =>5000) ;
$salario_mensual = 0;
$horas_mes = 240;
if ($tipo_proyecto == "A") {
    $salario_mensual = $precios["A"] * $horas_mes;

}
else if ($tipo_proyecto == "B") {
    $salario_mensual = $precios["B"] * $horas_mes;
}
else  if ($tipo_proyecto == "C") {
    $salario_mensual = $precios["C"] * $horas_mes;
}

if($salario_mensual > 1500000){
    echo "Salario es mayor a tope máximo";
}
else 
{
        $salario_mensual = $precios["C"] * $horas_mes + (3 * (($precios["C"]) + ($precios["C"]* 0.06)));
    
}
echo "Salario Mensual del Empleado es: $salario_mensual  <br>";

echo "Valor hora extra: ". $precios["C"] + ($precios["C"]* 0.06). "<br>";

echo "Nuevo salario:".$precios["C"] * $horas_mes + (3 * (($precios["C"]) + ($precios["C"]* 0.06)));