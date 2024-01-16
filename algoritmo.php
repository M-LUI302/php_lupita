<?php

    $nombre = "Maria Guadalupe";
    $nombre_cifrado = password_hash($nombre, PASSWORD_DEFAULT);
        echo $nombre_cifrado."\n";

    $nombre_cifrado = password_hash($nombre, PASSWORD_DEFAULT, array("cost"=>12));

    $hash = '$2y$12$aPZKsIokkr7MEoTFApaCheEVOr0j5/jH8iu3vuC8AXlBxh3kuZV6m';
    if(password_verify('Maria Guadalupe',$hash)){
        echo "Valido";
    }else {
        echo "Inválido";
    }
?>    