<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carga de archivo</title>
</head>

<body>

    <h3>Subir archivo con php</h3>
    <form action="carga.php" method="post" enctype="multipart/form-data">
        <input type="file" name="fichero">
        <br><br>
        <button type="submit">Enviar</button>
    </form>
</body>

</html>