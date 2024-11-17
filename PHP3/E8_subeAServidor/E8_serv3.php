<?php
$filename= $_FILES['userfile']['name'];
$uploaddir= 'C:\\Projectes_DWS\\UPLOADS\\';
$nomFinalArchivo = "up_" . $_FILES['userfile']['name'];

$ninguno = $_FILES['userfile']['tmp_name'];
$tamanyo = $_FILES['userfile']['size'];

$des = @opendir($uploaddir);

echo "<b>Controla que el tamaño no supere las 100k</b><br>";

if($des) {

    echo "El directorio existe: $uploaddir<br>";

    if ($tamanyo > 102400) {
        echo "El archivo supera los 100k<br>";
        echo "Tamaño: " . number_format($tamanyo / 1024, 2) . " Kb<br>";
        $ninguno = 'none';
    }

    if($ninguno == 'none' || $tamanyo == 0) {
        echo "No se ha podido subir el archivo";
    }else {
        $res = move_uploaded_file($_FILES['userfile']['tmp_name'], $uploaddir.$filename);

        if($res) {
            $nomTempArchivo = "up_" . $_FILES['userfile']['tmp_name'];
            echo '<br>';
            print "¡Carga realizada con éxito!<br>";
            echo '<br>';
            echo "Nombre temporal:<b> $nomTempArchivo</b><br>";
            echo "Nombre final:<b> $nomFinalArchivo<br></b>";
            echo "Tamaño: <b>" . $_FILES['userfile']['size'] . " bytes</b><br>";
        }else {
            print "Error al subir el archivo<br>";
        }
    }
}else {
    echo "ERR: El directorio no existe<br>";
}