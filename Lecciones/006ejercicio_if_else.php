<?php
$calificacion_1 = 5;
$calificacion_2 = 4;
$calificacion_3 = 3;

$promedio = ($calificacion_1 + $calificacion_2 +$calificacion_3) / 3;

if ($promedio > 7){
    echo "El estudiane aprobró con: $promedio";
}else{
    echo "El estudiante suspendió con: $promedio";
}