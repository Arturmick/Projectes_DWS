<?php

echo "Invocamos a la función mostrar_impares...<br>La cadena recibida como argumento era:<br>" . 
        "A quien madruga Dios le ayuda<br>";



$cadena = "A quien madruga Dios le ayuda";
mostrar_impares($cadena);

function mostrar_impares($cadena){
    
    echo "La cadena con los caracteres impares es: <br><b>";
    
    $array = strlen($cadena);
    
    for($i = 0; $i < $array; $i++){
        
        if($i%2 == 0){
            echo $cadena[$i];
        }
    }
}

echo "</b><p>Invocamos a la función muestra_palabras_impares...<br>La cadena recibida como argumento era:<br>" . 
        "A quien madruga Dios le ayuda<br>";

mostrar_palabras_impares($cadena);

function mostrar_palabras_impares($cadena){
    
    echo "La cadena con las palabras impares queda así: <br><b>";
    
    $array = strlen($cadena);
    $parImpar= 1;
    
    for($i = 0; $i < $array; $i++){
        
        if($cadena[$i] == ' '){            
            $parImpar++;            
            
        }
        if($parImpar%2 != 0){            
            echo $cadena[$i];
        }        
    }
}