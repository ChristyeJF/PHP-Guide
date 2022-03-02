<?php
    class clase1{
        private function saludar(){ //privado: se puede acceder en la misma clase que fue creado
            return 'saludos!';
        }
        public function mandaSaludo(){
            return self::saludar(); //Dentro de otro metodo se podrá llamar al metodo privado y no simplemente instanciandolo
        } 
    }
    
    // no sé porque no funciona -> echo clase1::mandaSaludo();  su equivalente:
    $obj = new clase1();
    echo $obj->mandaSaludo();


?>