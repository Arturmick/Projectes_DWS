<html>
    <body>
        <p>Contenido del vector de cadenas con WHILE-END-PREV:</p>
        
        <?php
        
        $persones = array("Pepito","Juanito","Andresito","Felipito","Gerardito");
        $elemento = end($persones);
        
        ?>              
      
        <ul>
           <?php 
           while($elemento !== false){
               
               echo "<li>" . $elemento . "</li>";
               $elemento = prev($persones);
           }?>
        </ul>
    </body>
</html>