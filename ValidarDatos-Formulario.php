<?php
    if(isset($_POST['enviar'])){
        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];
        $correo = $_POST['correo'];
    }

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method = "post">  <!-- SERVER: referenciar el mismo archivo -->
        <h1>Registro</h1>
        <label for="">Nombre: </label>
        <input type="text" name="nombre" value="<?php if(isset($nombre)) echo $nombre  ?>">
        <label for="">Edad: </label>
        <input type="text" name="edad" value="<?php if(isset($edad)) echo $edad  ?>">
        <label for="">Correo: </label>
        <input type="text" name="correo" value="<?php if(isset($correo)) echo $correo  ?>">
        <input type="submit" value="Enviar" name="enviar">
        <?php
            include("Validar-include.php");
        ?>

    </form>
    
</body>
</html>