<?php
    if(isset($_POST['enviar'])){
        if(empty($nombre)){  //Si la variable nombre esta vacía
            echo "<p class='error'>* Agrega tu nombre </p>";
        }
        else{
            if (strlen($nombre) > 15){ //strlen: cant. de caracteres
                echo "<p class='error'>* El nombre es muy largo </p>";
            }  
        }
        


        if(empty($edad)){  //Si la variable edad esta vacía
            echo "<p class='error'>* Agrega tu edad </p>";
        }
        else{
            if(!is_numeric($edad)){
                echo "<p class='error'>* La edad debe ser un número </p>";
            }
        }


        if(empty($correo)){  //Si la variable correo esta vacía
            echo "<p class='error'>* Agrega tu correo </p>";
        }
        else{
            if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
                echo "<p class='error'>* El correo es incorrecto </p>";
            }
        }
    }

?>