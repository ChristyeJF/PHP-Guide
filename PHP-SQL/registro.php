<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Registro de Usuarios</h3>
    <form action="agregar_usuario.php" method="POST">
        <input type="text" name="nombre_usuario" placeholder="Ingresa tu usuario">
        <input type="text" name="contrasena" placeholder="Ingresa tu contraseña">
        <input type="text" name="contrasena2" placeholder="Ingresa nuevamente tu contraseña">
        <button type="submit">Guardar</button>
    </form>
</body>
</html>