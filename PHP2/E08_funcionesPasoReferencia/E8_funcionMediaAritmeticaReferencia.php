<html>
    <body>
        <p><b>Programa Principal</b><br>
            El valor del IVA lo establecemos desde él.<br>            
            Hacemos la llamada a la función.</p>
        
        <?php  
        $num1 = 10;
        $num2 = 30;        
        
        function mediaValoresRefer($a,&$b){
            
           echo '<b>Función Media Aritmética</b><br>';
           echo 'Número de argumentos utilizados: ' . func_num_args() . '<br><br>';
           echo 'Valor de los argumentos utilizados: <br>' . $a . ' y ' . $b . '<br>';
           echo 'No hace falta hacer Return<br>';
          
            $b = ($b+$a)/2;
        }
        mediaValoresRefer($num1,$num2);?>
        El resultado está en num2 y es: <b><?php echo $num2 ?></b>
    </body>
</html>