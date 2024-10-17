<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Compra artículos</title>
       
    </head>
    <body>
        <?php
                const PRECIO_RUEDA = 4;
                const PRECIO_FRENO = 100;
                const PRECIO_ACEITE =10;
                const IVA = 0.21;
                $numFrenos = 2;
                $numRuedas = 3;
                $numAceite = 1;
                $mensaje = '';
                $total = 0;
                $iva = 0;
                $sumaPrecios = 0;
        ?>
        
        <p>Suponiendo que hemos comprado las siguientes unidades:</p><br>
        <p>numFrenos: <?php echo $numFrenos?></p>
        <p>numAceite: <?php echo $numAceite?></p>
        <p>numRuedas: <?php echo $numRuedas?></p>
        <br>
        <h3><b>PRECIOS DE LSO ARTÍCULOS</b></h3>
        <br>
        <p>PRECIO FRENOS = <?php echo PRECIO_FRENO?></p>
        <p>PRECIO ACEITE = <?php echo PRECIO_ACEITE?></p>
        <p>PRECIO RUEDAS = <?php echo PRECIO_RUEDA?></p>
        <br>
        
        <?php
        if($numAceite == 0 || $numFrenos == 0 || $numRuedas == 0) {
            
            if ($numAceite == 0) {
                $mensaje .= 'aceite, ';
            }
            if ($numRuedas == 0) {
                $mensaje .= 'ruedas, ';
            }
            if ($numFrenos == 0) {
                $mensaje .= 'frenos, ';
            }
                
            $mensaje = rtrim($mensaje, ', ');
            echo 'No comprados: ' . $mensaje;  
            echo '<h1> La petición ha de contener todos los tipos de artículo!!</h1>'; 
            exit();
        }else {
            echo '<h1>Se han comprado todos los artículos</h1>';
            
            $sumaPrecios = ($numRuedas * PRECIO_RUEDA) + ($numFrenos * PRECIO_FRENO) + ($numAceite * PRECIO_ACEITE);
            $iva = $sumaPrecios * IVA;
            $total = $sumaPrecios + $iva;
        }
        ?>
        <br>
        <p>Su petición es la siguiente:</p>
        <p>Frenos: <?php echo $numFrenos?></p>
        <p>Aceite: <?php echo $numAceite?></p>
        <p>Ruedas: <?php echo $numRuedas?></p>
        <br>
        <p><b>Número de elementos solicitados: <?php echo $numRuedas + $numFrenos + $numAceite?></p>
        <p>Subtotal: <?php echo number_format($sumaPrecios, 2)?> euros</p>
        <p>Total con el IVA: <?php echo number_format ($total, 2)?> euros</b></p>
            
    </body>
</html>