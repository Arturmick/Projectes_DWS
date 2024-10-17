<?php

if (empty($_GET['cantidad'])){
    echo  "<p><h1>Error: No hay valor.</h1></p>";
}else if($_GET['cantidad'] < 0) {
    echo  "<p><h1>Opps...</h1></p>" .
        "<p><b>Error: " . $_GET['cantidad']  . " es Valor Negarivo</b></p>";
}else {
    echo "<p><h1>Conversión Con control de errores</h1></p>" .
        "<p><b>Realizamos la conversión a US Dolllars</b></p>" .
        "<p>Usted indicó la siguiente información:</p>" .
        "<p>Cantidad = " . $_GET['cantidad'] . " Euros</p>" .
        "<p>Resultado de la conversión = " . $_GET['cantidad'] * 1.09 . " US Dollars</p>";
}
