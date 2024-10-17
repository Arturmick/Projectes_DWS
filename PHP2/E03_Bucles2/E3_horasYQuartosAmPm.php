<?php

    for($hora = 0;$hora <= 23; $hora++){

        for($minutos = 0; $minutos <= 59; $minutos += 15){
            
            if($hora == 0 && $minutos == 0) {
                echo '<b>' . "HORAS AM:" . '</b><br>';
            }elseif ($hora == 12 && $minutos == 0) {
                echo '<b>' . "HORAS PM:" . '</b><br>';
            }          
            echo sprintf("%02d",$hora) . ":" . sprintf("%02d",$minutos);
            echo "<br>";
        }

    }
?>