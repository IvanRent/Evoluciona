<?php  

// Llamando a los campos
$correo = $_POST['correo'];

if (filter_var($correo, FILTER_VALIDATE_EMAIL)) {
   // Datos para el correo
	$destinatario = "contacto@evoluciona.org";
	$asunto = "UN nuevo suscriptor desde tu sitio evoluciona";

	$carta = "El usuario con el correo que se anexa al final de este mensaje, ha solicitado suscribirse.\n Te sugerimos lo agregues a tu lista de contactos, y tengas un grupo especifico de suscriptores, así todos podrán enterarse de la novedades que tienes para ellos.";
	$carta .= "Correo: $correo \n";

	// Enviando Mensaje
	mail($destinatario, $asunto, $carta);
	//header('Location:mensaje-de-envio.html');
}

?>
