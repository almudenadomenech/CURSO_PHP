<?php

$ordenador = 12;
$precio = 700;

$total = $ordenador * $precio;

if ($ordenador < 5){
    $total = $total - $total * 0.10;
}elseif (($ordenador >=5) && ($ordenador < 10)) {
    $total = $total - $total * 0.20;
}elseif ($ordenador > 10) {
    $total = $total - $total * 0.40;
}

echo "El valor de la compra es: $total";