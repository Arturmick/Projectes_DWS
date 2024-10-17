<html>
    <body>
        <?php
        $alumnos = array(
            "Luís" => "López",
            "Ana" => "García",
            "Daniel" => "Pérez",
            "Héctor" => "Sánchez",
            "Adrián" => "Sala"
        );
        ?>
        <table border="1">
            <thead>
                <tr>
                    <th><b>Nombre</b></th>
                    <th><b>Apellidos</b></th>
                </tr>
            </thead>
            <tbody>
                
        <?php
        foreach ($alumnos as $nom=>$cognom){
            
            echo ' <tr>
                    <td>' . $nom . '</td>
                    <td>' . $cognom . '</td>
                </tr>';
        }
        ?>
            </tbody>
        </table>
    </body>
</html>