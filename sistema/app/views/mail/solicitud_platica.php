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
			<td style="background-color: #dc3771; color: #f0abc3; padding: 15px">Solicitud de Plática de Sensibilización</td>
		</tr>
		<tr>
			<td style="font-size: 13px;">
				<p>Se ha solicitado una <strong style="color: #f0abc3;">Plática de sensibilización</strong>, y estos son los datos: </p>
				<p>Nombre: <strong><?php echo $name ?></strong></p>
				<p>Apellido: <strong><?php echo $lastname; ?></strong></p>
				<p>Teléfono: <strong><?php echo $phone; ?></strong></p>
				<p>Email: <strong><?php echo $email; ?></strong></p>
				<p>Empresa o Institución <strong><?php echo $work ?></strong></p>
				<p>Fecha de la plática: <strong><?php echo $date_speak; ?></strong></p>
				<p>Hora de la plática: <strong><?php echo $time_speak; ?></strong></p>
				<p>Estado dónde se realizará la plática: <strong><?php echo ( $state == 1 ? 'Distrito Federeal y Área Metropolitana' : ( $state == 2 ? 'Nuevo León' : 'Otro Estado' ) );  ?></strong></p>
				<p>Dirección: <strong><?php echo $address; ?></strong></p>
				<p>Número de asistentes: <strong><?php echo $assistants; ?></strong></p>
				<p>Cuenta con los siguientes requerimientos tecnológicos: 
					<ul>
						<?php if ( ! empty( $requeriments ) ) : ?>
							<?php foreach ( json_decode( $requeriments ) as $requeriment ) : ?>
								<li><?php echo $requeriment; ?></li>
							<?php endforeach; ?>
						<?php else : ?>
							<li>No cuenta con los requerimientos</li>
						<?php endif; ?>
					</ul>
				</p>
			</td>
		</tr>
	</table>
</body>
</html>