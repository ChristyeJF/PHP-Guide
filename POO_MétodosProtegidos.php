<?php
    
    class padre{ //Protegidos: solo se prodrán acceder a él desde la herencia de clases o clases hijas
        protected function metodo1(){
            return 'metodo protegido';
        }
    }
    class hijo extends padre{
        public function muestra(){
            return parent::metodo1();
        }
    }
    $obj = new hijo();
    echo $obj->muestra()

?>