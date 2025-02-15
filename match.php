<?php

$nombre = "Ana";

$nombre_1 = "Juan";
$nombre_2 = "Maria";
$nombre_3 = "Ana";

$resultado = match ($nombre) {
    $nombre_1 => "Nombre igual a Juan",
    $nombre_2 => "Nombre igual a Maria",
    $nombre_3 => "Nombre igual a Ana",
    default => "No coincide con ningun nombre"
};

echo $resultado;