<?php
    session_name("CON");   
    session_start();

    if(isset($_SESSION['contador'])){
        $_SESSION['contador']++;
    }else{
        $_SESSION['contador']= 1;
    }

   
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones en PHP</title>
</head>
<body>
     

     <form action="login.php" method="post">
        <label for="">Usuario</label>
        <input type="text" name="usuario" pattern="[a-zA-Z]{3,10}" maxlength="10">
        <br>

        <label for="">Clave</label>
        <input type="password" name="clave" pattern="[a-zA-Z0-9$@.-]{4,30}" maxlength="30">
        <br><br>

        <button type="submit">Login</button>

     </form>
    
</body>
</html>