<html>
    <body>
        <?php  
        $head1 = 'Nombre';
        $head2 = 'Apellido';
        $head3 = 'Edad';
        $nombre = 'Paco';
        $apellido = 'Pérez';
        $edad = '23';        
        $info = array(array($head1,$head2,$head3),array(0,0,0));
        
        function fArrayBidimRef($a,$b,$c,&$d){  
            $d[1][0] = $a;
            $d[1][1] = $b;
            $d[1][2] = $c;
        }
        ?>         
        
        <p>Contenido inicial del array:<br></p>
                
        <table border="1">
            <thead>
                <tr>
                    <th><?php echo $info[0][0] ?></th>
                    <th><?php echo $info[0][1] ?></th>
                    <th><?php echo $info[0][2] ?></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $info[1][0] ?></td>
                    <td><?php echo $info[1][1] ?></td>
                    <td><?php echo $info[1][2] ?></td>
                </tr>                
            </tbody>
        </table>

        
        <p>Invocando a función...<br></p>
        
        <?php fArrayBidimRef($nombre,$apellido,$edad,$info);?> 
        
        <p>Contenido Matriz tras la ehecución de la función:<br>(Ahora tenemos una fila más)<br></p>
        
        <table border="1">
            <thead>
                <tr>
                    <th><?php echo $info[0][0] ?></th>
                    <th><?php echo $info[0][1] ?></th>
                    <th><?php echo $info[0][2] ?></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $info[1][0] ?></td>
                    <td><?php echo $info[1][1] ?></td>
                    <td><?php echo $info[1][2] ?></td>
                </tr>                
            </tbody>
        </table>
    </body>
</html>