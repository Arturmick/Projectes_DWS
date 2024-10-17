<html>
    <body>
        <p>Contenido del vector de cadenas con FOREACH:</p>
        
        <?php
        
        $persones = array("Pepito","Juanito","Andresito","Felipito","Gerardito");
               
        ?>              
      
        <ul>
           <?php 
           foreach($persones as $persona){
               echo "<li>" . $persona . "</li>";
           }?>
        </ul>
    </body>
</html>