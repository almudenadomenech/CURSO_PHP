<?php

// varias formas de declarar los array:

// 1. Sintaxis antigua

$estudiantes = array("Carlos", "Pepe", "Maria", "Ana");
    // para cambiar un elemento del array
    $estudiantes[1]="Daniel";

    //visualizar el elemento del array
echo $estudiantes[1];

//2. Nueva sintaxis

$nombres = ["Carlos", "Pepe", "Maria", "Ana"];

echo $nombres[0];

// 3. array de tipo asociativo (asignar un valor =>)
$tutor =[
    "nombre" => "Carlos", 
    "apellido" => "Alfaro", 
    "edad"=> 27
];

echo $tutor ["nombre"];
echo $tutor ["edad"];

// Array de multiples dimensiones
$tutor2 =[
    "nombre" => "Maria", 
    "apellido" => "Perez", 
    "edad"=> 19,
    "curso" => ["PHP", "CSS", "HTML"]
];

// Añadir un nuevo elemento al array
$tutor2["pais"] = "Turquia";

echo $tutor2["curso"][1];
echo $tutor2["pais"];

echo count($tutor2,COUNT_RECURSIVE);
