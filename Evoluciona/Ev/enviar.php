<?php  

// Llamando a los campos
$nombre = $_POST['name'];
$correo = $_POST['email'];
$telefono= $_POST['phone'];
$mensaje = $_POST['message'];

if (filter_var($correo, FILTER_VALIDATE_EMAIL)) {
	// Datos para el correo
	$destinatario = "contacto@evoluciona.org";
	$asunto = "Mensaje desde tu sitio evoluciona";

	$carta = "De: $nombre \n";
	$carta .= "Correo: $correo \n";
	$carta.="Teléfono: $telefono";
	$carta .= "Mensaje: $mensaje";

	// Enviando Mensaje
	mail($destinatario, $asunto, $carta);
	//header('Location:mensaje-de-envio.html');
}

?>

