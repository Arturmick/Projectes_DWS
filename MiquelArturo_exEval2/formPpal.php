<form action="ppal.php" method="post">
	<table border = "1" width="30%">
		<thead>
		<tr>
			<th>Usuario</th>
			<th>Contraseña</th>
			<th>Tipo User</th>
		</tr>
		</thead>
		<tbody>
		<tr>
			<td align="center">Seleccione User<select name="usuarios" required>
					<option value="user1">user1</option>
					<option value="user2">user2</option>
					<option value="user3">user3</option>
				</select></td>
			<td align="center">Seleccione Pass<select name="contrasenya" required>
					<option value="pass1">pass1</option>
					<option value="pass2">pass2</option>
					<option value="pass3">pass3</option>
				</select></td>
			<td align="center">Seleccione Tipo<select name="tipo" required>
					<option value="tipo1">tipo1</option>
					<option value="tipo2">tipo2</option>
					<option value="tipo3">tipo3</option>
				</select></td>
		</tr>
		<tr >
			<td align="center" colspan="3"><input type="submit" value="Enviar"></td>
		</tr>
		</tbody>
	</table>
</form>
<?php


