<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php $this->load->view('header'); ?>
	<div class="container">
		<div class="row">
			<div class="col-md-12 padding-top-md">
				<div class="panel panel-purple">
					<div class="panel-heading">
						<h3 class="panel-title">Datos generales del paciente</h3>
					</div>
					<div class="panel-body">
						<?php echo form_open( 'add-patient', [ 'class' => 'form-horizontal', 'id' => 'form_add_patient', 'name' => 'form_add_patient', 'method' => 'POST', 'role' => 'form', 'autocomplete' => 'off' ] ); ?>
							<div class="col-md-12">
								<div class="form-group">
									<label for="name" class="col-md-12">Nombre del Paciente</label>
									<div class="col-sm-9 col-md-12">
										<input type="text" name="name" class="form-control" placeholder="Nombre del Paciente">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="birthday" class="col-md-12">Fecha de Nacimiento (DD/MM/AA)</label>
									<div class="col-md-12">
										<input type="text" name="birthday" class="form-control" placeholder="Fecha de Nacimiento (DD/MM/AA)">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="" class="col-md-12">Estado Civil</label>
									<div class="col-md-12">
										<select name="" id="" class="form-control">
											<option value="0">Estado Civil</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="telephone" class="col-md-12">Teléfono de casa</label>
									<div class="col-md-12">
										<input type="tel" class="form-control" placeholder="Teléfono de casa">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="cellphone" class="col-md-12">Teléfono celular</label>
									<div class="col-md-12">
										<input type="tel" class="form-control" placeholder="Teléfono celular">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="" class="col-md-12">Entidad Federativa</label>
									<div class="col-md-12">
										<select name="" id="" class="form-control">
											<option value="0">Entidad Federativa</option>
											<?php
												foreach($estados as $estado){
													echo '<option value="'.$estado->id.'">'.$estado->nombre.'</option>';
												}
											?>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="" class="col-md-12">Delegación/Municipio</label>
									<div class="col-md-12">
										<select name="" id="" class="form-control">
											<option value="0">Delegación/Municipio</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="" class="col-md-12">Escolaridad</label>
									<div class="col-md-12">
										<select name="" id="" class="form-control">
											<option value="0">Escolaridad</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="" class="col-md-12">¿Con quién vive?</label>
									<div class="col-md-12"><input type="text" class="form-control"></div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="" class="col-md-12">¿Con quién vive?</label>
									<div class="col-md-3">
										<select name="" id="" class="form-control">
											<option value="0">Parentesco</option>
										</select>
									</div>
									<div class="col-md-3">
										<select name="" id="" class="form-control">
											<option value="0">Edad</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="" class="col-md-12">¿A qué persona le platicó primero sobre la enfermedad?</label>
									<div class="col-md-12">
										<input type="text" name="" id="" class="form-control" placeholder="¿A qué persona le platicó primero sobre la enfermedad?">
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="" class="col-md-12">¿Quién es la persona que la acompaña a sus citas médicas o ha estado más cerca de usted durante el tratamiento médico?</label>
									<div class="col-md-12">
										<input type="text" name="" id="" class="form-control" placeholder="¿Quién es la persona que la acompaña a sus citas médicas o ha estado más cerca de usted durante el tratamiento médico?">
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="" class="col-md-12">¿Siente que le ha faltado recibir algún tipo de apoyo o ayuda de alguien que esperaba que le ayudara?</label>
									<div class="col-md-2">
										<label class="radio-inline">
											<input type="radio">No
										</label>
										<label class="radio-inline">
											<input type="radio">Si
										</label>
									</div>
									<div class="col-md-10">
										<input type="text" class="form-control" placeholder="¿De quién?, ¿Qué tipo de apoyo?">
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="" class="col-md-12">¿Considera que algún(os) miembro(s) de su familia necesita(n) recibir terapia psicológica?</label>
									<div class="col-md-2">
										<label class="radio-inline">
											<input type="radio">No
										</label>
										<label class="radio-inline">
											<input type="radio">Si
										</label>
									</div>
									<div class="col-md-10">
										<input type="text" class="form-control" placeholder="¿Quién(es)?">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="occupation" class="col-md-12">Ocupación</label>
									<div class="col-md-12">
										<select name="" id="" class="form-control">
											<option value="0">Ocupación</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="" class="col-md-12">¿En su empleo saben acerca de su enfermedad?</label>
									<div class="col-md-2">
										<label class="radio-inline">
											<input type="radio">No
										</label>
										<label class="radio-inline">
											<input type="radio">Si
										</label>
									</div>
									<div class="col-md-10">
										<input type="text" class="form-control" placeholder="¿Por qué?">
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="" class="col-md-12">¿Ha recibido apoyo de su jefe inmediato o compañeros de trabajo durante su enfermedad?</label>
									<div class="col-md-2">
										<label class="radio-inline">
											<input type="radio">No
										</label>
										<label class="radio-inline">
											<input type="radio">Si
										</label>
									</div>
									<div class="col-md-10">
										<input type="text" class="form-control" placeholder="¿Por qué?">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="occupation" class="col-md-12">¿Cómo se enteró de Cim*ab?</label>
									<div class="col-md-12">
										<input type="text" class="form-control" placeholder="¿Cómo se enteró de Cim*ab?">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="occupation" class="col-md-12">¿Qué tipo de apoyo espera de Cim*ab?</label>
									<div class="col-md-12">
										<input type="text" class="form-control" placeholder="¿Qué tipo de apoyo espera de Cim*ab?">
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="" class="col-md-12">¿Asiste a otra organización?</label>
									<div class="col-md-2">
										<label class="radio-inline">
											<input type="radio">No
										</label>
										<label class="radio-inline">
											<input type="radio">Si
										</label>
									</div>
									<div class="col-md-5">
										<input type="text" class="form-control" placeholder="¿Cuál?">
									</div>
									<div class="col-md-5">
										<input type="text" class="form-control" placeholder="¿Qué tipo de apoyo recibe?">
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<button class="btn btn-purple btn-flat btn-lg pull-right" type="submit">Siguiente</button>
							</div>
						<?php echo form_close(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php $this->load->view('footer'); ?>