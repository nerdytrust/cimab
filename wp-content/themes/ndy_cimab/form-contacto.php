<form action="<?php bloginfo( 'url' ); ?>/sistema/contacto" id="form_nuevo_contacto" class="form-horizontal" role="form" method="POST" autocomplete="off">
	<div class="col-md-6">
		<div class="form-group">
			<label for="contact_type" class="col-md-4"><em class="required_field">*</em> Tipo de contacto</label>
			<div class="col-md-8">
				<select name="contact_type" id="" class="form-control">
					<option value="">Selecciona una opción</option>
					<option value="pacientes">Pacientes</option>
					<option value="ongs-instituciones">ONGs o Instituciones</option>
					<option value="contacto-prensa">Contacto de prensa</option>
					<option value="empresas">Empresas</option>
					<option value="testimonios">Testimonios</option>
					<option value="platicas">Pláticas</option>
					<option value="voluntariado-serviciosocial">Voluntariado y servicio social</option>
					<option value="convenios-medicos">Convenios médicos</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="name" class="col-md-4"><em class="required_field">*</em> Nombre</label>
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
	</div>
	<div class="col-md-6">
		<div class="form-group">
			<label for="email" class="col-md-4"><em class="required_field">*</em> Email</label>
			<div class="col-md-8">
				<input type="email" name="email" class="form-control" placeholder="Email">
			</div>
		</div>
		<div class="form-group">
			<label for="phone" class="col-md-4">Teléfono</label>
			<div class="col-md-8">
				<input type="text" name="phone" class="form-control" placeholder="Teléfono">
			</div>
		</div>
		<div class="form-group">
			<label for="state" class="col-md-4"><em class="required_field">*</em> Estado</label>
			<div class="col-md-8">
				<select name="state" id="" class="form-control">
					<option value="">Selecciona un estado</option>
					<option value="guerrero">Guerrero</option>
					<option value="guanajuato">Guanajuato</option>
					<option value="durango">Durango</option>
					<option value="distrito-federal">Distrito Federal</option>
					<option value="colima">Colima</option>
					<option value="coahuila">Coahuila</option>
					<option value="chihuahua">Chihuahua</option>
					<option value="chiapas">Chiapas</option>
					<option value="campeche">Campeche</option>
					<option value="baja-california-sur">Baja California Sur</option>
					<option value="baja-california">Baja California</option>
					<option value="aguascalientes">Aguascalientes</option>
					<option value="hidalgo">Hidalgo</option>
					<option value="jalisco">Jalisco</option>
					<option value="estado-de-mexico">Estado de México</option>
					<option value="michoacan">Michoacán</option>
					<option value="morelos">Morelos</option>
					<option value="nayarit">Nayarit</option>
					<option value="monterrey">Monterrey</option>
					<option value="oaxaca">Oaxaca</option>
					<option value="puebla">Puebla</option>
					<option value="queretaro">Queretaro</option>
					<option value="quintana-roo">Quintana Roo</option>
					<option value="san-luis-potosi">San Luis Potosí</option>
					<option value="sinaloa">Sinaloa</option>
					<option value="sonora">Sonora</option>
					<option value="tabasco">Tabasco</option>
					<option value="tamaulipas">Tamaulipas</option>
					<option value="tlaxcala">Tlaxcala</option>
					<option value="veracruz">Veracruz</option>
					<option value="yucatan">Yucatán</option>
					<option value="zacatecas">Zacatecas</option>
					<option value="nuevo-leon">Nuevo Leon</option>
				</select>
			</div>
		</div>
	</div>
	<div class="col-md-12">
		<div class="form-group">
			<label for="message" class="col-md-2"><em class="required_field">*</em> Comentarios</label>
			<div class="col-md-10">
				<textarea name="message" id="" cols="30" rows="3" class="form-control" placeholder="Comentarios"></textarea>
			</div>
		</div>
		<div class="form-group">
			<label for="" class="col-md-2"></label>
			<div class="col-md-10">
				<em class="required_field">* Datos requeridos para el envío de la solicitud</em>
			</div>
		</div>
	</div>
	<div class="col-md-12">
		<button type="submit" class="btn btn-purple btn-lg pull-right">Enviar <i class="fa fa-angle-double-right"></i></button>
	</div>
	<div class="spacing-down-sm"></div>
</form>