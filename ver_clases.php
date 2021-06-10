

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
		
		<?php
		include("conexion.php");
		$consultar=mysqli_query($conexion_bd, "SELECT * FROM clases");
		while($clase=mysqli_fetch_assoc($consultar)){
		?>
		<div class="agenda">
		
		<div class="ids" >
		<h2>
		<?php
		echo $clase['id_clase']." ".$clase['unidad']." ".$clase['fecha'];
		?>
		</h2>
		</div>
		</div>
<?php
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
