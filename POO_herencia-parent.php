<?php
    //Herencia: las propiedades de una clase a otro con extends
    class clasePadre(){
        public function metodoPadre(){
            return 'Hola, padre';
        }
        public function metodo1(){
            return 'clase padre - metodo1';
        }

    }

    class claseHijo extends clasePadre(){
        public function metodoHijo(){
            // return self::metodoPadre(); //Self: llama al metodo dentro de la clase(si el metodo se repite) y Parent: llama al metodo de la clase que heredo
            return parent::metodo1();
        }
        public function metodo1(){
            return 'clase hijo - metodo1';
        }
        

    }
    $obj = new claseHijo();
    echo $obj->metodoPadre();
    //Es equivalente a: 
    echo claseHijo::metodoHijo();

?>