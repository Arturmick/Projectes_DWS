<html>
    <body>
        
        <?php
        $valor[0] = 10;
        $valor[1] = 20;
        $valor[2] = 30;
        $valor[3] = 40;
        $valor[4] = 50;
        $valor[5] = 60;
        $valor[6] = 70;
        $valor[7] = 80;
        $valor[8] = 90;
        $valor[9] = 100;  
        
        $valorAbreviado = array(10, 20, 30, 40, 50, 60, 70, 80, 90, 100);     
        ?>              
      
        <ul>
           <?php for($i = 0; $i <= 9; $i++){
               echo "<li>Elemento " . $i . " vale: " . $valor[$i] . "</li>";
           }?>
        </ul>
    </body>
</html>
