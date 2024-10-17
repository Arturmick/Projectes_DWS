<?php
include "E2_libEuroDollar.php";
if (empty($_GET['cantidad'])){

    error_vacio();
}else if($_GET['cantidad'] < 0) {

   error_negativo();
}else if($_GET['conversor'] == 'euro'){

    $moneda = "Euros";
    $altraMoneda = "Dollars";
    $resultado = conv_USDtoEu($_GET['cantidad']);
    visualitza($_GET['cantidad'],$resultado,$moneda,$altraMoneda);
}else {

    $moneda = "Dollars";
    $altraMoneda = "Euros";
    $resultado = conv_EutoUSD($_GET['cantidad']);
    visualitza($_GET['cantidad'],$resultado,$moneda,$altraMoneda);
}
