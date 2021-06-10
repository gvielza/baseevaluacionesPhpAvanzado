<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="estilos.css">
</head>
 
<body>
 
<div class="container">
	<header>
		<h1>Programación en PHP y MySQL - Nivel Avanzado</h1>
	

	<nav>
		<?php include("botonera.php"); ?>
	</nav>
	</header>
	<section>
		<h2>Comentarios</h2>
		<form method="POST" action="comentarios.php">
		<input type="text" name="nombreyapellido" placeholder="Nombre y Apellido"><br><br>
		<input type="email" name="email" placeholder="Email"><br><br>
		<textarea name="comentario" id="" cols="30" rows="5"></textarea><br><br>
		<input type="submit" value="Enviar">
	
		</form>
		<?php
		if(isset($_GET['ok'])){
			$archivo=fopen('comentarios.txt','r');
			fpassthru($archivo);
			fclose($archivo);
		}
		?>
	</section>

	<aside>
    
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
	
</div>

</body>
</html>