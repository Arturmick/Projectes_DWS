<?php
$filename= $_FILES['userfile']['name'];
$uploaddir= 'C:\\Projectes_DWS\\UPLOADS\\';
$nomFinalArchivo = "up_" . $_FILES['userfile']['name'];

$ninguno = $_FILES['userfile']['tmp_name'] == 'none';
$tamanyo = $_FILES['userfile']['size'] == 0;

$des = @opendir($uploaddir);

echo "<b>Comprueba si existe el directorio UPLOADS</b><br>";

if($des) {

    echo "El directorio existe: $uploaddir<br>";

    if($ninguno || $tamanyo) {
        echo "No se ha podido subir el archivo";
    }else {
        $res = move_uploaded_file($_FILES['userfile']['tmp_name'], $uploaddir.$filename);

        if($res) {
            $nomTempArchivo = "up_" . $_FILES['userfile']['tmp_name'];
            print "Carga realizada con éxito!<br>";
            echo '<br>';
            echo "Nombre temporal:<b> $nomTempArchivo</b><br>";
            echo "Nombre final:<b> $nomFinalArchivo<br></b>";
        }else {
            print "Error al subir el archivo<br>";
        }
    }
}else {
    echo "ERR: El directorio no existe<br>";
}

