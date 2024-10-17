<html>
<head>	
     <meta charset="utf-8" />
    <title>Tablas de multiplicar</title>
</head>
<body>
<?php

    // la primera vez creamos la lista de enlaces
    for ($i=1;$i<=10;$i++)
    {
        echo "<a href='E3_verTabla.php?numero=$i'>Ver la tabla del $i</a>".'<br>';
    }
 
 
?>
</body>
</html>
