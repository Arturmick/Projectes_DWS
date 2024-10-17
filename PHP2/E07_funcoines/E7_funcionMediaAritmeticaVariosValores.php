<html>
    <body>
        <p><b>Estamos en el Programa Principal</b><br>
            El valor de los parámetros lo establecemos desde él.<br>
            Hacemos la llamada a la función...</p>
        
        <?php        
        function mediaDosValores(){
            
            $sumaArgumentos = 0;
           
            $numeroArgumentos = func_num_args();
            
            echo "<b>Función Media Aritmética</b><br>" . 
                    "Número de argumentos utilizados: " . $numeroArgumentos . '<br>';
            
            echo "Valor de los argumentos utilizados:<br>" . 
                    "==================================<br>";
            
            for ($i = 0; $i < $numeroArgumentos; $i++){
                echo "argumento " . $i+1 . " ==> valor: " . func_get_arg($i) . '<br>';
                $sumaArgumentos += func_get_arg($i);
            }           
            
            echo "<h2><b>La media de dichos argumentos es: " . $sumaArgumentos/$numeroArgumentos . '<br></b></h2>';
        }
        
        $mediaAritmetica = mediaDosValores(10,20,30,40,50);
        
        echo "Ahora estoy de vuelta en el Programa principal";        
        ?>        
       
    </body>
</html>
