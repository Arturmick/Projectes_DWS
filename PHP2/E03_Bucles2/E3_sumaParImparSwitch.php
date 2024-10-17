<?php

    $sumaPares = 0;
    $sumaImpares = 0;
    
    echo "En el rango de 0 a 100:" . '<br>';
    
    for ($i = 0; $i <= 100; $i++){
        switch($i % 2) {
            case 0:
                $sumaPares += $i;break;
            case 1:
                $sumaImpares += $i; break;
            default:
                echo ("Ha habido un error");            
        }
    }
    echo "La suma de los " . '<b>' . "PARES " . '</b>' . "es: " . $sumaPares . '<br>';
    echo "La suma de los " . '<b>' . "IMPARES " . '</b>' . "es: " . $sumaImpares . '<br>';;
?>