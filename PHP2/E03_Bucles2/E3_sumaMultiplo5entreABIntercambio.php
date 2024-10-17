<?php

$a = 50;
$b = 5;
$error = false;

if ( $a < 0 && $b < 0){
    
    echo "<b>No podemos usar números negativos</b><br>";
    echo "Has puesto A y B negativos<br>";
    $error = true;
    
} elseif ($a < 0){
    
    echo "<b>No podemos usar números negativos</b><br>";
    echo "Has definido A negativo<br>";
    $error = true;
    
}elseif ($b < 0) {
    
    echo "<b>No podemos usar números negativos</b><br>";
    echo "Has definido B negativo<br>";
    $error = true;
    
} 

echo '<b>VALORES INTRODUCIDOS<br>';
    
echo "A: " . $a . '<br>';
echo "B: " . $b . '<br><br></b>';

if ($a >= $b){    
       
    echo "Hay que intercambiar A y B, pues no se cumple la condición<br>";
    
    $nuevoValor = $a;
    $a = $b;
    $b = $nuevoValor;
    
    echo "NUEVOS VALORES:<br>";
    echo "A= " . $a . "<br>B= " . $b . "<br><br>";    
    
} 

if (!$error) { 
    
    echo '<table border="1">';
    echo '<th><b>Listado de múltiplos</b></th>';
    echo '<th><b>Suma acumulada</b></th>';

    $contador = 5;
    $param5 = 0;
    $vueltas = 0;

    while ($a <= $b) {
     
        echo '<tr><td>' . $contador . '</td>';
        
        $param5 += $contador;
        
        echo '<td>' . $param5 . '</td></tr>';
        
        $contador += 5;
        $a += 5;
        $vueltas++;        
    }
    echo '<tr><td colspan="2"><b>Múltiplos generados: ' . $vueltas . '</b></td></tr>';
}
?>