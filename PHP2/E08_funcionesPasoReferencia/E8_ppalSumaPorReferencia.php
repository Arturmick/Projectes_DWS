<html>
    <body>
        <p>Asignamos valores a los dos valores</p>
        $a = 10<br>
        $b = 20<br>
        
        <?php  
        $a = 10;
        $b = 20;
        $param6 = 1000;
        
        function suma($a,$b,&$resultado){
           
            $resultado = $a + $b;
        }
        ?>
        Llamada a Funcion <b>Suma(a,b,resultado)</b><br>
        <?php suma($a,$b,$param6);?>
        El resultado se obtiene en el parámetro resultado, pasado por referencia<br>
        La suma de <?php echo $a ?> y <?php echo $b ?> es <?php echo $param6 ?>
    </body>
</html>
