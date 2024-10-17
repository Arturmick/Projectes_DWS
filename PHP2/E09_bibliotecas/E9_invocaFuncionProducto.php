<html>
    <body>
        <p>Asignamos valores a las variables:</p>
        <?php 
        include ("E9_Funcionproducto.php");
        
        $multiplicando = 10;
        $multiplicador = 20;        
        ?>        
        <p>invocamos a la función</p>
        
        Se encuentra en el archivo: <b>funcionProducto.php</b><br>
        
        El resultado de 10 X 20 es <b><?php echo producto($multiplicando,$multiplicador); ?></b>
    </body>
</html>