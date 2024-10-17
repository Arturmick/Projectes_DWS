<html>
    <body>
        <p><b>Visualizar array como tabla</b></p>

        <table border="1">
            <thead>
                <tr>
                    <th>Posición</th>
                    <th>Valor</th>
                </tr>
            </thead>
            <tbody>
                <?php 
           $numeros = range(100, 500, 100);
           $param5 = 0;
           

           foreach($numeros as $num){
               echo "<tr>
                        <td>" . array_search($num,$numeros) ."</td>
                        <td>" . $num ."</td>
                    </tr>";
               
               $param5 += $num;
              
           }
           echo "<tr>
                     <td>" . "<b>SUMA</b></td>
                     <td>" . $param5 ."</td>
                </tr>";
           ?>
            </tbody>
        </table>

    </body>
</html>