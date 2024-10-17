<?php
function conv_USDtoEu ($a){
    return $a * 0.91;
}
function conv_EutoUSD ($a){
    return $a * 1.09;
}
function visualitza ($cant,$resultado, $moneda, $altraMoneda) {

    echo "<p><h1>Conversión Con control de errores</h1></p>" .
        "<p><b>Realizamos la conversión a $altraMoneda</b></p>" .
        "<p>Usted indicó la siguiente información:</p>" .
        "<p>Cantidad = " . $cant . " $moneda</p>" .
        "<p>Resultado de la conversión = " . $resultado . " $altraMoneda</p>";

}
function error_vacio()
{
    echo  "<p><h1>Error: No hay valor.</h1></p>";
}
function error_negativo()
{
    echo  "<p><h1>Opps...</h1></p>" .
        "<p><b>Error: " . $_GET['cantidad']  . " es Valor Negarivo</b></p>";
}