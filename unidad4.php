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
		<h2>Imágenes con PHP</h2>
		<?php
		$image="patriayvida.jpg";
		$marca="marca.png";
		$im=imagecreatefrompng($marca);
		$ext=substr($image,-3);
		$alto=imagesx($im);
		$ancho=imagesy($im);
		if(strtolower($ext) == "gif") {
			//si el archivo es gif creamos la imagen a proteger
			 if (!$im2 = imagecreatefromgif($image)) {
			echo "Error opening $image!"; exit;
			}
			}
			 else if(strtolower($ext) == "jpg") {
			//si el archivo es jpgcreamos la imagen a proteger
			if (!$im2 = imagecreatefromjpeg($image)) { echo "Error opening $image!";
				 exit;
			}
		} else if(strtolower($ext) == "png") {
				//si el archivo es png creamos la imagen a proteger
				if (!$im2 = imagecreatefrompng($image)) { echo "Error opening $image!"; exit;
				}
				} else {
				// si la imagen no se correspondió con las 3 opciones de formato, termina el
				// script
				die;
				}
				imagecopy($im2,$im,imagesx($im2)-$alto,imagesy($im2)-$ancho+50,0,0,$ancho,$alto);
				imagejpeg($im2,"marcaaa.jpg");
imagedestroy($im2);
?>
		<?php
$ruta="unidad4.jpg";
$base = imagecreatefromjpeg($ruta);
$anchoimg=imagesx($base);
$altoimg=imagesy($base);
$imagenNueva=imagecreate(150,150);
imagecopyresized($imagenNueva,$base,0,0,0,0,150,150,$anchoimg,$altoimg);
imagejpeg($imagenNueva,"copy_thum.jpg");
?>
<br>
<img src="copy_thum.jpg" alt="">
<img src="marcaaa.jpg" alt="">

	</section>
	<aside>
    
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>