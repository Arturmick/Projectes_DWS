<html>
    <body>
        <p><b>Programa Principal</b><br>
            Creamos el vector de valores<br>
            Hacemos la llamada a la función con dicho vector</p>
        
        <?php        
        function media_array($array){
            
            $sumaArgumentos = 0;
           
            $numeroParametros = count($array);
            
            echo "<b>Función Media Aritmética con array</b><br>" . 
                    "Número de elementos del array recibido: " . $numeroParametros . '<br>';
            
            echo "El contenido del array recibido es: <br>";
            
            print_r($array);
            
            for ($i = 0; $i < $numeroParametros; $i++){
                
                
                $sumaArgumentos += $array[$i];
            }           
            
            echo "<h2><b>La media de dichos argumentos es: " . $sumaArgumentos/$numeroParametros . '<br></b></h2>';
        }
        $valoresArray = array(10,20,30);
        
        $mediaAritmetica = media_array($valoresArray);
        
        echo "Ahora estoy de vuelta en el Programa principal";        
        ?>        
       
    </body>
</html>