<body>
<?php
if(isset($_POST['enviado']))
    if(!empty($_POST['movida1'])&& !empty($_POST['movida2']) &&!empty($_POST['movida3'])){
        $name = $_POST['movida1'];
        echo "Soy tu padre $name";
        exit();
    }


?>
<form method="post" action="E3_self2.php">
    Nombre: <input type="text" name="movida1"><br>
    Empresa: <input type="text" name="movida2"><br>
    Teléfono: <input type="text" value="+34" name="movida3"><br>
    <button type="submit" value="enviar" name="enviado">Enviar</button>
</form>




</body>

