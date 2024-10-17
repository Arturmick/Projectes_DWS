<html>
    <body>
        <p>Contenido de la Matriz<br>====================</p>
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
        ?>
        
        <table border="1">
            <thead>
                <tr>            
                </tr>
            </thead>
            <tbody>
           
        <?php
    
        for($i = 0;$i < $filas;$i++){ 
           
            
            echo '<tr>';
            
            if($i==0){
                echo '<td>Altura</td>';
            }else{
                echo '<td>Sexo</td>';
            }
            for($j = 0; $j < $columnas; $j++){
                
                echo '<td>' . $personas[$i][$j] . '</td>';
                
                if($personas[1][$j] == 'H' && $i == 1){
                    $hombres++;
                    $acumulaHombres += $personas[0][$j];
                                        
                }else if($personas[1][$j] == 'M' && $i == 1){
                    $mujeres++;
                    $acumulaMujeres += $personas[0][$j];
                }
            }              
            echo '</tr>';            
        }
        ?>
                </tbody>
        </table>
        <p>Tabla Resultado<br>====================</p>
        <table border="1">
            <thead>
                <tr>
                    <th></th>
                    <th>Mujeres</th>
                    <th>Hombres</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><b>Número</b></td>
                    <td><?php echo $mujeres?></td>
                    <td><?php echo $hombres?></td>
                </tr>
                <tr>
                    <td><b>Suma Alturas</b></td>
                    <td><?php echo $acumulaMujeres?></td>
                    <td><?php echo $acumulaHombres?></td>
                </tr>
                <tr>
                    <td><b>Media Alturas</b></td>
                    <td><?php echo $acumulaMujeres/$mujeres?></td>
                    <td><?php echo $acumulaHombres/$hombres?></td>
                </tr>              
            </tbody>
        </table>

    </body>
</html>