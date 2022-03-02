<?php
    echo 'Indexados'.'</br>';
    $arrayi = array('elemento 1', 'elemento 2');
    foreach ($arrayi as $key => $value){
        echo 'indice: '.$key.' valor: '.$value.'</br>';
    }
    echo '<br>';
    for($i = 0; $i<count($arrayi); $i++){
        echo 'indice: '.$i.' valor: '.$arrayi[$i].'</br>';
    }
    echo '<br>'.'Asociativo: '.'</br>';
    $arraya = array('Pedro' => 'PER', 'Maria' => 'MX', 'Cristian' => 'COL');
    echo $arraya['Pedro'].'</br>';
    foreach ($arraya as $key => $value){
        echo 'indice: '.$key.' valor: '.$value.'</br>';
    }

?>