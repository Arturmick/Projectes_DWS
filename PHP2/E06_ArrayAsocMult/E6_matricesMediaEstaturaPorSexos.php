<html>
    <body>      
        <?php
        $personas = array(
            array(172,165,179,163,170,174),
            array('H','M','H','M','M','H')            
        );
        
        $hombres = 0;
        $mujeres = 0;       
        $acumulaHombres = 0;       
        $acumulaMujeres = 0;
        
        $filas = 2;
        $columnas = 6;
       
        for($i = 0;$i < $filas;$i++){ 
            for($j = 0; $j < $columnas; $j++){
                
                if($personas[1][$j] == 'H' && $i == 1){
                    $hombres++;
                    $acumulaHombres += $personas[0][$j];
                                        
                }else if($personas[1][$j] == 'M' && $i == 1){
                   
                    $mujeres++;
                    $acumulaMujeres += $personas[0][$j];
                }
            }           
        }        
        ?>
        <p>Número de Hombres de la muestra:</p>
        <?php echo $hombres ?>
        <p>Número de mujeres de la muestra:</p>
        <?php echo $mujeres ?>
        <p>La media de altura de los Hombres (en cm) es:</p>
        <?php echo $acumulaHombres/$hombres ?>
        <p>La meida de altura de las Mujeres (en cm) es:</p>
        <?php echo $acumulaMujeres/$mujeres ?>
    </body>
</html>