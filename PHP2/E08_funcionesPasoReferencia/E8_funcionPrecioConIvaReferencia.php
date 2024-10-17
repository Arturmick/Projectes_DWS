<html>
    <body>
        <p><b>Programa Principal</b><br>
            El valor del IVA lo establecemos desde él.<br>
            El valore del IVA es: <b>0.21</b><br>
            Invocamos a la función</p>
        
        <?php  
        $iva = 0.21;
        $precio = 100;        
        
        function precioConIva($a,&$b){
           
            $b += ($b*$a);
        }
        ?>
        El precio INICIAL sin IVA es:<b><?php echo $precio ?></b><br>
        <?php precioConIva($iva,$precio);?>
        El precio con iva es: <b><?php echo $precio ?></b>
    </body>
</html>
