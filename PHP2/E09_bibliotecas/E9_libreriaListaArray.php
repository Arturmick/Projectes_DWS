<?php 
function listarVectorTabla($a){
    echo "<html>
    <body>
        <p><b>Visualizar en forma de tabla</b></p>

        <table border='1'>
            <thead>
                <tr>
                    <th>Elemento</th>
                    <th>Valor</th>
                </tr>
            </thead>
            <tbody>";
             
           foreach($a as $num){
               echo "<tr>
                        <td>" . array_search($num,$a) ."</td>
                        <td>" . $num ."</td>
                    </tr>";            
                             
           }                   
            echo "</tbody>
        </table>
    </body>
</html>";
}

function listarVectorNoOrdenada($b){
    
    echo "<b>En forma de lista no ordenada</b><br><ul>";
           for($i = 0; $i <= (count($b))-1; $i++){
               echo "<li>" . $b[$i] . "</li>";
           }
    echo "</ul>";
}