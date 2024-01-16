<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario  con HTML5 Y CSS3</title>
    <link rel="stylesheet" href="css/estilos_formulario.css">
</head>
<body>
    <?php
    $nombreErr = "";
    $nombre = "";
    $apellidosErr = "";
    $apellidos = "";
    $domicilioErr = "";
    $domicilio = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
    
        if (empty ($_POST["nombre"])){
            $nombreErr = "El campo nombre es requerido";
        } else {
            $nombre = test_input($_POST["nombre"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/", $nombre)){
                $nombreErr = "Solo se aceptan letras y espacios";
            }
        }
        if (empty ($_POST["apellidos"])){
            $apellidosErr = "El campo apellidos es requerido";
        } else {
            $apellidos = test_input($_POST["apellidos"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/", $apellidos)){
                $apellidosErr = "Solo se aceptan letras y espacios";
            }
        }
        if (empty ($_POST["domicilio"])){
            $domicilioErr = "El campo domicilio es requerido";
        } else {
            $domicilio = test_input($_POST["domicilio"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/", $domicilio)){
                $domicilioErr = "Solo se aceptan letras y espacios";
            }
        }
    }    
        function test_input ($data){
            $data = trim ($data);
            $data = stripslashes($data);
            $data = htmlentities($data);
        return $data; 
    }
        
   
    ?>
    <div class="contenedor">
        <label for="titulo" class="titulo">Registro de Usuarios</label> 
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"  method="post" onsubmit="return validarFormulario()" class="formulario"  name="formulario" >
            <label for="nombre">Nombre:</label>
            <input value="<?php echo $nombre; ?>" type="text" name="nombre" id="nombre" placeholder="Escribe tu nombre" class="form-control">
            <p class="error" style="color:red"><?php echo $nombreErr; ?></p> 

            <label for="apellidos">Apellidos:</label>
            <input value="<?php echo $apellidos; ?>" type="text" name="apellidos" id="apellidos" placeholder="Escribe tus apellidos" class="form-control">
            <p class="error" style="color:red"><?php echo $apellidosErr; ?></p>

            <label for="genero">Seleccione su género:</label>
            <div class="radio">
                <input type="radio" value="M" name="genero" id="M" required>
                <label for="M" id="mas">Masculino</label>
                <input type="radio"  value="F" name="genero" id="F">
                <label for="F" id="fem">Femenino</label>
            </div>
            <span class="error-message" id="generoError">Selecciona un género.</span>

            <label for="domicilio">Domicilio:</label>
            <input value="<?php echo $domicilio; ?>" type="text" name="domicilio" id="domicilio" placeholder="Escribe el domicilio" class="form-control">
            <p class="error" style="color:red"><?php echo $domicilioErr; ?></p>
            <div class="checkbox">
                <input type="checkbox" name="checkbox" id="checkbox" class="form-control">
                <label for="checkbox">Acepto términos y condiciones</label>
                <span class="error-message" id="terminosError">Acepta los términos y condiciones.</span>
            </div>

            <div class="btn-group">
                <input type="reset" value="Cancelar" class="cancelar">
                <input type="submit" value="Registrar" class="guardar">
                
            </div>
        </form>
    </div>
    <script src="js/instrucciones.js"></script>
</body>
</html>