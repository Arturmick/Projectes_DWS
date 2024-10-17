<html>
    <body>
        <?php  
        $nombre = 'nombre';
        $apellido = 'apellido';
        $edad = '23';        
        $info = array(0,0,0);
        
        function fArrayRef($a,$b,$c,&$d){  
            $d[0] = $a;
            $d[1] = $b;
            $d[2] = $c;
        }
        ?>         
        
        <p>Contenido inicial del array:<br></p>
                
        <table border="1">
            <thead>
            </thead>
            <tbody>
                <tr>
                <?php                
                foreach($info as $dato){
                echo '<td>' . $dato . '</td>';                    
                }                
                ?>
                </tr>
            </tbody>
        </table>
        
        <p>Invocando a función...<br></p>
        
        <?php fArrayRef($nombre,$apellido,$edad,$info);?> 
        
        <p>Contenido tras la ehecución de la función:<br></p>
        
        <table border="1">
            <thead>
            </thead>
            <tbody>
                <tr>
                    <?php                
                foreach($info as $dato){
                echo '<td>' . $dato . '</td>';                    
                }                
                ?>
                </tr>
            </tbody>
        </table>
    </body>
</html>