<?php

$nombres = ["ana", "maria", "pedro", "david"];

$frutas= [
    "fresas" => 100,
    "peras" => 30,
    "sandias" => 10,
    "melocotones" => 17,
    "manzanas" => 9
];

foreach ($nombres as $nombre) {
    echo $nombre . "<br>";
}

foreach ($frutas as $fruta => $valor){
    echo "Hay". " ". $valor . " ". $fruta . "<br>";
}