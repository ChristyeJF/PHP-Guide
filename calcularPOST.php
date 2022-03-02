<?php
// = : asignar
// == : comparar
// === : tipo de dato
    if(!$_POST){ //Redicciona al html sino hay POST
        header('Location:MétodoPOST.html');
    }
    /*if(isset(!$_POST)){
        header('Location:MétodoPOST.html');
    }*/
    $producto = $_POST['producto']; //Se recibe los datos del HTML
    $precio = $_POST['precio'];
    $cantidad = $_POST['Cantidad'];
    $formadePago = $_POST['formadepago'];
    $subtotal = $precio * $cantidad;
    if($formadePago == 'Tarjeta'){
        $descuento = $subtotal * 0.2;
    }
    elseif ($formadePago == 'Cupon'){
        $descuento = $subtotal * 0.15;
    }
    else{
        $descuento = $subtotal * 0.1;
    }
    $total = $subtotal - $descuento;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boleta</title>
</head>
<body>
    <h1>Total a pagar: </h1>
    <p>Producto: <?php echo $producto; ?></p>
    <p>Precio: <?php echo $precio; ?></p>
    <p>Cantidad: <?php echo $cantidad; ?></p>
    <p>Forma de Pago: <?php echo $formadePago; ?></p>
    <p>Subtotal: <?php echo $subtotal; ?></p>
    <p>Descuento: <?php echo $descuento; ?></p>
    <p>Total: <?php echo $total; ?></p>
    
</body>
</html>