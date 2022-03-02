<?php
    include_once 'Conexion.php';
    //LEER
    $sql_leer = 'SELECT * FROM colores';
    $gsent = $pdo->prepare($sql_leer);
    $gsent->execute();
    $resultado = $gsent->fetchAll();

    //var_dump($resultado);

    //AGREGAR datos POST
    if($_POST){
        $color = $_POST['color'];
        $descripcion = $_POST['descripcion'];
        $sql_agregar = 'INSERT INTO colores(color, descripcion) VALUES (?,?)'; //con ?.? evitamos inyecciones en SQL
        $sentencia_agregar = $pdo->prepare($sql_agregar);
        $sentencia_agregar->execute(array($color,$descripcion)); //Creamos un array para decir que los '?,?' se reemplazarán con valores de color y descripcion
        header('location:Conexion_index1.php');
    }
    //ACTUALIZAR datos GET
    if($_GET){
        $id = $_GET['id'];
        $sql_unico = 'SELECT * FROM colores WHERE id=?' ;
        $gsent_unico = $pdo->prepare($sql_unico);
        $gsent_unico->execute(array($id));
        $resultado_unico = $gsent_unico->fetch(); //Traera la fila del id ingresado(unico)
        // para comprobar: var_dump($resultado_unico);

    }

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/4b9771cd8b.js" crossorigin="anonymous"></script> <!-- para los iconos -->
    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6"> <!-- Para leer -->
                <?php foreach($resultado as $dato): //':' quiere decir que la sentencia foreach seguira?>
                <div class="alert alert-<?php echo $dato['color']?> text-uppercase" role="alert">
                    <?php echo $dato['color']; //imprimimos cada fila segun en foreach?>
                    --
                    <?php echo $dato['descripcion']?>
                    <!-- Iconos -->
                    <a href="Eliminar_registro.php?id=<?php echo $dato['id']?>" class="float-right ml-3">
                        <i class="fa-solid fa-circle-trash"></i>
                    </a>
                    <a href="Conexion_index1.php?id=<?php echo $dato['id']?>" class="float-right"> <!-- aplicamos metodo GET -->
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                </div>
                <?php endforeach //cerramos la sentencia foreach?>
            </div>

            <div class="col-md-6"> <!-- Para agregar -->  
                <?php if(!$_GET): ?>
                <h2>Agrega elementos: </h2>
                <form method="POST"> 
                    <input type="text" class="form-control" name="color">
                    <input type="text" class="form-control mt-3" name="descripcion">
                    <button class="btn btn-primary mt-3">Agregar</button>
                </form>
                <?php endif ?>

                <?php if($_GET): ?> <!--Cuando el usuario quiera editar -->
                <h2>Editar elementos: </h2>
                <form method="GET" action="Editar(Actualizar registros MySQL).php"> <!-- con action todos los datos se mandarán al archivo editar.php -->
                    <input type="text" class="form-control" name="color" value="<?php echo $resultado_unico['color']?>">
                    <input type="text" class="form-control mt-3" name="descripcion" value="<?php echo $resultado_unico['descripcion']?>">
                    <input type="hidden" name="id" value="<?php echo $resultado_unico['id']?>">
                    <button class="btn btn-primary mt-3">Agregar</button>
                </form>
                <?php endif ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
  </body>
</html>

<?php
    //cerramos la conexion a la BD y sentencia
    $pdo = null;
    $gsent = null;

?>

