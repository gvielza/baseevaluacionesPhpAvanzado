<?php
		$archivo=fopen('comentarios.txt','a+');
        $nombreyA=$_POST['nombreyapellido'];
        $email=$_POST['email'];
		$comentario=$_POST['comentario'];
        $fecha_a=date("Y-m-d-s");
		$texto="<br>".$nombreyA." ".$email." ".$fecha_a."<br>"."<h3>".$comentario."</h3>";
        fputs($archivo,$texto);
		fclose($archivo);
        header("Location:unidad3.php?ok");
		?>