<?php

function saludo($nombre) {
    return  "hola mi nombre es: $nombre" . "<br>";

}

echo saludo("Almu");

$usuario = "Ana";
echo saludo($usuario);


function promedio_alumno ($nota_1, $nota_2, $nota_3){
    $promedio = ($nota_1+ $nota_2+ $nota_3)/3;
    return "la nota promedio del alumno es: $promedio";
}

echo promedio_alumno(10, 5, 4);