<?php

/* $nombre= $_POST['nombre'] ;
$asignatura= $_POST['asignatura'] ;
$fruta= $_POST['frutas'] ;

echo $nombre ." - " . $asignatura ." - " .$fruta; */

$materias =$_POST['asignatura'];
foreach($materias as $asignatura){

    echo $asignatura. "<br>";
}

echo "<br>";
echo "<br>";
echo "<br>";

$arrayFrutas =$_POST['frutas'];
foreach($arrayFrutas as $fruta){

    echo $fruta. "<br>";
}
