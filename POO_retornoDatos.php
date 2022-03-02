<?php
    class retornoDatos{
        //string
        public function retornoString($edad){
            if($edad > 18){
                return 'Mayor de edad';
            }
            else{
                return 'No eres mayor de edad';
            }
        }


        //entero
        public function retornoEntero($valor){
            if($valor > 33){
                return 1;
            }
            else{
                return 3.2;
            }
        }


        //arreglo
        public function retornoArreglo($cantidad){
            $datos = array();
            for($i = 0; $i < $cantidad; $i++){
                $datos[$i] = $i;
            }

            return $datos;
        }

        //json
        public function retornoJson(){
            $arreglo = array(31 => 'Juan', 13 => 'Maria', 41 => 'Cristian', 76 => 'Miguel');
            return json_encode($arreglo);
        }

        
    }

    $cadena = new retornoDatos();
    
    var_dump($cadena -> retornoString(23)); //var_dump: imprime el tamaño del string y tambien el tipo de dato
    echo '<br>'.$cadena -> retornoEntero(30);
    echo '<br>';
    var_dump($cadena -> retornoArreglo(10));
    echo '<br>';
    var_dump($cadena -> retornoJson());
 



?>