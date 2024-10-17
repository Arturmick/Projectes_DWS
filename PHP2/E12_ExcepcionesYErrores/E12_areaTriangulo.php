<?php
class E12_areaTriangulo {
    public function __construct(){

    }

    function areaTriangulo($base, $altura){

        if ($base < 0 || $altura < 0){
            throw new Exception("NO SE ADMITEN NÚMERO NEGATIVOS");
        }
        return ($base*$altura)/2;
    }
}