# CREACION DE CARPETAS DENTRO DEL PROYECTO INVENTARIO

1. CSS:
    Archivos:
        bulma.min.css 
        estilos.css 
2. IMG
3. INC
    Archivos:
        navbar.php: vamos a bulma en doc buscamos navbar elegimos el que nos guste y lo copiamos y lo pegamos aquí.

        script.php:
        1. Para que sea responsive: en bulma donde hemos copiado el navbar buscamos Javascript toggle y copiamos y pegamos la segunda opción dentro de una etiqueta script.
        En este archivo ponemos otra etiqueta script <script src="./js/ajax.js"></script>
4. JS
    Archivo:
        ajax.js
5. PHP
6. VISTAS

Tenemos un index.php 

## INSTALAR BULMA PARA DAR ESTILOS

EN DOC

1. Instalación: Opción 2 (para descargar)

Lo descomprimimos y crea una carpeta de css y aquñi buscamos el archivo bulma.min.cc, lo copiamos y lo pegamos en la carpeta css.

2. Vinculación con el proyecto

    en index.php ponemos una etiqueta <link rel="stylesheet" href="./css/bulma.min.css"> en head.
    También añadimos en head <link rel="stylesheet" href="./css/estilos.css"> en head.

# ARCHIVO index.php

    En head:
    <link rel="stylesheet" href="./css/bulma.min.css">
    <link rel="stylesheet" href="./css/estilos.css">

    En el body:

     <?php 
    include_once './inc/navbar.php'; 
    include_once './inc/script.php'; 
    ?>

