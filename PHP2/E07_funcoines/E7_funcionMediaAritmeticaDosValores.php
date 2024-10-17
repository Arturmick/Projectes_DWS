<html>
    <body>
        <p><b>Programa Principal</b><br>
            El valor de los parámetros lo establecemos desde él.<br>
            Hacemos la llamada a la función.</p>
        
        <?php        
        function mediaDosValores($a,$b){
           
            $numeroArgumentos = func_num_args();
            
            echo "<b>Función Media Aritmética de Dos Valores</b><br>" . 
                    "Número de argumentos utilizados: " . $numeroArgumentos . '<br>';
            
            echo "Valor de los argumentos utilizados:<br>" . 
                    "==================================<br>";
            
            echo "argumento 1: " . func_get_arg(0) . '<br>' . 
                    "argumento 2: " . func_get_arg(1) . '<br>';
            
            return $a+$b/$numeroArgumentos;
        }
        
        $mediaAritmetica = mediaDosValores(10,20);
        
        echo "ahora estoy en el principal";        
        ?>
        
        <h2><b>La media de dichos argumentos es: <?php echo $mediaAritmetica?></b></h2>
    </body>
</html>
