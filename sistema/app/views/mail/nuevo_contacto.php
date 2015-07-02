<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>
<body>
	<table align="center" border="0" cellpadding="0" cellspacing="0" style="color: #939598; font-family: Arial, Verdana; font-size: 16px;" width="700px">
		<tr>
			<td style="background-color: #dc3771; color: #f0abc3; padding: 15px">Formulario de contacto</td>
		</tr>
		<tr>
			<td style="font-size: 13px;">
				<p>Se ha recibido un nuevo registro del <strong style="color: #f0abc3;">Formulario de Contacto</strong>, y estos son los datos: </p>
				<p>Tipo de contacto: <strong><?php echo $contact_type; ?></strong></p>
				<p>Nombre: <strong><?php echo $name ?></strong></p>
				<p>Apellido: <strong><?php echo $lastname; ?></strong></p>
				<p>Teléfono: <strong><?php echo $phone; ?></strong></p>
				<p>Email: <strong><?php echo $email; ?></strong></p>
				<p>Estado: <strong><?php echo $state;  ?></strong></p>
				<p>Mensaje: <strong><?php echo $message;  ?></strong></p>
			</td>
		</tr>
	</table>
</body>
</html>