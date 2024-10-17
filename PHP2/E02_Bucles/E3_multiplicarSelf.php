<html>
<head>	
     <meta charset="utf-8" />
    <title>Tablas de multiplicar Autollamante</title>
</head>
<body>
    <h4>Tablas de multiplicar Autollamante</h4>
    
<?php
if (!$_GET) // si todavía no se han enviado datos a través del método Get
{   echo  '<table border = "1" width = "140" cellspacing = "1">';
    // la primera vez creamos la lista de enlaces
    for ($i=1;$i<=10;$i++)
    {
    echo '<tr><td>';
    echo "<a href='E3_multiplicarSelf.php?numero=$i'>Ver la tabla del $i</a>".'<br>';
    echo '</td></tr>';
    }
    echo  '</table>';
} 

else 
    { // el método Get ya lleva contenido
    $multiplicando=$_GET['numero'];
    ?>
    <!--<table  border=1 cellpadding="1"> -->
    <table  border=1 cellpadding="1"> 
   
    <tbody>
    <?php
    for ($multiplicador=0;$multiplicador<=10;$multiplicador++)
    {
    echo "<tr><td align=center width=80>".$multiplicando. " x ". $multiplicador."</td>";
    echo "<td width = 30 align=center>".$multiplicando* $multiplicador."</td></tr>";
    }
    ?>
    </tbody>
    </table>
    </table> 
<?php
    }

 
?>
</body>
</html>
