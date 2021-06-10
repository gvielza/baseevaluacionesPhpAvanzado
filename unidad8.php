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
		<h2>Registro</h2>
		<form action="registrar.php" method="post">
		<h3>Llenar todos los campos para registrar</h3>
		<label for="nombre">Nombre:</label><br>
		<input type="text" name="nombre" ><br>
		<label for="username">Apellido:</label><br>
		<input type="text" name="apellido" ><br>
		<label for="email">Email:</label><br>
		<input type="email" name="email" ><br>
		<label for="pass">Contraseña:</label><br>
		<input type="password" name="clave" id="pwd" required><br><br>
		
		<input type="submit" value="Registrar"><br><br>
				</form>
		<a href="unidad8_2.php"><button>Ingresar</button></a>
		<?php if(isset($_GET['ok'])){
			echo "<h2>"."Registro satisfactorio. Le enviamos un email con sus datos"."</h2>";
		}
		if(isset($_GET['error'])){
			echo "<h2>"."Problemas al enviar el email. Reintente más tarde"."</h2>";
		}
		if(isset($_GET['vacio'])){
			echo "<h2>"."LLene todos los campos por favor para poder registrarse "."</h2>";
		}?>
		</section>
	<aside>
    
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>