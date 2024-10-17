<?php

class E12_areaTrianguloTrataEX
{
    public function __construct(){

    }

    function areaTriangulo($base, $altura){

        try {
            if ($base < 0 || $altura < 0){

                throw new Exception("NO SE ADMITEN NÚMERO NEGATIVOS");
            }else{
                return "<b>ÁREA del TRIÁNGULO de base $base y $altura = " .
                    ($base*$altura)/2 . "</b><br>";
            }
        }catch (Exception $noValido){
            echo "<b>Excepción capturada<br>";
            echo $noValido->getMessage() . "<br>";
        }
    }
}