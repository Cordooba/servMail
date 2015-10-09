<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Servicio de Correo</title>
	<link rel="stylesheet" type="text/css" href="style/style.css" media="all" />
</head>
<body>
	<h1>Error</h1>
	<br>
	<p>Su mensaje no ha sido enviado con éxito.</p>
	<p><?php if ( isset($errores['emp'])) echo "Campos vacios."; ?></p>
	<p><?php if ( isset($errores['string'])) echo "Se ha introducido un carácter no valido."; ?></p>
	<br>
	<hr>
	<br>
	<a href="">Volver al formulario.</a>
</body>
</html>