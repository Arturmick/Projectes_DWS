<html>
<head>
<title>Me llamo a mi mismo...</title>
</head>

<body>
<?php
 //if (!$_POST){ // es decir, si no enviamos nada desde el formulario
    if (empty($_POST['nombre'])  
            || empty($_POST['empresa']) ||
            empty($_POST['telefono']))
    {
       // nota: el teléfono no será necesario, pues le doy valor por defecto
?>
    <form action="E3_self2.php" method="POST"> 
        Nombre: <input type="text" name="nombre" size="30"><br>
        Empresa: <input type="text" name="empresa" size="30"><br>
        Telefono: <input type="text" name="telefono" size="14" value="+34"><br>
        <input type="submit" value="Enviar">
    </form>
<?php
    }else
    {
        echo "<br>Su nombre: ". $_POST["nombre"]; 
        echo "<br>Su empresa: ".$_POST["empresa"];
        echo "<br>Su Teléfono: ".$_POST["telefono"];
    }
?>
</body>
</html>
