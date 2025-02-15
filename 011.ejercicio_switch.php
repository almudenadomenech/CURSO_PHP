<!-- Se desea diseñar un programa que escriba los días de la semana en función
 del valor de la variabla dia.
 
 Los días de la semana son 7; por consiguiente el rango de valores de día será de 
 1 a 7, y en caso de que dia tome un valor diferente se deberá producir un mensaje
 de error-->

 <?php

 $dia = 6;

 switch($dia){
    case 1:
        echo "Es lunes";
    break;

    case 2:
        echo "Es martes";
    break;

    case 3:
        echo "Es miercoles";
    break;

    case 4:
        echo "Es jueves";
    break;

    case 5:
        echo "Es viernes";
    break;

    case 6:
        echo "Es sabado";
    break;

    case 7: 
        echo "es domingo";
    break;

    default:
        echo "Introduce un numero ente 1 y 7";
 }