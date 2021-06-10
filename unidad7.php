<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="estilos.css">
  <style type="text/css">
  td {  border: 1px solid black; }
</style>
</head>
 
<body>
 
<div class="container">
	<header>
		<h1>Programación en PHP y MySQL - Nivel Avanzado</h1>
	

	<nav>
		<?php include("botonera.php");
		include('clases/basededatos.php');
		include('clases/carrito.php');
		include('contantes.php');
		//include('clases/producto.php');
		$base=new BasedeDatos(SERVIDOR,USUARIO,PASS,BASE);
		$prod=new Carrito($base);
		$mostrar_pro=$prod->listarproductos();
		?>
	</nav>
	</header>
	<section >
		<h2>Compras</h2>
		<table >
		<tr >
		<td>Código</td>
		<td>Producto</td>
		<td>Descripción</td>
		<td>Precio</td>
		<td colspan="2">Administrador
				</td>
		</tr>
		<?php
		for ($i=0; $i <count($mostrar_pro); $i++) { 
			# code...
		
		?>
		<tr>
		<td >
		<?php echo $mostrar_pro[$i]['codigo'];?>
		</td>
		<td>
		<?php echo $mostrar_pro[$i]['producto'];?>
		</td>
		<td>
		<?php echo $mostrar_pro[$i]['descripcion'];?>
		</td>
		<td>
		<?php echo $mostrar_pro[$i]['precio'];?></td>
		<td><a href="agregarcarrito.php?id=<?php echo $mostrar_pro[$i]['codigo']; ?>"><button>Comprar</button></a></td>
		</tr>
		
		<?php
		}?>
		</table>
	</section>
	<aside>
    <a href="vercarrito.php"><button>Estado del carrito</button></a>
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>