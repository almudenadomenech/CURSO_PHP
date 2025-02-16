<?php

//  break
$contador = 1;

while($contador <= 20){
    echo $contador ."<br>";

    if($contador == 10){
        break;

    }
    $contador++;
}

$nombres = ["ana", "maria", "pedro", "david"];

foreach ($nombres as $nombre) {
    echo $nombre . "<br>";

    if($nombre == "maria"){
        break;
    }
}

// Continue

$nombres = ["ana", "maria", "pedro", "david"];

foreach ($nombres as $nombre) {
  

    if($nombre == "maria"){
        continue;
    }
    echo $nombre . "<br>";
}