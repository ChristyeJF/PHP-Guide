<?php
    class miClase{
        public $mensaje = 'hola!';
        public function hola(){
            return 'hola';
        }
        public static function metodo(){ //Estatico: no se puede utilizar atributos en estos metodos
            return self::hola();
        }
    }

    echo miClase::metodo(); //llamada
?>