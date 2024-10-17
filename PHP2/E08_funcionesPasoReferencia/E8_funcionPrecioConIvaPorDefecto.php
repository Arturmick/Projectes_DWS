<html>
    <body>
        <p><b>Programa Primcipal</b><br>
        Invocamos a la función.</p>
        
        <?php  
        $argum1 = 100;
        
        function precioConIvaPorDefecto(&$a,$b=0.21){
                   
            $a += ($a*$b);    
        }     
        ?>
        <p>El precio INICIAL sin IVA es: <b><?php echo $argum1 ?></b></p>
        
        <?php precioConIvaPorDefecto($argum1);?>
        
        <p>El precio con iva es: <b><?php echo $argum1 ?></b></p>
    </body>
</html>