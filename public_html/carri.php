<!DOCTYPE html>
<html lang="es-ES">
<head>
	<meta charset="UTF-8">
	<title>Ejemplo de carrito</title>
</head>
<body>
	<div>
		<?php echo $sHTML; ?>
	</div>
	<ul>
		<li><a href="test.php?nombre=zapato&precio=32">Zapato</a></li>
		<li><a href="test.php?nombre=vino&precio=10">Vino.</a></li>
		<li><a href="test.php?nombre=curso&precio=30">Curso online</a></li>
		<li><a href="test.php?nombre=reloj&precio=400">Reloj</a></li>
		<li><a href="test.php?nombre=gafas&precio=20">Gafas</a></li>
		<li><a href="test.php?nombre=ordenador&precio=500">Ordenador</a></li>
		<li><a href="test.php?vaciar=1">vaciar carrito</a></li>
	</ul>	
</body>
</html>