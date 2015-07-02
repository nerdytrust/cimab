<form action="<?php bloginfo( 'url' ); ?>/sistema/platicas" id="form_nueva_platica" class="form-horizontal" role="form" method="post" autocomplete="off">
	<div class="col-md-6">
		<div class="form-group">
			<label class="col-md-4" for="name"><em class="required_field">*</em> Nombre</label>
			<div class="col-md-8">
				<input type="text" name="name" class="form-control" placeholder="Nombre">
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-4" for="lastname"><em class="required_field">*</em> Apellido</label>
			<div class="col-md-8">
				<input type="text" name="lastname" class="form-control" placeholder="Apellido">
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
			<label class="col-md-4" for="work"><em class="required_field">*</em> Empresa o Institución</label>
			<div class="col-md-8">
				<input type="text" name="work" class="form-control" placeholder="Empresa o Institución">
			</div>
		</div>
		<div class="form-group">
			<label for="date_speak" class="col-md-4"><em class="required_field">*</em> Fecha de la plática</label>
			<div class="col-md-8">
				<input type="date" name="date_speak" class="form-control" placeholder="Fecha de la plática">
			</div>
		</div>
		<div class="form-group">
			<label for="time_speak" class="col-md-4"><em class="required_field">*</em> Hora de la plática</label>
			<div class="col-md-8">
				<input type="time" name="time_speak" placeholder="Hora de la plática" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<label for="state" class="col-md-4"><em class="required_field">*</em> Estado dónde se realizará la plática</label>
			<div class="col-md-8">
				<select name="state" id="" class="form-control">
					<option value="">Selecciona un estado</option>
					<option value="1">Distrito Federal y Área Metropolitana</option>
					<option value="2">Nuevo León</option>
					<option value="3">Otro Estado</option>
				</select>
			</div>
		</div>
	</div>
	<div class="form-group">
		<label for="address" class="col-md-4"><em class="required_field">*</em> Dirección dónde se realizará la plática</label>
		<div class="col-md-8">
			<textarea name="address" id="" cols="30" rows="3" class="form-control" placeholder="Dirección dónde se realizará la plática"></textarea>
		</div>
	</div>
	<div class="form-group">
		<label for="assistants" class="col-md-4"><em class="required_field">*</em> Número de asistentes</label>
		<div class="col-md-8">
			<input type="text" class="form-control" name="assistants" placeholder="Número de asistentes">
		</div>
	</div>
	<div class="form-group">
		<label for="" class="col-md-4"></label>
		<div class="col-md-8">
			<em class="required_field">* Datos requeridos para el envío de la solicitud</em>
		</div>
	</div>
	<h4 class="colours-pink">
		<strong>Cuento con los requerimientos tecnológicos para la plática</strong>
	</h4>
	<div class="checkbox">
		<label>
			<input name="requeriments[]" value="computadora-usb" type="checkbox">
			Computadora con lector de DVD y entrada USB
		</label>
	</div>
	<div class="checkbox">
		<label>
			<input name="requeriments[]" value="proyector-pantalla" type="checkbox">
			Proyector y pantalla o pared blanca para proyectar
		</label>
	</div>
	<div class="checkbox">
		<label>
			<input name="requeriments[]" value="microfono-bocinas" type="checkbox">
			Micrófono y equipo de sonido (bocinas).
		</label>
	</div>
	<div class="spacing-down-sm"></div>
	<button type="submit" class="btn btn-pink btn-lg pull-right">Enviar <i class="fa fa-angle-double-right"></i></button>
	<div class="spacing-down-sm"></div>
</form>