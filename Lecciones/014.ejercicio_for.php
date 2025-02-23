<?php

if(isset($_POST['numero']) && $_POST['numero']!=""){
    $numero= $_POST['numero'];
    for($i = 1; $i <= 10; $i++){
        echo $numero ."x". $i. "=".$i*$numero. "<br>";
    }
}else{
    echo "No definida";
}
