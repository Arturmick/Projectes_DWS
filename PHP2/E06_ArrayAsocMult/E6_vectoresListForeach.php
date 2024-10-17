<html>
    <body>
        <p><b>Vector asociativo-FOREACH()</b></p>
        <p>Visualizamos el vector craedo:<br></p>
        
        <?php
        $alumnos = array(
            "Luís" => "López",
            "Ana" => "García",
            "Daniel" => "Pérez",
            "Héctor" => "Sánchez",
            "Adrián" => "Sala"
        );
        foreach ($alumnos as $nom=>$cognom){
            echo $nom . ' => ' . $cognom . '<br>';
        }
        ?>
    </body>
</html>