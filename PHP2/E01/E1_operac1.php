<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Operaciones aritmeticas</title>
       
    </head>
    <body>
        <?php
                $numero1 = 7;
                $numero2 = 4;
        ?>
        <h1>Operaciones aritméticas:</h1>
        <p>Vamos a realizar las operaciones con los dos números:</p><br>
        <p>La suma vale: <?php echo $numero1 + $numero2 ?></p>
        <p>La resta vale: <?php echo $numero1 - $numero2 ?></p>
        <p>La multiplicación vale: <?php echo $numero1 * $numero2 ?></p>
        <p>La división vale: <?php echo $numero1 / $numero2 ?></p>
        <p>El resto de la división vale: <?php echo $numero1 % $numero2 ?></p>
       
    </body>
</html>