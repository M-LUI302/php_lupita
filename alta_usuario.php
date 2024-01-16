<?php
    $nombre = $_POST['nombre'];
    echo($nombre);

    $apellidos = $_POST['apellidos'];
    echo($apellidos);

    $genero = $_POST['genero'];
    echo($genero);

    $domicilio = $_POST['domicilio'];
    echo($domicilio);

    require("conexion.php");

    $sql = "INSERT INTO usuarios (id_usuario, nombre, apellidos, genero, domicilio) VALUES (NULL, :nombre, :apellidos, :genero, :domicilio)";
    $result = $conex->prepare($sql);
    $result->execute(array(":nombre"=>$nombre, ":apellidos"=>$apellidos, ":genero"=>$genero, ":domicilio"=>$domicilio));

    if ($result) {
        header("location: formulario.html");
    } else {
        header("location: formulario.html");
    }

    $result->closeCursor();

    echo "<meta http-equiv='Refresh' content='0:url=consulta_usuarios.php'>";
?>