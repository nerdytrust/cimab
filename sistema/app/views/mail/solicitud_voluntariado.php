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
			<td style="background-color: #dc3771; color: #f0abc3; padding: 15px">Solicitud de Voluntariado</td>
		</tr>
		<tr>
			<td style="font-size: 13px;">
				<p>Se ha detectado una nueva solicitud para <strong style="color: #f0abc3;">Voluntariado / Servicio Social o Prácticas profesionales</strong>, y estos son los datos: </p>
				<p>Nombre completo: <strong><?php echo $fullname ?></strong></p>
				<p>Teléfono: <strong><?php echo $phone; ?></strong></p>
				<p>Email: <strong><?php echo $email; ?></strong></p>
				<p>Institución educativa de procedencia <strong><?php echo $school ?></strong></p>
				<p>Licenciatura: <strong><?php echo $degree; ?></strong></p>
				<p>Horario disponible: <strong><?php echo $timevolunteer; ?></strong></p>
				<p>Tipo de solicitud: <strong><?php echo $volunteer_type; ?></strong></p>
			</td>
		</tr>
	</table>
</body>
</html>