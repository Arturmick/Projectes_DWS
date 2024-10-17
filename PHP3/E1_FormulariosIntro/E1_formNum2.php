<?php
if(empty ($_GET['numero1'])||empty($_GET['mumero2'])) {
    echo 'Ambos campos están vacíos';
}else if(empty ($_GET['numero1'])){
    echo "El primer campo está vacío";
}else if(empty ($_GET['numero1'])){
    echo "El segundo campo está vacío";
}else {
    echo "<p><h1>Las operaciones aritméticas son:</h1></p>" .
        "<br>La suma vale: " . ($_GET['numero1'] + $_GET['numero2']) .
        "<br>La resta vale: " . ($_GET['numero1'] - $_GET['numero2']) .
        "<br>La multiplicación vale: " . ($_GET['numero1'] * $_GET['numero2']) .
        "<br>La división vale: " . round(($_GET['numero1'] / $_GET['numero2']),2) .
        "<br>El resto de la división vale: " . ($_GET['numero1'] % $_GET['numero2']) .
        "<p><h1>Las operaciones LÓGICAS son:</h1></p>" .
        "<br>AND de los números: " . ($_GET['numero1'] && $_GET['numero2']) .
        "<br>OR de los números: " . ($_GET['numero1'] || $_GET['numero2']) .
        "<p><h1>Las operaciones a nivel de BIT son: </h1></p>" .
        "<br>AND bit de los números: " . ($_GET['numero1'] & $_GET['numero2']) .
        "<br>OR bit de los números: " . ($_GET['numero1'] | $_GET['numero2']) .
        "<br>Desplazamiento del número: " . $_GET['numero1'] . "====>" . $_GET['numero2'] . " posiciones a la izqda: " . ($_GET['numero1'] << $_GET['numero2']) .
        "<br>Desplazamiento del número: " . $_GET['numero1'] . "====>" . $_GET['numero2'] . " posiciones a la drcha: " . ($_GET['numero1'] >> $_GET['numero2']);
}