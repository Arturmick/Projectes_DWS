<?php
function mediaValores(){
    $sumaArgumentos = 0;
           
    $numeroArgumentos = func_num_args();
            
    echo "<b>Función Media Valores</b><br>" . 
                    "==================================<br>" . 
                    "Número de argumentos utilizados: " . $numeroArgumentos . '<br>';
            
    echo "Valor de los argumentos utilizados:<br>";
            
    for ($i = 0; $i < $numeroArgumentos; $i++){
        echo "argumento " . $i+1 . " ==> valor: " . func_get_arg($i) . "<br>";
    $sumaArgumentos += func_get_arg($i);
    }           
            
    echo "<h2><b>La media de dichos argumentos es: " . $sumaArgumentos/$numeroArgumentos . '<br></b></h2>';
        
}

function mediaArray($a){
                
    $sumaArgumentos = 0;
           
    $numeroParametros = count($a);
            
    echo "<b>Función Media Array</b><br>" . "============================" .
        "<br>Número de elementos del array recibido: " . $numeroParametros . '<br>';
            
    echo "El contenido del array recibido es: <br>";
            
    print_r($a);
            
    for ($i = 0; $i < $numeroParametros; $i++){
                
                
        $sumaArgumentos += $a[$i];
    }           
            
    echo "<h2><b>La media de dichos argumentos es: "; 
    printf("%.2f",$sumaArgumentos/$numeroParametros);
    echo '<br></b></h2>';
}  

function mediaValoresRefer($a,&$b){
    echo '<b>Función Media ValoresRefer</b><br>';
    echo 'Número de argumentos utilizados: ' . func_num_args() . '<br><br>';
    echo 'Valor de los argumentos utilizados: <br>' . $a . ' y ' . $b . '<br>';
    echo 'No hace falta hacer Return<br>';
          
    $b = ($b+$a)/2;
    
    echo "<br><b>La media de dichos argumentos es:";
    printf("%.2f",$b);
}
