<html>
    <body>
        <p><b>Programa Primcipal</b><br>===============<br>
        El valor de los parámetros lo establecemos desde él.</p>
        
        <p>Invocamos a la función<br>=================</p>
        
        <?php  
        $param1 = 10;
        $param2 = 20;
        $param3 = 30;
        $param4 = 40;
        
        $param5 = 'churros con chocolate';
        $param6 = 0;
        
        function funcionMediaAritmetica($a,$b,$c,$d,&$e,&$f){
            
            echo '<b>Estamos en la Función Media Aritmética<br>==============</b><br>';
            echo 'Valor de los parámetros utilizados:<br>';
            echo '<ol>
                    <li>Parámetro 1 ==> ' . $a . '</li>
                    <li>Parámetro 2 ==> ' . $b . '</li>
                    <li>Parámetro 3 ==> ' . $c . '</li>
                    <li>Parámetro 4 ==> ' . $d . '</li>
                </ol>';
            
            $e = $a + $b + $c + $d;
            $f = $e / 4;
            
            echo 'Valor del parámetro SUMA = ' . $e;
            echo '<br>Valor del parámetro MEDIA = ' . $f;
        }        
        funcionMediaAritmetica($param1,$param2,$param3,$param4,$param5,$param6);?>   
        
        <p><b>Estamos de nuevo en el Programa Principal<br>================<br></b>
            La SUMA está en parámetro5 y es: <b><?php echo $param5?></b><br>
            La MEDIA está en parámetro6 y es: <b><?php echo $param6?></b></p>
        
    </body>
</html>