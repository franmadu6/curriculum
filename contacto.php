<?php 
error_reporting(0); 
$nombre = $_POST['nombre']; 
$apellidos = $_POST['apellidos']; 
$mail= $_POST['email']; 
$asuntito= $_POST['asunto']; 
$menssage=$_POST['mensaje']; 
/*$header = 'From: ' . $mail . ", de la poblacion ".$poblacion."\r\n"; */
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n"; 
$header .= "Mime-Version: 1.0 \r\n"; 
$header .= "Content-Type: text/plain"; 

$mensaje = "Este mensaje fue enviado por " . $_POST['nombre'] . " \r\n"; 
$mensaje .= " Apellidos " . $_POST['apellidos'] . " \r\n"; 
$mensaje .= "Su e-mail es: " . $_POST['email'] . " \r\n";
$mensaje .= "asunto: " . $_POST['asunto'] . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n"; 
$mensaje .= "Enviado el " . date('d/m/Y', time()); 

$para = 'frandh1997@gmail.com'; 
$asunto = 'Correo Web'; 

mail($para, $asunto, utf8_decode($mensaje), $header); 

header('Location:index.html');

?>
----------------------------------------------
<?php 
error_reporting(0); 
$nombre = $_POST['nombre']; 
$mail= $_POST['email']; 
$procedencia=$_POST['procedencia']; 
$producto=$_POST['producto']; 
$cantidad=$_POST['cantidad']; 
/*$header = 'From: ' . $mail . ", de la poblacion ".$poblacion."\r\n"; */
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n"; 
$header .= "Mime-Version: 1.0 \r\n"; 
$header .= "Content-Type: text/plain"; 

$mensaje = "Este mensaje fue enviado por " . $_POST['nombre'] . " \r\n"; 
$mensaje .= "Su e-mail es: " . $_POST['email'] . " \r\n";
$mensaje .= "Procedencia: " . $_POST['procedencia'] . " \r\n"; 
$mensaje .="El producto que busca: ".$_POST['producto'] . " \r\n"; 
$mensaje .= "Cantidad: " . $_POST['cantidad'] . " \r\n"; 
$mensaje .= "Enviado el " . date('d/m/Y', time()); 

$para = 'frandh1997@gmail.com'; 
$asunto = 'Correo Web'; 

mail($para, $asunto, utf8_decode($mensaje), $header); 

header('Location:compra.html');

?>