<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ver tabla</title>
</head>
<body>
<table align="left" border="1px" padding="1px">
    <?php
$num = $_GET['numero'];
echo "<h4>VER LA TABLA DEL $num.</h4>";
for ($i = 0; $i < 11; $i++){
    echo "<tr><td>$num X $i</td><td>" . $num*$i . "</td>";
}
?>
</table>
</body>
</html>
