<?php
$cantidad = $_GET['cantidad'];

$dolar = $cantidad * 1.09;

echo "<p><h1>Conversión sin control de errores</h1></p>" .
        "<p><b>Realizamos la conversión a US Dolllars</b></p>" .
        "<p>Usted indicó la siguiente información:</p>" .
        "<p>Cantidad = $cantidad Euros</p>" .
        "<p>Resultado de la conversión = $dolar US Dollars</p>";