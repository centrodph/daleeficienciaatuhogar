<?php

if($_SERVER['REQUEST_METHOD']=="POST"){
	
	
	require_once("classForms.php");
	$s= new Form();
	$nombre   =(string)strip_tags($_POST["nombre"]);
	$apellido =(string)strip_tags($_POST["apellido"]);
	$email    =(string)strip_tags($_POST["email"]);
	$mensaje =(string)strip_tags($_POST["mensaje"]);
	
	if(!$s->setNombre($nombre)){
		$msn.=$s->error."<br>";
	}
	elseif(!$s->setApellido($apellido)){
		$msn.=$s->error."<br>";
	}
	
	elseif(!$s->setEmail($email)){
		$msn.=$s->error."<br>";
	}
	elseif(!$s->setMesaje($mensaje)){
		$msn.=$s->error."<br>";
	}
	
	
	if($msn!=""){
		echo $msn;
	}
	else{
		sendMensaje($nombre,$apellido,$email,$mensaje);
		echo "Ok";
	}
	
	
	
}

?>
<?php 

function sendMensaje($nombre,$apellido,$email,$mensaje){
	
	$today = date("F j, Y, g:i a");
	require("php-mailer/class.phpmailer.php");
	$mail = new PHPMailer();
	$mail->Host = "localhost";
	$mail->From = $email;
	$mail->FromName = "Dale Eficiencia a tu hogar";
	$mail->Subject = "Consulta Dale Eficiencia a tu hogar : ".$today;
	$mail->AddAddress("info@daleeficienciaatuhogar.com.ar","Dale Eficiencia a tu hogar");
	
	$body  = "
<html>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=ISO-8859-1' />
<title>Documento sin título</title>
</head>
<body>
<table width='600' border='0' align='center' cellpadding='0' cellspacing='8' style='font-family:Verdana, Geneva, sans-serif; color:#333;'>
  <tr>
    <td height='55' colspan='2' align='center' bgcolor='#88d1ee'><h1 style='font-size:16px;'>Consulta desde la Web Dale Eficiencia a tu Hogar</h1></td>
  </tr>
  <tr>
    <td width='13%'><h5>Nombre:</h5></td>
    <td width='87%'><p>$nombre</p></td>
  </tr>
  <tr>
    <td><h5>Apellido:</h5></td>
    <td><p>$apellido</p></td>
  </tr>
  <tr>
    <td><h5>Email</h5></td>
    <td><p>$email</p></td>
  </tr>
  <tr>
    <td><h5>Mensaje</h5></td>
    <td><p>&nbsp;</p></td>
  </tr>
  <tr>
    <td colspan='2'><p>$mensaje</p></td>
  </tr>
</table>
</body>
</html>
";
	
	$mail->Body = $body;
	$mail->AltBody = "Consulta Dale Eficiencia a Tu Hogar : ".$today;
	$mail->Send();
	
}

?>