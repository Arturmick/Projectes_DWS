<?php

class E12_areaTrianguloArr
{
    function areaTriangulo($base, $altura)
    {
        try {

            for($i = 0; $i < count($base); $i++){
                if ($base[$i] < 0 || $altura[$i] < 0){
                    throw new Exception("Ha habido una excepción: Debes insertar un número positivo");
                }
                echo "El área del triángulo de base $base[$i] y altura $altura[$i] es: " . ($base[$i]*$altura[$i])/2 . "<br>";
            }

        }catch (Exception $e){
            echo "<b>" . $e->getMessage() . "</b>";
        }
    }
}