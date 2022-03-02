<?php
    echo date('Y');
    function texto(){
        return  '<p>Un texto es una composición de signos codificados en un sistema de escritura que forma una unidad de sentido.
        También es una composición de caracteres imprimibles (con grafema) generados por un algoritmo de cifrado que, aunque no tienen sentido para cualquier persona, sí puede ser descifrado por su destinatario original.
        En otras palabras, un texto es un entramado de signos con una intención comunicativa que adquiere sentido en determinado contexto.</p>';
    }
    function promedio($a, $b){
        return ($a + $b)/2;
    }
    echo promedio(3, 4);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones</title>
</head>
<body>
    <section>
        <?php echo texto(); ?>
        <?php echo texto(); ?>
    </section>
    
</body>
</html>