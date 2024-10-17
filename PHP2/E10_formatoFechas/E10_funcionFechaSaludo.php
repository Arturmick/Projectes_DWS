<?php

echo "-----------------------------------------------<br>";
echo "Ahora son las: " . getdate()['hours'] . " horas y " . getdate()['minutes'] . "minutos.<br>";
echo "-----------------------------------------------<br>";

if(getdate()['hours'] < 12){
    echo "<b>Tenga Vd Buenos Días";
}else if (getdate()['hours'] < 21){
    echo "Buenas Tardes, Sr.Sra.";
}else {
    echo "A Dormir Bien, Caballero/Señora";
}
