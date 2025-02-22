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

### break

para detener el ciclo:

$contador = 1;

while($contador <= 20){
    echo $contador ."<br>";

    if($contador == 10){
        break;

    }
    $contador++;
}

Ejemplo 2: 

$nombres = ["ana", "maria", "pedro", "david"];

foreach ($nombres as $nombre) {
    echo $nombre . "<br>";

    if($nombre == "maria"){
        break;
    }
}

### continue

Muestra todos los valores menos el que le decimos en el condicional.

$nombres = ["ana", "maria", "pedro", "david"];

foreach ($nombres as $nombre) {
  

    if($nombre == "maria"){
        continue;
    }
    echo $nombre . "<br>";
}

## INCLUDE Y REQUIRE

Ambas funciones sirven para añadir otros ficheros a nuestros scripts en PHP.

### include
inserta en nuestro script un código procedente de otro archivo, si no existe dicho archivo o si contiene algún tipo de error nos mostrará un warning por pantalla y el script seguirá ejecutándose.

include "014.ejercicio_for.php";

### require
hace la misma operación que include , pero en caso de no existir el archivo o error en el mismo mostrará un ‘fatal y el script no se sigue ejecutando.

require  "014.ejercicio_for.php";


## Funciones propias

Una función es un conjunto de instrucciones a la que podemos recurrir siempre que queramos . Éstas pueden recibir parámetros y realizar todo tipo de tareas, ya sean complejas o sencillas. Un nombre de función válido comienza con una letra o guión bajo , seguido de cualquier número de letras, números o guiones bajos.

function promedio_alumno ($nota_1, $nota_2, $nota_3){
    $promedio = ($nota_1+ $nota_2+ $nota_3)/3;
    return $promedio;
}

echo promedio_alumno(10, 5, 4);

### Incluir funciones de otros ficheros.

Se puede hacer con include o require.

<?php

include "019.funciones.php";

echo promedio_alumno(10, 8, 7);

## FUNCIONES STRING

### strtolower:
Convierte todas las letras en minúsculas.

$cadena_texto = "Hola Mundo";

echo strtolower($cadena_texto); -> hola mundo

### strtoupper:
Convierte todas las letras en mayúsculas.

$cadena_texto = "Hola Mundo";

echo strtoupper($cadena_texto); -> HOLA MUNDO


### ucfirst:
Convierte la primera letra del string a mayúsculas.

$cadena_texto = "hola mundo";

echo ucfirst($cadena_texto); -> Hola mundo.

### ucwords:
Convierte la primera letra de cada palabra en mayúsculas.

$cadena_texto = "hola mundo";

echo ucwords($cadena_texto); _> Hola Mundo.


### strlen:
Devuelve el numero de caracteres de la cadena.

$cadena_texto = "hola mundo";

$longitud = strlen($cadena_texto);

echo $cadena_texto . " tiene " . $longitud . " caracteres <br>"; -> hola mundo tiene 10 caracteres.

## str_word_count:

devuelve las palabras que continene una cadena.

$palabras = str_word_count($cadena_texto);

echo $cadena_texto . " tiene " . $palabras . " palabras <br>"; => hola mundo tiene 2 palabras.


## CONVERTIR UN STRING EN UN ARRAY

$fecha_1 = "2021/11/29";
$fecha_2 = "2021/11/30";
$numeros = "Uno Dos Tres Cuatro Cinco Seis Siete";

$array_fecha = explode("/", $fecha_1);

echo $array_fecha[0]; => 2021


## FUNCIONES MATEMÁTICAS

### pow: Elevar a una potencia

echo pow(5, 3); => 125

### sqrt: calcular la raiz cuadrada de un número.

echo sqrt(9); => 3

### rand: muestra un numero aleatorio en el rango que le pongamos

Cada vez que lo recargemos nos dará un número diferente.

echo rand(1, 100); => 65


### floor: redondeo un decimal hacia abajo.

echo floor(4.3); => 4

### ceil: redondeo un decimal hacia arriba.

echo ceil(4.3); => 5

### round: redondea un numero decimal.
 Lo redondea al número más próximo.

 echo round(3.4);=> 3

 También le podemos decir el número de decimales que queremos mostrar.(En el segundo parámetro)

 echo round(1.65872, 2); => 1.66

 ### Formatear cantidades con decimales.

 Se puede usar con un solo parámetro o con los 4.

 number_format(cantidad, decimales, separador_decimal, separador_millares)

 1. con un parámetro: redondea el número y utiliza un separador de millares.

 $cantidad_1 = 12732.77;
$cantidad_2 = 1931.81;

$cantidad_1= number_format($cantidad_1);

echo $cantidad_1; => 12,733


### date()

1. Muestra la fecha actual:

$fecha = date("d/m/Y");
echo $fecha;

2. Muestra la hora actual:

$hora = date("H:i");
echo $hora;


## ¿Qué Es Un Hash Y Cómo Funciona?

Una función criptográfica hash usualmente conocida como “es un algoritmo matemático que transforma cualquier bloque
arbitrario de datos en una nueva serie de caracteres con una longitud fija .Independientemente de la longitud de los datos de entrada , el valor
hash de salida tendrá siempre la misma longitud.

# FORMULARIOS

1. Etiqueta form action= a que archivo lo vamos a mandar.
2. method = post
    En el archivo al que lo hemos enviado.

    $nombre= $_POST['nombre'] ; => Es el nombre que se le ha dado en name.
$asignatura= $_POST['asignatura'] ;
$fruta= $_POST['frutas'] ;

echo $nombre ." - " . $asignatura ." - " .$fruta;

## select multiple
 Para que podamos seleccionar varios valores.

1.  <select id="asignatura" name="asignatura[]" multiple>

 añadimos multiple y los corches de un array al nombre de name

$materias =$_POST['asignatura'];
foreach($materias as $asignatura){

    echo $asignatura. "<br>";
}

2. checkbox:

<label for="opcion-1">
    <input type="checkbox" value="Manzana" id="opcion-1" name="frutas[]">Manzana

</label>

<br>

<label for="opcion-2">
    <input type="checkbox" value="pera" id="opcion-2" name="frutas[]">Pera

</label>

También ponemos corchetes en name para indicar que es un array

$arrayFrutas =$_POST['frutas'];
foreach($arrayFrutas as $fruta){

    echo $fruta. "<br>";
}

## is_null (comprobar si una variable es null)

$numero;

if(is_null($numero)){
    echo "Es nula";
}else{
    echo "No es nula";
}

## unset(Sirve para destruir o eliminar una variable)

$numero= 9;

unset($numero);

if(is_null($numero)){
    echo "Es nula";
}else{
    echo "No es nula";
}

## empty (comprobar si una variable esta vacia)

$numero= 9;

if(empty($numero)){
    echo "Esta vacia";
}else{
    echo "No esta vacia";
}

## isset (comprueba si una variable esta definida y no tiene el valor null)

$numero= $_GET['numero'];

if(isset($numero)){
    echo "Esta vacia";
}else{
    echo "No esta vacia";
}


# ENVIAR ARCHIVOS DESDE UN FORMULARIO

En la etiqueta form pondriamos:

  <form action="carga.php" method="post" enctype="multipart/form-data">

En el archivo de destino para poder manipular los datos:

// recibe el nombre
echo $_FILES['fichero']['name']."<br>";
// recibe la ruta del archivo temporal donde se encuentra el archivo
echo $_FILES['fichero']['tmp_name']."<br>";
// Tipo de archivo que estamos enviando
echo $_FILES['fichero']['type']."<br>";
// Error, si se a cargado bien o no
echo $_FILES['fichero']['error']."<br>";
// El tamaño del fichero
echo $_FILES['fichero']['size']."<br>";


## Las Cookies en PHP

Las cookies son un mecanismo por el que se almacenan datos en el navegador para monitorizar o identificar a los usuarios que vuelvan al sito web . En otras palabras podemos decir que l as cookies son pequeños archivos donde almacenamos un datos, estos archivos se almacenan en el navegador del cliente.
Las cookies se deben de crear antes del Doctype , ya que han de ser generadas antes de que el navegador procese el código HTML.

Ejemplo de uso de cookies:
preferencias de idioma, seguimiento de anuncios etc.

1. crear una cookie:

<?php

// setcookie("Nombre", valor, expiracion, dir, dominio, secure, httponly);
setcookie("Idioma", "es", time()+60*60*24*30,"/", "localhost",false, false);

?>

2. Eliminar una cookie:

<?php

// setcookie("Nombre", valor, expiracion, dir, dominio, secure, httponly);
setcookie("Idioma", "es", time()-60,"/", "localhost",false, false);

?>



## Sesiones en PHP

Las sesiones en aplicaciones web desarrolladas con PHP nos sirven para almacenar información durante toda la visita de un usuario a un sitio web . Dicha información se almacena en el servidor. Ejemplo de uso de esiones: inicio de sesión ( login ), buscadores (que recuerde termino de búsqueda) etc.


















































