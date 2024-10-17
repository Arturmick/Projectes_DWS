<html>
    <body>
        <p>Vector asociativo con FOREACH</p>
        
        <?php
        
        $alumnos["nom5"]="cognom5";
        $alumnos["nom6"]="cognom6";
        $alumnos["nom7"]="cognom7";
        $alumnos["nom8"]="cognom8";
        $alumnos["nom9"]="cognom9";
        
        foreach ($alumnos as $nom=>$cognom){
            echo $nom . ' >>>>>> ' . $cognom . '<br>';
        }
        ?>
    </body>
</html>