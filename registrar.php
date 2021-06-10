<?php
require("includes/Exception.php");
require("includes/PHPMailer.php");
require("includes/SMTP.php");
$bd=mysqli_connect("localhost", "root", "", "agenda_clases") or die ("Error al conectar con la base de datos");
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$email=$_POST['email'];
$password=password_hash($_POST['clave'], PASSWORD_DEFAULT, array('cost'=>4));	
        try {
            $mail = new PHPMailer\PHPMailer\PHPMailer();
          
            $mail->SMTPDebug = "0";                     
            $mail->isSMTP();                                            
            $mail->Host       = 'smtp.gmail.com';                    
            $mail->SMTPAuth   = true;                                   
            $mail->Username   = 'gvielzaduran@gmail.com';                     
            $mail->Password   = 'gvielzaduran#2021';                              
            $mail->SMTPSecure = "tls";         
            $mail->Port       = 587;                                    
        
            $mail->setFrom('gvielzaduran@gmail.com','Gionnelly Vielza');
            $mail->addAddress($email, 'Joe User');     
        
        
            $mail->isHTML(true);                                 
            $mail->Subject = 'Datos de su nueva cuenta';
            $mail->Body    = 'Su nuevo usuario es su correo: <b>'.$email.'</b> y su contraseña es: <b>'.$_POST['clave'].'</b>';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        
           $exito= $mail->send();
            
        }
        catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
mysqli_query($bd, "INSERT INTO usuarios_sitio VALUES ('$nombre', '$apellido', '$email', '$password')");
if($exito){
    header("Location: unidad8.php?ok");
}else{
    header("Location: unidad8.php?error");
}
if($nombre==null||$apellido==null||$email==null||$password==null){
    header("Location: unidad8.php?vacio");
}


?>