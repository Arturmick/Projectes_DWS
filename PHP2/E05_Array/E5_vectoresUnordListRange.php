<html>
    <body>
        
        <?php
        
        $numeros = range(10, 100, 10);
        
        ?>              
      
        <ul>
           <?php for($i = 0; $i <= 9; $i++){
               echo "<li>Elemento " . $i . " vale: " . $numeros[$i] . "</li>";
           }?>
        </ul>
    </body>
</html>