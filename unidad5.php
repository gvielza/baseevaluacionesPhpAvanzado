<?php session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="estilos.css">
</head>
 <body>
 <main>
 <?php
 function contenido_captcha(){
	$cadena="1234567890abcdefghijkl%&$#/mnopqrstuvwxyz";
	$clave='';
	for ($i=0; $i <8 ; $i++) {
		$clave .= $cadena[rand(0,38)];
			}
			return $clave;
	
}
$_SESSION['captcha']=contenido_captcha();
?>
 <div class="container">
	<header>
		<h1>Programación en PHP y MySQL - Nivel Avanzado</h1>
	

	<nav>
		<?php include("botonera.php"); ?>
	</nav>
	</header>
	<section>
		<h2>Consultas</h2>
		<form action="cargar.php" method="POST"  encypt="multipart/form-data">
 <input type="text" name="nombre"   id="" placeholder="Nombre"><br><br>
 <input type="text" name="apellido" id="" placeholder="Apellido"><br><br>
<input type="email" name="email" id="" placeholder="Email"><br><br>
<input type="text" name="consulta" id="" placeholder="Consulta"><br><br>
<img src="captcha.php" alt=""><br>
<input type="text" name="codigo" placeholder="codigo"id=""><br>
<input type="submit" value="Enviar">

		</form>
		<div id="datos">
		<?php
	if(isset($_GET['ok'])){
			echo"<h3>Receta guardada</h3>";
					}
					if(isset($_GET['error'])){
						echo"<h3>Codigo incorrecto</h3>";
								}
		?>
		</div>

	</section>
	<aside>
    
  </aside>
  </main>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>