<form action="<?php bloginfo( 'url' ); ?>/sistema/voluntarios" id="form_nuevo_voluntario" class="form-horizontal" role="form" method="post" autocomplete="off">
	<div class="col-md-12 text-center">
		<div class="radio-inline">
			<label>
				<input name="volunteer_type" value="voluntario" type="radio">
				Contacto para voluntariado
			</label>
		</div>
		<div class="radio-inline">
			<label>
				<input name="volunteer_type" value="serviciosocial-practicasprofesionales" type="radio">
				Contacto por servicio social o prácticas profesionales
			</label>
		</div>
	</div>
	<div class="spacing-down-sm"></div>
	<div class="col-md-6">
		<div class="form-group">
			<label class="col-md-4" for="fullname"><em class="required_field">*</em> Nombre Completo</label>
			<div class="col-md-8">
				<input type="text" name="fullname" class="form-control" placeholder="Nombre Completo">
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-4" for="phone"><em class="required_field">*</em> Teléfono</label>
			<div class="col-md-8">
				<input type="text" name="phone" class="form-control" placeholder="Teléfono">
			</div>
		</div>
		<div class="form-group">
			<label for="email" class="col-md-4"><em class="required_field">*</em> Email</label>
			<div class="col-md-8">
				<input type="text" name="email" class="form-control" placeholder="Email">
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
			<label class="col-md-4" for="school"><em class="required_field">*</em> Institución educativa de procedencia</label>
			<div class="col-md-8">
				<input type="text" name="school" class="form-control" placeholder="Institución educativa de procedencia">
			</div>
		</div>
		<div class="form-group">
			<label for="degree" class="col-md-4"><em class="required_field">*</em> Licenciatura</label>
			<div class="col-md-8">
				<input type="text" name="degree" class="form-control" placeholder="Licenciatura">
			</div>
		</div>
		<div class="form-group">
			<label for="timevolunteer" class="col-md-4"><em class="required_field">*</em> Horario disponible</label>
			<div class="col-md-8">
				<input type="time" name="timevolunteer" placeholder="Horario disponible" class="form-control">
			</div>
		</div>
	</div>
	<div class="form-group">
		<label for="" class="col-md-4"></label>
		<div class="col-md-8">
			<em class="required_field">* Datos requeridos para el envío de la solicitud</em>
		</div>
	</div>
	<div class="spacing-down-sm"></div>
	<button type="submit" class="btn btn-pink btn-lg pull-right">Enviar <i class="fa fa-angle-double-right"></i></button>
	<div class="spacing-down-sm"></div>
</form>