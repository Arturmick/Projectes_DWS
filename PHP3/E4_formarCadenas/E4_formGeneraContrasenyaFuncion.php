<?php

echo "<body>
<form action='E4_GeneraContrasenyaFuncion.php'>
  <br>Long. de Básicos <input type='text' name='cantidadBasicos' value='' />
  <br>Long. de Especiales<input type='text' name='cantidadEspeciales' value='' />
  <br>Caracteres Básicos - Carácteres Especiales<input type='radio' name='tipo' value='basicos'' checked='checked' />
  <br>Carácteres Especiales - Caracteres Básicos<input type='radio' name='tipo' value='especiales'/>
  <br><input type='submit' value='Enviar consulta' />
</form>
</body>";