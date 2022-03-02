<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        
        <title>Arreglos</title>
        
    </head>
    <body>
        <?php
            echo 'Arrays: '.'<br>';
            $frutas = array("uva", "fresa", "naranja");
            print_r($frutas);

            echo '</br>'.$frutas[1];

            echo '</br>'.count($frutas). ' elementos';
            echo '</br>'.'Con FOR: ';

            for ($i = 0; $i < count($frutas); $i++){
                echo '</br>'.$frutas[$i];
            }

    
            echo '</br>'.'Array con claves: '.'<br>';
            $edades = array("Cristian" => 17, "Maria" => 20, "Raul" => 5);
            print_r($edades);
            echo '</br>'.$edades['Maria'];

            foreach($edades as $key => $value){
                echo '</br>'.$key." tiene el valor de ".$value;
            }
        ?>
    </body>
</html>