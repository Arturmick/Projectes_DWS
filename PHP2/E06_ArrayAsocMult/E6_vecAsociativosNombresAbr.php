<html>
    <body>
        <p>Vector asociativo con FOREACH</p>
        
        <?php
        $alumnos = array(
            "nom0" => "cognom0",
            "nom1" => "cognom1",
            "nom2" => "cognom2",
            "nom3" => "cognom3",
            "nom4" => "cognom4"
        );
        foreach ($alumnos as $nom=>$cognom){
            echo $nom . ' >>>>>> ' . $cognom . '<br>';
        }
        ?>
    </body>
</html>