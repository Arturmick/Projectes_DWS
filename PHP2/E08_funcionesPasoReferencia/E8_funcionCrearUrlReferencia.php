<html>
    <body>
        <p>Invocando a la función...</p>
        
        <?php  
        $nombreUsuario = 'http';
        $signoArroba = 'www';
        $nombreDominio = 'lagaceta';
        $tipoOrganizacion = 'com';
        $codigoPais = 'ar';
        $cadena = 'churros con chocolate';
        
        function funcionCreaUrl($a,$b,$c,$d,$e,&$f){
            
           $f = $a . '://' . $b . '.' . $c . '.' . $d . '.' . $e;
        }
        funcionCreaUrl($nombreUsuario,$signoArroba,$nombreDominio,$tipoOrganizacion,$codigoPais,$cadena);?>
        La URL completa es...<br> <b><?php echo $cadena ?></b>
    </body>
</html>