# curso_PHP

## Tipos de Arrays

1. Escalares:

Los arrays escalares son aquellos en los que para acceder a los elementos utilizamos un índice
que representa la posición del valor dentro del array comenzando desde el índice 0

$nombres = ["Carlos", "Pepe", "Maria", "Ana"];

echo $nombres[0];

2. Asociativos:

Para acceder a los elementos del array utilizamos la clave asociada con el elemento, donde este
toma un cierto número de parejas utilizando la sintaxis clave valor como argumentos
Multidimensionales.

$tutor =[
    "nombre" => "Carlos", 
    "apellido" => "Alfaro", 
    "edad"=> 27
];

echo $tutor ["nombre"];

3. Multidimensionales:

Un array multidimensional es aquel cuyos valores son otros arrays Para acceder a sus
elementos se tienen que indicar los índices de cada una de sus dimensiones, utilizando tantos
pares de corchetes como dimensiones se definan en el array 2 dimensiones, 3
dimensiones, etc

$tutor2 =[
    "nombre" => "Maria", 
    "apellido" => "Perez", 
    "edad"=> 19,
    "curso" => ["PHP", "CSS", "HTML"]
];

echo $tutor2["curso"][1];

### Añadir un nuevo elemento al array

$tutor2["pais"] = "Turquia";

### Contar los elementos de un array count(nombre del array)

echo count($tutor);

Si deseamos contar todos los elementos de un array multidimensional tendremos que indicar la
constante COUNT_RECURSIVE como segundo argumento de la función count

echo count($tutor2,COUNT_RECURSIVE);

## concatenar texto (Se utiliza el punto)

 $nombre = "Carlos";
    $pais = "Turquia";

    echo $nombre . " " . $pais;

### Interpolación

 echo "Mi nombre es: {$nombre} mi país de residencia es {$pais}";


## Estructura condicional doble if (if-else)

 Con frecuencia se desea ejecutar una sentencia si una determinada condición se
cumple y una sentencia diferente si la condición no se cumple. Esto es para lo
que sirve else . El else extiende una sentencia if para ejecutar una sentencia en
caso que la expresión en la sentencia if se evalúe como FALSE.

<?php

    $edad = 16;

    if($edad >= 18){
        echo "El usuario es mayor de edad";
    }else {
        echo "El usuario es menor de edad";
    }

### Operador ternario

El operador ternario puede considerarse como una instrucción if de una sola línea. Se compone de tres partes. El operador, y dos resultados. La sintaxis es la siguiente:

<operador> ? <true value>: <false value>

## Estructura condicional multiple (if-elseif)

elseif, como su nombre lo sugiere, es una combinación de if y else . Del mismo
modo que else , extiende una sentencia if para ejecutar una sentencia diferente
en caso que la expresión if original se evalúe como FALSE . Sin embargo, a
diferencia de else , esa expresión alternativa sólo se ejecutará si la expresión
condicional del elseif se evalúa como TRUE
$dia = 5;

if($dia == 1){
    echo "Lunes";
}elseif ($dia == 2) {
    echo "Martes";
}
elseif ($dia == 3) {
    echo "Miercoles";
}elseif ($dia == 4) {
    echo "Jueves";
}elseif ($dia == 5) {
    echo "Viernes";
}elseif ($dia == 6) {
    echo "Sabado";
}elseif ($dia == 7) {
    echo "Domingo";
}else{
    echo "No es un día de la semana";
}


## SWITCH

La sentencia
switch es similar a una serie de
sentencias IF en la misma expresión.
En muchas ocasiones, es posible que se quiera
comparar la misma variable (o expresión) con
muchos valores diferentes , y ejecutar una parte de código distinta dependiendo de a que valor es igual. Para esto es exactamente la expresión switch La comparación es una comprobación de igualdad débil

$fruta = "fresa";

switch($fruta){

    case "fresa":
        echo "La fruta es una fresa";
    break;

    case "pera":
        echo "La fruta es una pera";
    break;

   default:
   echo "no eres ni fresa ni pera";
}


## MATCH
La expresión match ramifica la evaluación basada en una comprobación de identidad de un valor. De
forma similar a una sentencia switch , una expresión match tiene una expresión de sujeto que se
compara con múltiples alternativas.A diferencia de switch , la comparación es una comprobación de 
identidad (===) en lugar de una comprobación de igualdad débil (==). Las expresiones match están 
disponibles a partir de PHP 8.0.0.

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

## ciclo WHILE
Las estructuras repetitivas son aquellas que reiteran una o un grupo de instrucciones "n" veces y dependen de una variable de control del ciclo llamada contador . Es decir, ejecutan una o varias instrucciones un número de veces definido . Los cuatro
bucles en PHP son el bucle while , el bucle for , el bucle do while y el bucle foreach.

$contador = 1;

while($contador <= 20){
    echo $contador . "<br> ";
    $contador++;
}

## ciclo DO-While

do{
    echo $contador . "<br>";
    $contador++;
}while($contador <= 20);

## ciclo For

La estructura repetitiva for (para) se utiliza generalmente cuando tenemos bien determinada la cantidad de repeticiones a realizar. Se diferencia de las anteriores en que se debe incluir en la propia instrucción una variable de control ,
la cual se incrementa o decrementa de forma automática

for($i = 1; $i <= 20; $i++){
    echo $i . "<br>";
}

## ciclo Foreach

El ciclo foreach proporciona un modo sencillo de iterar sobre arrays . foreach funciona sólo sobre arrays y emitirá un error al intentar usarlo con una variable de un tipo diferente de datos o una variable no inicializada. Existen dos sintaxis:

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

ejemplo 2: 

$productos = [
    ["codigo" => "A0001", "descripción" => "Mouse"],
    ["codigo" => "A0002", "descripción" => "Teclado"],
    ["codigo" => "A0003", "descripción" => "Monitor"],
    ["codigo" => "A0004", "descripción" => "Impresora"],
    
];

foreach($productos as $producto){
    echo $producto["codigo"] . "-" .$producto["descripción"]. "<br>";
}
