<?php
    function saludo($nombre ){
        echo 'Hola '.$nombre;
    }

    saludo('cris');
    
    echo '</br>';

    function suma($n1, $n2){
        $sum = $n1 + $n2;
        return $sum;
    }

    $x = suma(4,3.51);
    echo $x;

?>