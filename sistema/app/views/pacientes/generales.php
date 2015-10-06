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

						<?php 
							echo form_open( base_url().'add-patient', array( 'class' => 'form-horizontal', 'id' => 'form_edit_patient', 'name' => 'form_add_patient', 'method' => 'POST', 'role' => 'form', 'autocomplete' => 'off' ) ); 	
							if(isset($patient)){
								echo '<input name="id_patients" value="'.$patient->id.'" type="hidden">';
								echo '<input name="edit" value="true" type="hidden">';
							}
						?>
							<div class="col-md-12">
								<div class="form-group">
									<label for="name" class="col-md-12">Nombre del Paciente</label>
									<div class="col-sm-9 col-md-12">
										<input type="text" name="name" id="name" value="<?=$patient->name?>" class="form-control" placeholder="Nombre del Paciente">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="birthday" class="col-md-12">Fecha de Nacimiento (DD/MM/AAAA)</label>
									<div class="col-md-12">
										<input type="text" name="birthday" id="birthday" value="<?=$patient->birthday?>" class="datepicker form-control" placeholder="Fecha de Nacimiento (DD/MM/AAAA)">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="civil_status" class="col-md-12">Estado Civil</label>
									<div class="col-md-12">
										<select name="civil_status" id="civil_status" class="form-control">
											<option value="">Estado Civil</option>
											<option value="1" <?=($patient->civil_status==1)?'selected':'';?>>Soltero(a)</option>
											<option value="2" <?=($patient->civil_status==2)?'selected':'';?>>Casado(a)</option>
											<option value="3" <?=($patient->civil_status==3)?'selected':'';?>>Divorciado(a)</option>
											<option value="4" <?=($patient->civil_status==4)?'selected':'';?>>Viudo(a)</option>

										</select>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="telephone" class="col-md-12">Teléfono de casa</label>
									<div class="col-md-12">
										<input  type="tel" name="telephone" id="telephone" value="<?=$patient->telephone?>" class="form-control" placeholder="Teléfono de casa">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="cellphone" class="col-md-12">Teléfono celular</label>
									<div class="col-md-12">
										<input type="tel" name="cellphone" id="cellphone" value="<?=$patient->cellphone?>" class="form-control" placeholder="Teléfono celular">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="federal_entity" class="col-md-12">Entidad Federativa</label>
									<div class="col-md-12">
										<select name="federal_entity" id="federal_entity" class="form-control">
											<option value="">Entidad Federativa</option>
											<?php
												foreach($estados as $estado){
													$selected = ($patient->federal_entity == $estado->id)?'selected':'';
													echo '<option value="'.$estado->id.'" '.$selected.'>'.$estado->nombre.'</option>';
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
											<option value="">Delegación/Municipio</option>
											<?php
												foreach($municipios as $municipio){
													$selected = ($patient->town == $municipio->id)?'selected':'';
													echo '<option value="'.$municipio->id.'" '.$selected.'>'.$municipio->nombre.'</option>';
												}
											?>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="education" class="col-md-12">Escolaridad</label>
									<div class="col-md-12">
										<select name="education" id="education" class="form-control">
											<option value="">Escolaridad</option>
											<option value="1" <?=($patient->education==1)?'selected':'';?>>Ninguna</option>
											<option value="2" <?=($patient->education==2)?'selected':'';?>>Primaria</option>
											<option value="3" <?=($patient->education==3)?'selected':'';?>>Secundaria</option>
											<option value="4" <?=($patient->education==4)?'selected':'';?>>Bachillerato</option>
											<option value="5" <?=($patient->education==5)?'selected':'';?>>Licenciatura</option>
											<option value="6" <?=($patient->education==6)?'selected':'';?>>Posgrado</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="name_relation" class="col-md-12">¿Con quién vive?</label>
									<div class="col-md-12">
										<input type="text" name="name_relation" id="name_relation" value="<?=$patient->name_relation?>" class="form-control" placeholder="¿Con quién vive?">
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="relation" class="col-md-12">¿Con quién vive?</label>
									<div class="col-md-3">
										<select name="relation" id="relation" class="form-control">
											<option value="">Parentesco</option>
											<option value="1" <?=($patient->relation==1)?'selected':'';?>>Esposo(a)</option>
											<option value="2" <?=($patient->relation==2)?'selected':'';?>>Hijo(a)</option>
											<option value="3" <?=($patient->relation==3)?'selected':'';?>>Padre/Madre</option>
											<option value="4" <?=($patient->relation==4)?'selected':'';?>>Hermano(a)</option>
											<option value="5" <?=($patient->relation==5)?'selected':'';?>>Abuelo(a)</option>
											<option value="6" <?=($patient->relation==6)?'selected':'';?>>Otro</option>
										</select>
									</div>
									<div class="col-md-3">
										<select name="age_ralation" id="age_ralation" class="form-control">
											<option value="">Edad</option>
											<?php 
												for($i=1;$i<=99;$i++){
													$selected = (isset($patient->age_ralation) && $patient->age_ralation==$i)?'selected':'';
													echo '<option val="'.$i.'" '.$selected.'>'.$i.'</option>';
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
										<input type="text" name="first_person" id="first_person" value="<?=$patient->first_person?>" class="form-control" placeholder="¿A qué persona le platicó primero sobre la enfermedad?">
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="accompanying_person" class="col-md-12">¿Quién es la persona que la acompaña a sus citas médicas o ha estado más cerca de usted durante el tratamiento médico?</label>
									<div class="col-md-12">
										<input type="text" name="accompanying_person" id="accompanying_person" value="<?=$patient->accompanying_person?>" class="form-control" placeholder="¿Quién es la persona que la acompaña a sus citas médicas o ha estado más cerca de usted durante el tratamiento médico?">
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="b_receive_support" class="col-md-12">¿Siente que le ha faltado recibir algún tipo de apoyo o ayuda de alguien que esperaba que le ayudara?</label>
									<div class="col-md-2">
										<label class="radio-inline">
											<input name="b_receive_support" value="0" <?=( isset($patient->b_receive_support) && $patient->b_receive_support==0)?'checked="checked"':'';?> type="radio">No
										</label>
										<label class="radio-inline">
											<input name="b_receive_support" value="1" <?=( isset($patient->b_receive_support) && $patient->b_receive_support==1)?'checked="checked"':'';?> type="radio">Si
										</label>
									</div>
									<div class="col-md-10">
										<input type="text" name="receive_support" id="receive_support" value="<?=$patient->receive_support?>" class="form-control" placeholder="¿De quién?, ¿Qué tipo de apoyo?">
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="b_relation_psicology" class="col-md-12">¿Considera que algún(os) miembro(s) de su familia necesita(n) recibir terapia psicológica?</label>
									<div class="col-md-2">
										<label class="radio-inline">
											<input name="b_relation_psicology" value="0" <?=( isset($patient->b_relation_psicology) &&  $patient->b_relation_psicology==0)?'checked="checked"':'';?> type="radio">No
										</label>
										<label class="radio-inline">
											<input name="b_relation_psicology" value="1" <?=( isset($patient->b_relation_psicology) && $patient->b_relation_psicology==1)?'checked="checked"':'';?> type="radio">Si
										</label>
									</div>
									<div class="col-md-10">
										<input type="text" name="relation_psicology" id="relation_psicology" value="<?=$patient->relation_psicology?>" class="form-control" placeholder="¿Quién(es)?">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="occupation" class="col-md-12">Escolaridad</label>
									<div class="col-md-12">
										<select name="occupation" id="occupation" class="form-control">
											<option value="">Ocupación</option>
											<option value="1" <?=($patient->occupation==1)?'selected':'';?>>Empleada</option>
											<option value="2" <?=($patient->occupation==2)?'selected':'';?>>Negocio propio</option>
											<option value="3" <?=($patient->occupation==3)?'selected':'';?>>Desempleada</option>
											<option value="4" <?=($patient->occupation==4)?'selected':'';?>>Ama de casa</option>
											<option value="5" <?=($patient->occupation==5)?'selected':'';?>>Jubilada</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="b_employment_know" class="col-md-12">¿En su empleo saben acerca de su enfermedad?</label>
									<div class="col-md-2">
										<label class="radio-inline">
											<input name="b_employment_know" value="0" <?=( isset($patient->b_employment_know) && $patient->b_employment_know==0)?'checked="checked"':'';?> type="radio">No
										</label>
										<label class="radio-inline">
											<input name="b_employment_know" value="1" <?=( isset($patient->b_employment_know) && $patient->b_employment_know==1)?'checked="checked"':'';?> type="radio">Si
										</label>
									</div>
									<div class="col-md-10">
										<input type="text" name="employment_know" id="employment_know" value="<?=$patient->relation_psicology?>" class="form-control" placeholder="¿Por qué?">
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="b_support_boss" class="col-md-12">¿Ha recibido apoyo de su jefe inmediato o compañeros de trabajo durante su enfermedad?</label>
									<div class="col-md-2">
										<label class="radio-inline">
											<input name="b_support_boss" value="0" <?=( isset($patient->b_support_boss) && $patient->b_support_boss==0)?'checked="checked"':'';?> type="radio">No
										</label>
										<label class="radio-inline">
											<input name="b_support_boss" value="1" <?=( isset($patient->b_support_boss) && $patient->b_support_boss==1)?'checked="checked"':'';?> type="radio">Si
										</label>
									</div>
									<div class="col-md-10">
										<input type="text" name="support_boss" id="support_boss" value="<?=$patient->support_boss?>" class="form-control" placeholder="¿Por qué?">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="how_now" class="col-md-12">¿Cómo se enteró de Cim*ab?</label>
									<div class="col-md-12">
										<input type="text" name="how_now" id="how_now" value="<?=$patient->how_now?>" class="form-control" placeholder="¿Cómo se enteró de Cim*ab?">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="type_support" class="col-md-12">¿Qué tipo de apoyo espera de Cim*ab?</label>
									<div class="col-md-12">
										<input type="text" name="type_support" id="type_support" value="<?=$patient->type_support?>" class="form-control" placeholder="¿Qué tipo de apoyo espera de Cim*ab?">
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="b_other_organization" class="col-md-12">¿Asiste a otra organización?</label>
									<div class="col-md-2">
										<label class="radio-inline">
											<input name="b_other_organization" value="0" <?=( isset($patient->b_other_organization) && $patient->b_other_organization==0)?'checked="checked"':'';?> type="radio">No
										</label>
										<label class="radio-inline">
											<input name="b_other_organization" value="1" <?=( isset($patient->b_other_organization) && $patient->b_other_organization==1)?'checked="checked"':'';?> type="radio">Si
										</label>
									</div>
									<div class="col-md-5">
										<input type="text" name="other_organization" value="<?=$patient->other_organization?>" class="form-control" placeholder="¿Cuál?">
									</div>
									<div class="col-md-5">
										<input type="text" name="other_organization_support" value="<?=$patient->other_organization_support?>" class="form-control" placeholder="¿Qué tipo de apoyo recibe?">
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<button class="btn btn-purple btn-flat btn-lg pull-right" type="submit">Siguiente</button> 
								<?php if ( $this->session->userdata( 'nivel' ) == 1 ): ?>
									<button class="btn btn-purple btn-flat btn-lg pull-right margin-right-10" onclick="window.location.href=base_url+'pacientes/list_patients'">Regresar a la lista</button>
								<?php endif; ?>
							</div>
						<?php echo form_close(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php $this->load->view('footer'); ?>