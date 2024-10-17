<html>
    <body>
        <p>Array Datos Alumno</p>
        
        <?php include ("E5_datPersonales.php");?>
        
        <p><b>Los datos del array son:</b></p>
        
        <?php $arrayDatosPersonales = array($nombre1, $apellidos1, $edad1, $movil1, $nombre2, $apellidos2, $edad2, $movil2);
        
        $numero = count($arrayDatosPersonales);
        for($i = 0; $i < $numero; $i++){
            echo $arrayDatosPersonales[$i] . "<br>";
        }
        ?>
    </body>
</html>
    
