<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="estilos.css">
	<style type="text/css">
  td {  border: 1px solid black; }
</style>
    <title>Carrito</title>
    <nav>
    <?php
    include('clases/basededatos.php');
		include('clases/carrito.php');
		include('contantes.php');
		include('botonera.php');
		//include('clases/producto.php');
		$base=new BasedeDatos(SERVIDOR,USUARIO,PASS,BASE);
		$prod=new Carrito($base);
		$mostrar_pro=$prod->listarproductoscarrito();
		?></nav>
</head>
<body>
<section>
		<h2>Compras</h2>
        <a href="unidad7.php"><button>Volver a los productos</button></a>
		<table>
		<tr class="titulos">
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
		<td>
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
		<td><a href="eliminarcarrito.php?id=<?php echo $mostrar_pro[$i]['codigo']?>"><button>Eliminar</button></a></td>
		</tr>
		
		<?php
		}?>
		</table>
	</section>
</body>
</html>