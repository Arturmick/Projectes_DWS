<?php
function vectoresUnordList($a){
    echo"<html>
    <body>       
        <ul>";
            $vueltas = count($a);
            for($i = 0; $i <= $vueltas-1; $i++){
               echo "<li>Elemento " . $i . " vale: " . $a[$i] . "</li>";
            }
        echo "</ul>
    </body>
    </html>";
}
function vectoresUnordListRange($a){
    echo"<html>
    <body><ul>";
    
    $vueltas = count($a);
    for($i = 0; $i <= $vueltas-1; $i++){
        echo "<li>Elemento " . $i . " vale: " . $a[$i] . "</li>";
    }
        echo "</ul>
    </body>
    </html>";
}

function vectoresWhile($a){
    echo "<html>
    <body>
        <p>Contenido del vector de cadenas con WHILE-RESET-NEXT:</p>";
    
        $elemento = reset($a);
        
        echo "<ul>";
           
           while($elemento !== false){
               
               echo "<li>" . $elemento . "</li>";
               $elemento = next($a);
           }
        echo "</ul>
    </body>
    </html>";
}

function vectoresInverso($a){
    echo "<html>
    <body>
        <p>Contenido del vector de cadenas con WHILE-END-PREV:</p>";
        
        $elemento = end($a);
        
        echo "<ul>";
     
           while($elemento !== false){
               
               echo "<li>" . $elemento . "</li>";
               $elemento = prev($a);
           }
        echo "</ul>
    </body>
    </html>";
}

function vectoresForeach($a){
    echo "<html>
    <body>
        <p>Contenido del vector de cadenas con FOREACH:</p>";
        
        echo "<ul>";
           
        foreach($a as $persona){
            echo "<li>" . $persona . "</li>";
        }
        echo "</ul>
    </body>
    </html>";
}