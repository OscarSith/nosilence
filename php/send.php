<?php

$params = [
	'nombre' => FILTER_SANITIZE_STRING,
	'colegio' => FILTER_SANITIZE_STRING,
	'email' => FILTER_VALIDATE_EMAIL,
	'telefono' => FILTER_SANITIZE_STRING,
	'tipo' => FILTER_SANITIZE_STRING,
	'mensaje' => FILTER_SANITIZE_STRING
];

$values = filter_input_array(INPUT_POST, $params);

if (empty($values['nombre'])) {
	$json = ['load' => false, 'error_message' => 'Su nombre completo es requerido'];
}
else if (empty($values['colegio']))
{
	$json = ['load' => false, 'error_message' => 'Escribe el nombre de tu colegio'];
}
else if (!$values['email'])
{
	$json = ['load' => false, 'error_message' => 'Escriba su correo electrónico'];
}
else if (empty($values['tipo']))
{
	$json = ['load' => false, 'error_message' => 'Elija su tipo de evento'];
}
 else if (empty($values['mensaje']))
 {
 	$json = ['load' => false, 'error_message' => 'Escriba su mensaje'];
 }
 else
 {
	require '../mailer/PHPMailerAutoload.php';

	$mail = new PHPMailer(true);

	//$mail->SMTPDebug = 3;                               // Enable verbose debug output

	try {
		$mail->isSMTP();
		$mail->SMTPAuth = true;
		$mail->Host = 'smtp.mandrillapp.com';
		$mail->SMTPSecure = 'tls';
		$mail->Username = '';
		$mail->Password = '';
		$mail->Port = 587;
		$mail->CharSet = 'UTF-8';

		$mail->From = $values['email'];
		$mail->FromName = $values['nombre'];
		$mail->addAddress('diego@nosilenceperu.com', 'Nosilenceperu');
		$mail->addAddress('eventos@nosilenceperu.com', 'Nosilenceperu');
		$mail->addReplyTo('no-reply@nosilenceperu.com', 'Nosilenceperu');

		$mail->isHTML(true);

		$mail->Subject = 'Enviado desde la web de Nosilenceperu.com';
		$mail->Body    = nl2br('<br>Colegio: <b>'.$values['colegio'].'</b><br>Teléfono: </b>'.$values['telefono'].'<br>Tipo de evento: <b>'.$values['tipo'].'</b><br><br><hr>'.$values['mensaje']);
		$mail->AltBody = $values['mensaje'];

		if(!$mail->send()) {
			$json = ['load' => false, 'error_message' => 'El mensaje no pudo ser enviado, intentelo de nuevo, error: '.$mail->ErrorInfo];
		} else {
		    $json = ['load' => true, 'success_message' => 'Tu mensaje ha sido enviado'];
		}
	} catch (phpmailerException $pex) {
		$json = ['load' => false, 'error_message' => $pex->getMessage()];
	}
}

echo json_encode($json);