<html>
    <body>
        <p>Invocando a la función...</p>
        
        <?php  
        $nombreUsuario = 'nombreApellido';
        $signoArroba = '@';
        $nombreDominio = 'gmail.com';
        
        $cadena = 'churros con chocolate';
        
        function funcionCreaEmail($a = 'alumno',$b = '@',$c = 'gmail.es'){
            
            
            if(func_num_args() != 3) {
                
                echo "Alguno de los parámetros saldrá por defecto al no haber sido introducido<br>";
                
            }else {
                
                echo 'Todos los valores introducidos<br>';
            }
            if($c != 'gmail.com' && $c != 'gmail.es'){
                $partes = explode('.' , $c);
                $d = 'Extensión incorrecta: <b>' . $partes[1] . '</b><br>';
                echo $d;
                }else {
                $d = $a . $b . $c;
                echo 'El EMAIL completo es...<br><br><b>' . $d . '</b>';
                }
        }
        funcionCreaEmail($nombreUsuario,$signoArroba,$nombreDominio);?>        
    </body>
</html>