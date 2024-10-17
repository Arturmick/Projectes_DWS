<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Tiquet frutería</title>
    </head>
    <body>
        <?php
                define("PRECIO_JUDIAS", 3.50);
                define("PRECIO_PATATAS", 0.4);
                define("PRECIO_TOMATES", 1);
                define("PRECIO_MANZANAS", 1.2);
                define("PRECIO_UVAS", 2.5);
                
                $peso_judias = 1.21;
                $peso_patatas = 1.73;
                $peso_tomates = 2.08;
                $peso_manzanas = 2.15;
                $peso_uvas = 0.77;
                
                $coste_judias = PRECIO_JUDIAS * $peso_judias;
                $coste_patatas = PRECIO_PATATAS * $peso_patatas;
                $coste_tomates = PRECIO_TOMATES * $peso_tomates;
                $coste_manzanas = PRECIO_MANZANAS * $peso_manzanas;
                $coste_uvas = PRECIO_UVAS * $peso_uvas;       
        ?>
        <p><b>PRODUCTO - PRECIO Euros/KG - PESO - PRECIO concepto</b></p>
        <br>
        <p>JUDIAS ---------<?php echo PRECIO_JUDIAS?> --------- <?php echo $peso_judias?> --------- <?php echo number_format($coste_judias,2)?></p>
        <p>PATATAS -------<?php echo PRECIO_PATATAS?> --------- <?php echo $peso_patatas?> --------- <?php echo number_format($coste_patatas,2)?></p>
        <p>TOMATES ------<?php echo PRECIO_TOMATES?> ---------- <?php echo $peso_tomates?> --------- <?php echo number_format($coste_tomates,2)?></p>
        <p>MANZANAS --<?php echo PRECIO_MANZANAS?> --------- <?php echo $peso_manzanas?> --------- <?php echo number_format($coste_manzanas,2)?></p>
        <p>UVAS -----------<?php echo PRECIO_UVAS?> --------- <?php echo $peso_uvas?> --------- <?php echo number_format($coste_uvas,2)?></p>
        <br>
        <p><b>TOTAL: <?php echo number_format($coste_judias + $coste_manzanas + $coste_patatas + $coste_tomates + $coste_uvas,2)?> euros</b></p>
        <p> Gracias por su compra.</p>
    </body>
</html>