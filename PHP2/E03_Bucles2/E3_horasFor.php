<?php

  
    
    for($hora = 0;$hora <= 23; $hora++){
        
        if($hora == 1){
            echo "Fracciones de la 1:";
        }else {echo "Fracciones de las: " . $hora;}
        echo "<br>";
        
        for($minutos = 0; $minutos <= 59; $minutos += 5){
            echo sprintf("%02d",$hora) . ":" . sprintf("%02d",$minutos);
            echo "<br>";
        }
       
        echo "<br>";
    }
?>