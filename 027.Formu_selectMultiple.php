<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <form action="index.php" method="post">

        
        <label for="asignatura">Asignaturas</label>
        <select id="asignatura" name="asignatura[]" multiple>
            <option value="Ingles">Ingles</option>
            <option value="Matematicas">Matemáticas</option>
            <option value="Ciencia">Ciencia</option>
            <option value="Lenguaje">Lenguaje</option>
        </select>

        <br><br>

        <label for="opcion-1">
            <input type="checkbox" value="Manzana" id="opcion-1" name="frutas[]">Manzana

        </label>

        <br>

        <label for="opcion-2">
            <input type="checkbox" value="pera" id="opcion-2" name="frutas[]">Pera

        </label>

        <br>

        <label for="opcion-3">
            <input type="checkbox" value="naranja" id="opcion-3" name="frutas[]">Naranja

        </label>

        <br><br><br>

        <button type="submit">Enviar</button>

    </form>
</body>

</html>