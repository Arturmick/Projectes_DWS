<html>
    <body>
        <p>Array Datos Alumno</p>
        
        <?php include ("E5_datPersonales.php");?>
        
        <p><b>Los datos del array son:</b></p>
        
        <?php $arrayDatosPersonales = array($nombre1, $apellidos1, $edad1, $movil1, $nombre2, $apellidos2, $edad2, $movil2);
        $arrayCabecera = array("Nombre", "Apellidos", "Edad", "Teléfono");
        
        $numero = count($arrayDatosPersonales);
        
        ?>
        <table border="1">
            <thead>
                <tr>
                    <th colspan = '2'><b>Datos Personales</b></th>
                </tr>
            </thead>
            <tbody>
                <?php
                for($i = 0; $i < $numero; $i++){
                    
                    $j = $i % 4;
                    
                    echo "<tr>
                            <td><b>" . $arrayCabecera[$j] . "</b></td>
                            <td>" . $arrayDatosPersonales[$i] . "</td>
                        </tr>";
                }
                ?>
                
            </tbody>
        </table>

    </body>
</html>