<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
		<h2>Ingreso</h2>
		<form action="ingresar.php" method="post">
		<h3>Llenar todos los campos para Ingresar</h3>
		<label for="email">Email:</label><br>
				<input type="email" name="email" ><br>
				<label for="email">Contraseña:</label><br>
				<input type="password" name="clave" ><br><br>
		<input type="submit" value="Ingresar"><br><br>  
		
		</form>
        <a href="unidad8.php"><button>Atras</button></a>
		<?php
		if(isset($_GET['error'])){
			echo "<h2>"."Ups!!!!!!!!No está registrado, presione el botón de atrás para registrarse"."</h2>";
		}
		if(isset($_GET['verificado'])){
			echo  "<h2>"."Ingreso satisfactorio. Gracias por preferirnos"."</h2>";
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