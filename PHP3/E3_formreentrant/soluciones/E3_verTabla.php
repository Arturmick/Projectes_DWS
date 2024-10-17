<html>
<head>
    <title>VER LA TABLA</title>
     <meta charset="utf-8" />
</head>
<body>
    
    
   <table align=left border=1   cellpadding="1">
    <?php
    $num=$_GET["numero"];
    echo "<h4>VER LA TABLA DEL ".$num."</H4>";
    for ($multiplicador=0;$multiplicador<=10;$multiplicador++)
    {
     echo "<tr><td align='center'>".$num. " X ".$multiplicador."</td>";
     echo "<td align='center'>".$num*$multiplicador."</td></tr>";
    }
    ?>
  </table>
</body>
</html>