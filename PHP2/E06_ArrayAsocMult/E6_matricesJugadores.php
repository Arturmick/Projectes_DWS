<html>
    <body>
        <p>Declarar vector bidimensional y recorrerlo:</p>
        <?php
        $numeros = array(
            array('Benzema','Mo Salah','Mbappé'),
            array('Messi','Lewandowski','De Bruyne'),
            array('Mendieta','Carboni','Cañizares')
        );
        $filas = 3;
        $columnas = 3;
        ?>
        
        <ul type="square">
            <?php
        for($i = 0;$i < $filas;$i++){
            
            for($j = 0; $j < $columnas; $j++){
                echo 'Fila ' . $i . '-Col ' . $j;
                echo '<li>' . $numeros[$i][$j] . '</li>';
            }           
        }
        ?>
            
        </ul>       
    </body>
</html>