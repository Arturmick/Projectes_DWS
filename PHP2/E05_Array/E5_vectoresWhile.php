<html>
    <body>
        <p>Contenido del vector de cadenas con WHILE-RESET-NEXT:</p>
        
        <?php
        
        $persones = array("Pepito","Juanito","Andresito","Felipito","Gerardito");
        $elemento = reset($persones);
        
        ?>              
      
        <ul>
           <?php 
           while($elemento !== false){
               
               echo "<li>" . $elemento . "</li>";
               $elemento = next($persones);
           }?>
        </ul>
    </body>
</html>