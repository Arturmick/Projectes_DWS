<html>
    <body>
        <p>Asignamos valores a las variables:<br>$a = 10<br>$b = 20</p>
        
        <?php        
        $a = 10;        
        $b = 20;        
        ?>
        
        <p>A continuación hacemos la llamada a la función</p>
        
        <?php        
        suma($a,$b);
        
        function suma($a,$b){
            echo "La suma de " . $a . " y " . $b . " es " . $a+$b;
        }
        ?>      
    </body>
</html>