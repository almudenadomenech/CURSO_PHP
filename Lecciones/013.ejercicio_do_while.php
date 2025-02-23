<!-- Diseñe un programa que imprima la tabla de multiplicar de un numero dado,
desde el factor 1 hasta el 12. (Incremento y decremento). -->

<?php

$contador = 1;
$num = 5;

do{
    echo $num . "x" . $contador . "=" . $num * $contador . "<br>";
    $contador++;
}while($contador <= 10);
