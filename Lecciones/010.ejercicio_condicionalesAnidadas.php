<?php
// Pedir al usuario la edad y el genero, para que el ordenador le indique si ya puede jubilarse. 
// Tener en cuenta que un hombre se puede jubilar cuando tenga 60 años o más, en cambio 
// una mujer se jubilará si tiene más de 54 años.

$edad = 20;
$genero = "M";

if ($genero == "M"){
    if (($edad >= 60)) {
        echo "El hombre puede jubilarse";
    }else{
        echo "El hombre No puede jubilarse";
    }
}elseif ($genero == "F") {
   if($edad > 54){
    echo "La mujer puede jubilarse";
   }else{
    echo "La mujer No puede jubilarse";
   }
}else{
    echo "Coloque una opción valida";
}