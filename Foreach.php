<?php
    $meses = array('enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto'
                    , 'setiembre', 'octubre', 'noviembre', 'diciembre')
    //para el último valor unset en foreach
?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        
        <title>Meses del Año</title>
    </head>
    <body>
        <h1>Meses del Año: </h1>
        <ul>
            <li>
                <?php
                    foreach($meses as $key){
                        echo '<li>'.$key.'</li>';
                    }
                ?>
            </li>
        </ul>

    </body>
</html>
