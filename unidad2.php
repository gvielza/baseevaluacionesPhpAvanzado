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
		<h2>Eventos</h2>
		<form method="POST" action="unidad2.php">
		<p>Ingrese una fecha posterior a la fecha: 
		<?php
		echo $fecha=date("d/m/Y");
		?></p>
		<input type="text" style="width: 50px" placeholder="día" name="dia"/>
		-<input style="width: 50px" type="text" placeholder="mes" name="mes"/>-
		<input type="text"style="width: 50px" placeholder="año" name="anno"/>
		<input type="submit" value="Calcular">
		<?php
		date_default_timezone_set("America/Argentina/Buenos_Aires");
		//setlocale (LC_TIME, 'spanish');
		//setlocale (LC_TIME, 'es_ES.UTF8');
		setlocale(LC_TIME, 'spanish'); 
		
		if($_POST){
		$dia_ingresado=$_POST['dia'];
		$mes_ingresado=$_POST['mes'];
		$anno_ingresado=$_POST['anno'];
		$fecha_a=date("d-m-Y");
		$fecha_ingresada="$dia_ingresado-$mes_ingresado-$anno_ingresado";
		echo $fecha_a;
		if($fecha_ingresada<=$fecha_a){			
		echo "<h3>Ingrese por favor una fecha posterior al día :</h3>".date("d/m/Y");
			}
			else{
				$ahora=strtotime($fecha_a);					
				$fecha2=strtotime($fecha_ingresada);
			echo "<br>"."Para la fecha ingresada faltan ".intval(($fecha2-$ahora)/86400)." días.😊 ";
				}
		}
		?>
		
		</form>
	</section>
	<aside>
    
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>