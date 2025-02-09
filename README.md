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