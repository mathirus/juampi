<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	
<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$asunto = "Has recibido una nueva consulta";
$contenido = "Has recibido la siguiente consulta de : ". $name . " dice: " . $message . " eL Mail de esta persona es : " . $email;





$enviarmail=mail('info@aso.com.ar',$subject,$contenido);




if($enviarmail==true){
echo "Gracias por su consulta ".$name." nos estaremos comunicando a la brevedad";}else{
 echo "Hubo un error"; };




?>

</body>
</html>
