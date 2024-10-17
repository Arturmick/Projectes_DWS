<html>
    <body>
        <p>Visualizamos con FOR anidado</p>
        <?php
        $numeros = array(
            array(10,20,30),
            array(40,50,60),
            array(70,80,90)
        );
        $filas = 3;
        $columnas = 3;
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
            for($j = 0; $j < $columnas; $j++){
                echo '<td>' . $numeros[$i][$j] . '</td>';
            }
            echo '</tr>';
            
        }
        ?>
             </tbody>
        </table>   
        
        <p>Visualizamos con WHILE</p>
        
        <?php
        $letras[0][0] = 'A';
        $letras[0][1] = 'B';
        $letras[0][2] = 'C';
        $letras[1][0] = 'D';
        $letras[1][1] = 'E';
        $letras[1][2] = 'F';
        ?>
        <table border="1">
            <thead>
                <tr>            
                </tr>
            </thead>
            <tbody>
                
        <?php
        $i=0;
        $j=0;
        
        while($i < count($letras)){
            
            echo '<tr>';
            echo '<td>' . $letras[$i][$j] . '</td>';           
            echo '<td>' . $letras[$i][$j+1] . '</td>';          
            echo '<td>' . $letras[$i][$j+2] . '</td>';
            echo '</tr>';            
          
            $i++;
        }  
        ?>
             </tbody>
        </table> 
    </body>
</html>