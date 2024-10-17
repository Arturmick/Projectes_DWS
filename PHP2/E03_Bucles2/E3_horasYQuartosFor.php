<?php

    for($hora = 0;$hora <= 23; $hora++){

        for($minutos = 0; $minutos <= 59; $minutos += 15){
            echo sprintf("%02d",$hora) . ":" . sprintf("%02d",$minutos);
            echo "<br>";
        }
    }
?>