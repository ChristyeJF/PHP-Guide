<?php
    class miClase{
        public $resultado = 0;
        
        public function miMetodo($n1, $n2){
           $this -> resultado = $n1 + $n2;
           return $this -> resultado;
        }
    }

    //Instanciar o declarar un objeto
    $miObjeto = new miClase;

    echo $miObjeto -> miMetodo(3,5);

?>