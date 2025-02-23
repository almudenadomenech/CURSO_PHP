<?php
    session_name("LOGIN");   
    session_start();

    session_destroy();

    // Se puede redireccionar a otra pagina con código javaScript o php
    if (headers_sent()) {
        echo "<script>window.location.href='index.php';</script>";
    } else {
        header('Location: index.php');
    }
?>



