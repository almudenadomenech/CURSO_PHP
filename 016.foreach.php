<?php

$productos = [
    ["codigo" => "A0001", "descripción" => "Mouse"],
    ["codigo" => "A0002", "descripción" => "Teclado"],
    ["codigo" => "A0003", "descripción" => "Monitor"],
    ["codigo" => "A0004", "descripción" => "Impresora"],
    
];

foreach($productos as $producto){
    echo $producto["codigo"] . "-" .$producto["descripción"]. "<br>";
}