<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Servicio de Correo</title>
	<link rel="stylesheet" type="text/css" href="style/style.css" media="all" />
</head>
<body>
	<h1>Rellena el formulario</h1>
	<form action="" method="POST">
	<label for="name">Nombre:
		<input type="text" name="name" required>
	</label>
	<br>
	<br>
	<label for="subname">Apellidos:
		<input type="text" name="subname" required>
	</label>
	<br>
	<br>
	<label for="mail">E-mail:
		<input type="email" name="mail" required>
	</label>
	<br>
	<br>
	<label for="message">Mensaje:
		<textarea name="message" rows="4" cols="50"></textarea>
	</label>
	<br>
	<br>
	<hr>
		<input type="submit" value="Enviar">
	</form>
	<br>
	<br>
</body>
</html>