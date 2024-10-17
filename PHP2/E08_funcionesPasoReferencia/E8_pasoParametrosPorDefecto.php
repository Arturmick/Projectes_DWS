<?php

function porDefecto($param1="You",$param2= "my", $param3 = "Blue") {
    return $param1 . ' ' . $param2 . ' ' . $param3;
}
$argum1 = 'Hello';
$argum2 = 'World';
$argum3 = 'Moon';
echo "Invocamos con tres argumentos<br>";
echo porDefecto ($argum1,$argum2,$argum3); //'Hello World Moon'
echo '<br><br>Invocamos con dos argumentos<br>';
echo porDefecto ($argum1,$argum2); //'Hello world Blue'
echo '<br><br>Ahora invocamos con un solo argumento<br>';
echo porDefecto ($argum1); //'Helle my Blue'
echo '<br><br>Ahora sin argumentos<br>';
echo porDefecto(); //'You my Blue'
?>