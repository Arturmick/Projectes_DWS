<?php

echo "<p><b>Escritura en fichero en carpeta PETICIONES</b></p>";
const PRECIO_RUEDA = 4;
const PRECIO_FRENO = 100;
const PRECIO_ACEITE =10;
const IVA = 0.21;

$mensaje = '';
$total = 0;
$iva = 0;
$sumaPrecios = 0;

$archivo = "E5_peticiones/E5_petc4.txt";
$ficheroAbierto = fopen($archivo,"a+");


$fechaActual = date('D, d M Y H:i:s');
$linea = "\t\t" . $_POST['nombre'] . "\t" . $_POST['direccion'] .
    "\t" . $_POST['frenos'] . "\t" . $_POST['aceite'] . "\t" .
    $_POST['ruedas'] . "\n";
$entrada = $fechaActual . $linea;

$escribirFichero = fwrite($ficheroAbierto,$entrada);

if($ficheroAbierto){

    if($escribirFichero != false){

        echo "<p><i>Se ha escrito información en el fichero</i></p>";
    }else{

        echo "No se ha podido escribir la información";
    }
}else{

    echo "No se ha podido abrir el archivo";
}

if(isset($_POST['aceite']) || isset($_POST['ruedas']) || isset($_POST['frenos'])) {

    if (isset($_POST['aceite'])) {
        $mensaje .= 'aceite, ';
    }
    if (isset($_POST['ruedas'])) {
        $mensaje .= 'ruedas, ';
    }
    if (isset($_POST['frenos'])) {
        $mensaje .= 'frenos, ';
    }

    $mensaje = rtrim($mensaje, ', ');
    echo 'No comprados: ' . $mensaje;
    echo '<h1> La petición ha de contener todos los tipos de artículo!!</h1>';
    exit();
}else {
    echo '<h1>Se han comprado todos los artículos</h1>';

    $sumaPrecios = ($_POST['ruedas'] * PRECIO_RUEDA) + ($_POST['frenos'] * PRECIO_FRENO) + ($_POST['aceite'] * PRECIO_ACEITE);
    $iva = $sumaPrecios * IVA;
    $total = $sumaPrecios + $iva;
}

echo "<br>
<p>Su petición Sr. " . $_POST['nombre'] . " es la siguiente:</p>
<p>Frenos: " . $_POST['frenos'] . "</p>
<p>Aceite: " . $_POST['aceite'] . "</p>
<p>Ruedas: " . $_POST['ruedas'] . "</p>
<br>
<p><b>Número de elementos solicitados: " . ($_POST['frenos'] +  $_POST['aceite'] + $_POST['ruedas']) . "</p>
<p>Subtotal: " . number_format($sumaPrecios, 2) . " euros</p>
<p>Total con el IVA: " . number_format ($total, 2) . " euros</b></p>";

fclose($ficheroAbierto);
?>