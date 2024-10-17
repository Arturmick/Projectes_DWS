<?php
if(!empty ($_GET['nombre'])) {
    echo 'hola '.$_GET['nombre'];
}else {
    echo 'no hay nada que visualizar';
}