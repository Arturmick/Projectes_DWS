<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
if(true){
    echo "<table align='left' border='1px' padding='1px'>";

    $numero = $_GET["numero"];
    echo "<h4>VER LA TABLA DEL $numero.</h4>";
    for ($i = 0; $i < 11; $i++){
        echo "<tr><td>$numero X $i</td><td>" . $numero*$i . "</td>";
    }

    echo "</table>";
}else {
    for($i = 0; $i < 11; $i++){
        echo "<a href='E3_multiplicarSelf.php?numero=$i'>Ver la tabla del $i</a>" . "<br>";
    }
}
?>
</body>
</html>

