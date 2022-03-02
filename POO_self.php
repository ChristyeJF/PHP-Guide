<?php
    class Metodos{
        public function mandarColor($valor){
            if($valor==1){
                return 'rojo';
            }
            elseif($valor==2){
                return 'amarillo';
            }
            elseif($valor==3){
                return "azul";
            }
        }
        
        public function darDeAltaColor($tipocolor){
            return self::mandarColor($tipocolor);
            /*Equivalente a:  $obj = new Metodos();
            return $obj->mandarColor($tipocolor); */
        }
    }
    $obj = new Metodos();
    echo $obj->darDeAltaColor(1);


?>