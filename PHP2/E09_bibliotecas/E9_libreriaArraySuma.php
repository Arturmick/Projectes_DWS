<?php
function arraySuma($a){
    echo"<html>
    <body>               
        Número de elementos del array:";
    
    echo count($a);
               
        
    $param5 = 0;
    echo "<br>Los elementos del array son: <br>";
            
    foreach($a as $num){
        echo $num;
        $param5 += $num;
        echo "<br>";
    }
    echo "<b>SUMA = " . $param5 . "</b>";
    echo "</body>
</html>";
}

function arraySumaTabla($a){
    echo "<html>
    <body>
        <p><b>Visualizar array como tabla</b></p>

        <table border='1'>
            <thead>
                <tr>
                    <th>Posición</th>
                    <th>Valor</th>
                </tr>
            </thead>
            <tbody>";                 
         
           $param5 = 0;           

           foreach($a as $num){
               echo "<tr>
                        <td>" . array_search($num,$a) ."</td>
                        <td>" . $num ."</td>
                    </tr>";
               
               $param5 += $num;
              
           }
           echo "<tr>
                     <td>" . "<b>SUMA</b></td>
                     <td>" . $param5 ."</td>
                </tr>";
           
            echo "</tbody>
        </table>

    </body>
</html>";
}
