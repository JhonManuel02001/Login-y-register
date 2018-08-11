<?php include ('../../../views/front/templates/head.php');?>

<body>


<form class="form">

<h1>Registro</h1>

	<div><label>Nombre:</label><input type="text" name="Nombre" value=""></div>

	<div><label>Usuario:</label><input type="text" name="Usuario" value=""></div>

	<div><label>Contraseña:</label><input type="password" name="Contraseña" value=""></div>

	<div><label>Correo:</label><input type="text" name="Correo" value=""></div>

	<div>
		<label>Fecha de nacimiento:</label>
		<select>
			<option>2001</option>
			<option>1</option>
		</select>	
	</div>

	<div>
		<label>Tipo de documento:</label>
	<select>
		<option>Ti</option>
		<option>Cc</option>
	</select>
	</div>

	<div><label>Documento:</label><input type="text" name="Documento" value=""></div>

	<div>
		<label>Genero:</label>
		<select>
		<option>Msculino</option>
		<option>Femenino</option>
	    </select>
    </div>

	<div>
		<label>Pais:</label>
		<select>
		<option>Colombia</option>
		<option>""</option>
		</select>
	</div>

	<div>
		<label>Departamento:</label>
		<select>
			<option>colombia</option>
		</select>
	</div>

	<div>
		<label>Ciudad:</label>
		<select>
			<option>Bogota</option>
		</select>
	</div>

	<div>
		<label>Comuna:</label>
		<select>
			<option>colombia</option>
		</select>
	</div>

	<div>
		<label>Barrio:</label>
		<select>
			<option>colombia</option>
		</select>
	</div>

	<div><label>Dirección:</label><input type="text" name="Direcc" value=""></div>

	
</form>

<?php include ('../../../views/front/templates/foot.php');?>
