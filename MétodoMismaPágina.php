<?php
    if(isset($_POST['enviar'])){
        $nombre = $_POST['nombre'];
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];
        $nota3 = $_POST['nota3'];

        $promedio = ($nota1 + $nota2 + $nota3) / 3;
        echo '<br>'.$nombre.' tu promedio es: '.$promedio;
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
        <h1>Promedio</h1>
        <label for="">Nombre: </label>
        <input type="text" name="nombre">
        <label for="">Nota 1: </label>
        <input type="text" name="nota1">
        <label for="">Nota 2: </label>
        <input type="text" name="nota2">
        <label for="">Nota 3: </label>
        <input type="text" name="nota3">
        <input type="submit" value="Calcular" name="enviar">
    </form>
    
</body>
</html>