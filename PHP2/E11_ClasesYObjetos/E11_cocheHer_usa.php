<?php
include ("E11_cocheHer.php");

$coche1 = new CocheHijo("Audi","Q5",140,37000,"Rojo", array("Descapotable","EngancheBola","Limusina"));

$coche2 = new CocheHijo("Audi","Q7",240,58000,"Azul", array("Extra1","Extra2","Extra3"));
?>

<html>
<table border="">
    <tr>
        <td><?php echo "Datos coche 1<br>====================<br>";
            echo $coche1;?></td>
        <td><?php echo "Datos coche 2<br>====================<br>";
            echo $coche2;?></td>
    </tr>
</table>
</html>