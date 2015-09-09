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
						<?php echo form_open( base_url().'add-patient', [ 'class' => 'form-horizontal', 'id' => 'form_add_patient', 'name' => 'form_add_patient', 'method' => 'POST', 'role' => 'form', 'autocomplete' => 'off' ] ); ?>
							<div class="col-md-12">
								<div class="form-group">
									<label for="name" class="col-md-12">Nombre del Paciente</label>
									<div class="col-sm-9 col-md-12">
										<input type="text" name="name" id="name" class="form-control" placeholder="Nombre del Paciente">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="birthday" class="col-md-12">Fecha de Nacimiento (DD/MM/AA)</label>
									<div class="col-md-12">
										<input type="text" name="birthday" id="birthday" class="form-control datepicker" placeholder="Fecha de Nacimiento (DD/MM/AA)">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="civilStatus" class="col-md-12">Estado Civil</label>
									<div class="col-md-12">
										<select name="civilStatus" id="civilStatus" class="form-control">
											<option value="0">Estado Civil</option>
											<option value="1">Soltero(a)</option>
											<option value="2">Casado(a)</option>
											<option value="3">Divorciado(a)</option>
											<option value="4">Viudo(a)</option>

										</select>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="telephone" class="col-md-12">Teléfono de casa</label>
									<div class="col-md-12">
										<input  type="tel" name="telephone" id="telephone" class="form-control" placeholder="Teléfono de casa">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="cellphone" class="col-md-12">Teléfono celular</label>
									<div class="col-md-12">
										<input type="tel" name="cellphone" id="cellphone" class="form-control" placeholder="Teléfono celular">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="federal-entity" class="col-md-12">Entidad Federativa</label>
									<div class="col-md-12">
										<select name="federal-entity" id="federal-entity" class="form-control">
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
									<label for="town" class="col-md-12">Delegación/Municipio</label>
									<div class="col-md-12">
										<select name="town" id="town" class="form-control">
											<option value="0">Delegación/Municipio</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="education" class="col-md-12">Escolaridad</label>
									<div class="col-md-12">
										<select name="education" id="education" class="form-control">
											<option value="0">Escolaridad</option>
											<option value="1">Ninguna</option>
											<option value="2">Primaria</option>
											<option value="3">Secundaria</option>
											<option value="4">Bachillerato</option>
											<option value="5">Licenciatura</option>
											<option value="6">Posgrado</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="name_relation" class="col-md-12">¿Con quién vive?</label>
									<div class="col-md-12">
										<input type="text" name="name_relation" id="name_relation" class="form-control" placeholder="¿Con quién vive?">
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="relation" class="col-md-12">¿Con quién vive?</label>
									<div class="col-md-3">
										<select name="relation" id="relation" class="form-control">
											<option value="0">Parentesco</option>
											<option value="1">Esposo(a)</option>
											<option value="2">Hijo(a)</option>
											<option value="3">Padre/Madre</option>
											<option value="4">Hermano(a)</option>
											<option value="5">Abuelo(a)</option>
											<option value="6">Otro</option>
										</select>
									</div>
									<div class="col-md-3">
										<select name="age_ralation" id="age_ralation" class="form-control">
											<option value="0">Edad</option>
											<?php 
												for($i=0;$i<=99;$i++){
													echo '<option val="'.$i.'">'.$i.'</option>';
												} 
											?>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="first_person" class="col-md-12">¿A qué persona le platicó primero sobre la enfermedad?</label>
									<div class="col-md-12">
										<input type="text" name="first_person" id="first_person" class="form-control" placeholder="¿A qué persona le platicó primero sobre la enfermedad?">
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="accompanying_person" class="col-md-12">¿Quién es la persona que la acompaña a sus citas médicas o ha estado más cerca de usted durante el tratamiento médico?</label>
									<div class="col-md-12">
										<input type="text" name="accompanying_person" id="accompanying_person" class="form-control" placeholder="¿Quién es la persona que la acompaña a sus citas médicas o ha estado más cerca de usted durante el tratamiento médico?">
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="b_receive_support" class="col-md-12">¿Siente que le ha faltado recibir algún tipo de apoyo o ayuda de alguien que esperaba que le ayudara?</label>
									<div class="col-md-2">
										<label class="radio-inline">
											<input name="b_receive_support" type="radio">No
										</label>
										<label class="radio-inline">
											<input name="b_receive_support" type="radio">Si
										</label>
									</div>
									<div class="col-md-10">
										<input type="text" name="receive_support" id="receive_support" class="form-control" placeholder="¿De quién?, ¿Qué tipo de apoyo?">
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="b_relation_psicology" class="col-md-12">¿Considera que algún(os) miembro(s) de su familia necesita(n) recibir terapia psicológica?</label>
									<div class="col-md-2">
										<label class="radio-inline">
											<input name="b_relation_psicology" type="radio">No
										</label>
										<label class="radio-inline">
											<input name="b_relation_psicology" type="radio">Si
										</label>
									</div>
									<div class="col-md-10">
										<input type="text" name="relation_psicology" id="relation_psicology" class="form-control" placeholder="¿Quién(es)?">
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="occupation" class="col-md-12">Ocupación</label>
									<div class="col-sm-9 col-md-12">
										<input type="text" name="occupation" id="occupation" class="form-control" placeholder="Ocupación">
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="b_employment_know" class="col-md-12">¿En su empleo saben acerca de su enfermedad?</label>
									<div class="col-md-2">
										<label class="radio-inline">
											<input name="b_employment_know" type="radio">No
										</label>
										<label class="radio-inline">
											<input name="b_employment_know" type="radio">Si
										</label>
									</div>
									<div class="col-md-10">
										<input type="text" name="employment_know" id="employment_know" class="form-control" placeholder="¿Por qué?">
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="b_support_boss" class="col-md-12">¿Ha recibido apoyo de su jefe inmediato o compañeros de trabajo durante su enfermedad?</label>
									<div class="col-md-2">
										<label class="radio-inline">
											<input name="b_support_boss" type="radio">No
										</label>
										<label class="radio-inline">
											<input name="b_support_boss" type="radio">Si
										</label>
									</div>
									<div class="col-md-10">
										<input type="text" name="support_boss" id="support_boss" class="form-control" placeholder="¿Por qué?">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="how_now" class="col-md-12">¿Cómo se enteró de Cim*ab?</label>
									<div class="col-md-12">
										<input type="text" name="how_now" id="how_now" class="form-control" placeholder="¿Cómo se enteró de Cim*ab?">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="support" class="col-md-12">¿Qué tipo de apoyo espera de Cim*ab?</label>
									<div class="col-md-12">
										<input type="text" name="support" id="support" class="form-control" placeholder="¿Qué tipo de apoyo espera de Cim*ab?">
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="b_other_organization" class="col-md-12">¿Asiste a otra organización?</label>
									<div class="col-md-2">
										<label class="radio-inline">
											<input name="b_other_organization" type="radio">No
										</label>
										<label class="radio-inline">
											<input name="b_other_organization" type="radio">Si
										</label>
									</div>
									<div class="col-md-5">
										<input type="text" name="other_organization" class="form-control" placeholder="¿Cuál?">
									</div>
									<div class="col-md-5">
										<input type="text" name="other_organization_support" class="form-control" placeholder="¿Qué tipo de apoyo recibe?">
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