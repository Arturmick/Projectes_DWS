<html>
    <body>
        <p><b>Vector Asociativos</b></p>
        <p>Recorre vector con while-list(clave-valor):</p>
        
        <?php
        
        $alumnos["Luís"]="López";
        $alumnos["Ana"]="García";
        $alumnos["Daniel"]="Pérez";
        $alumnos["Héctor"]="Sánchez";
        $alumnos["Adrián"]="Sala";
        
        foreach ($alumnos as $nom=>$cognom){
            echo '<br>1-' . $nom . ' ' . $cognom;
        }
        ?>
    </body>
</html>