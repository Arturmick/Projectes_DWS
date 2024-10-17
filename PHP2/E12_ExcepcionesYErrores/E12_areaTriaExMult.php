<?php

class E12_areaTriaExMult
{
    function areaTriangulo($base, $altura)
    {
        try {
            if ($base < 0){
                throw new Exception("LA BASE NO PUEDE SER NEGATIVA:" . $base . "<br>");
            }else if ($altura < 0) {
                throw new Exception("LA ALTURA NO PUEDE SER NEGATIVA: " . $altura . "<br>");
            }else if( $base > 2000 || $altura > 5000){
                throw new Exception("BASE O ALTURA HA EXCEDIDO EL MÁXIMO: " . $base . "<br>");
            }else {
                return "<b>ÁREA del TRIÁNGULO de base $base y $altura = " .
                    ($base*$altura)/2 . "</b><br>";
            }
        }catch (Exception $e){
             echo "<b>" . $e->getMessage() . "</b>";
        }
    }
}