<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="Sesiones_sesion.php">Iniciar Sesión</a>
    <a href="Sesiones_protegido.php">Contenido protegido</a>
    <h1>Bienvenido: <?php echo isset($_SESSION['admin']) ? $_SESSION['admin']:'Invitado' ?></h1> <!-- Si no existe una sesion se imprimira 'invitado' -->
</body>
</html>