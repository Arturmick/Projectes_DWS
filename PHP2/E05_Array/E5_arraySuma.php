<html>
    <body>
        <p><b>Declarar y recorrer vectores</b></p>
        <p>Declara array unidimensional</p>
        
        <?php $numeros = range(10, 50, 10);?>
        
        <p>Recorre array</p>
       
        <p>Número de elementos del array: <?php echo count($numeros)?></p>
               
        <?php 
           $param5 = 0;
           echo "Los elementos del array son: <br>";
            
           foreach($numeros as $num){
               echo $num;
               $param5 += $num;
               echo "<br>";
           }
           echo "<b>SUMA = " . $param5 . "</b>"?>
    </body>
</html>