<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php $this->load->view('header'); ?>
	<div class="container">
		<div class="row">
			<div class="col-md-12 padding-top-md">
				<div class="panel panel-purple">
					<div class="panel-heading">
						<h3 class="panel-title">Calidad en la atención recibida</h3>
					</div>
					<div class="panel-body">
						<?php 
							echo form_open( base_url().'add-atention', [ 'class' => 'form-horizontal', 'id' => 'form_add_diagnostic', 'name' => 'form_add_diagnostic', 'method' => 'POST', 'role' => 'form', 'autocomplete' => 'off' ] ); 
							if(isset($atention)){
								echo '<input name="edit" value="true" type="hidden">';
							} 
						?>
							<input name="id_patients" value="<?=$idPatient?>" type="hidden">
							<div class="col-md-12">
								<div class="form-group">
									<label for="cancer" class="col-md-12">¿El día que recibió su diagnóstico alguien le explicó?</label>
									<div class="col-md-12">
										<div class="radio">
											<div class="col-md-6">
												<span class="group-option-title">Qué es el cáncer</span>
												<label>
													<input name="cancer" value="0" <?=( isset($atention->cancer) && $atention->cancer==0)?'checked="checked"':'';?> type="radio">No
												</label>
												<label>
													<input name="cancer" value="1" <?=( isset($atention->cancer) && $atention->cancer==1)?'checked="checked"':'';?> type="radio">Si
												</label>
											</div>
											<div class="col-md-6">
												<input type="text" name="quien_cancer" value="<?=$atention->quien_cancer?>" class="form-control" placeholder="¿Quién?">
											</div>
										</div>
										<div class="radio">
											<div class="col-md-6">
												<span class="group-option-title">Los tipos de tratamientos posibles</span>
												<label>
													<input name="tratamientos" value="0" <?=( isset($atention->tratamientos) && $atention->tratamientos==0)?'checked="checked"':'';?> type="radio">No
												</label>
												<label>
													<input name="tratamientos" value="1" <?=( isset($atention->tratamientos) && $atention->tratamientos==1)?'checked="checked"':'';?> type="radio">Si
												</label>
											</div>
											<div class="col-md-6">
												<input type="text" name="quien_tratamientos" value="<?=$atention->quien_tratamientos?>" class="form-control" placeholder="¿Quién?">
											</div>
										</div>
										<div class="radio">
											<div class="col-md-6">
												<span class="group-option-title">Los pros y contras del tratamiento</span>
												<label>
													<input name="pros_contras" value="0" <?=( isset($atention->pros_contras) && $atention->pros_contras==0)?'checked="checked"':'';?> type="radio">No
												</label>
												<label>
													<input name="pros_contras" value="1" <?=( isset($atention->pros_contras) && $atention->pros_contras==1)?'checked="checked"':'';?> type="radio">Si
												</label>
											</div>
											<div class="col-md-6">
												<input type="text" name="quien_pros_contras" value="<?=$atention->quien_pros_contras?>" class="form-control" placeholder="¿Quién?">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="informacion" class="col-md-12">¿Considera que la información que recibió del personal médico fue clara?</label>
									<div class="radio">
										<div class="col-md-12">
											<label>
												<input name="informacion" value="0" <?=( isset($atention->informacion) && $atention->informacion==0)?'checked="checked"':'';?> type="radio">Siempre
											</label>
											<label>
												<input name="informacion" value="1" <?=( isset($atention->informacion) && $atention->informacion==1)?'checked="checked"':'';?> type="radio">Casi siempre
											</label>
											<label>
												<input name="informacion" value="2" <?=( isset($atention->informacion) && $atention->informacion==2)?'checked="checked"':'';?> type="radio">Algunas veces
											</label>
											<label>
												<input name="informacion" value="3" <?=( isset($atention->informacion) && $atention->informacion==3)?'checked="checked"':'';?> type="radio">Casi nunca
											</label>
											<label>
												<input name="informacion" value="4" <?=( isset($atention->informacion) && $atention->informacion==4)?'checked="checked"':'';?> type="radio">Nunca
											</label>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="dudas" class="col-md-12">¿Con qué frecuencia el médico y/o enfermera resuelve sus dudas sobre el tratamiento?</label>
									<div class="radio">
										<div class="col-md-12">
											<label>
												<input name="dudas" value="0" <?=( isset($atention->dudas) && $atention->dudas==0)?'checked="checked"':'';?> type="radio">Siempre
											</label>
											<label>
												<input name="dudas" value="1" <?=( isset($atention->dudas) && $atention->dudas==1)?'checked="checked"':'';?> type="radio">Casi siempre
											</label>
											<label>
												<input name="dudas" value="2" <?=( isset($atention->dudas) && $atention->dudas==2)?'checked="checked"':'';?> type="radio">Algunas veces
											</label>
											<label>
												<input name="dudas" value="3" <?=( isset($atention->dudas) && $atention->dudas==3)?'checked="checked"':'';?> type="radio">Casi nunca
											</label>
											<label>
												<input name="dudas" value="4" <?=( isset($atention->dudas) && $atention->dudas==4)?'checked="checked"':'';?> type="radio">Nunca
											</label>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="efectos" class="col-md-12">¿Recibió información del médico y/o enfermera sobre los efectos secundarios de los tratamientos?</label>
									<div class="radio">
										<div class="col-md-12">
											<label>
												<input name="efectos" value="0" <?=( isset($atention->efectos) && $atention->efectos==0)?'checked="checked"':'';?> type="radio">Siempre
											</label>
											<label>
												<input name="efectos" value="1" <?=( isset($atention->efectos) && $atention->efectos==1)?'checked="checked"':'';?> type="radio">Casi siempre
											</label>
											<label>
												<input name="efectos" value="2" <?=( isset($atention->efectos) && $atention->efectos==2)?'checked="checked"':'';?> type="radio">Algunas veces
											</label>
											<label>
												<input name="efectos" value="3" <?=( isset($atention->efectos) && $atention->efectos==3)?'checked="checked"':'';?> type="radio">Casi nunca
											</label>
											<label>
												<input name="efectos" value="4" <?=( isset($atention->efectos) && $atention->efectos==4)?'checked="checked"':'';?> type="radio">Nunca
											</label>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="calificacion_medico" class="col-md-12">¿Cómo calificaría la atención del médico tratante?</label>
									<div class="radio">
										<div class="col-md-12">
											<label>
												<input name="calificacion_medico" value="0" <?=( isset($atention->calificacion_medico) && $atention->calificacion_medico==0)?'checked="checked"':'';?> type="radio">Excelente
											</label>
											<label>
												<input name="calificacion_medico" value="1" <?=( isset($atention->calificacion_medico) && $atention->calificacion_medico==1)?'checked="checked"':'';?> type="radio">Muy bueno
											</label>
											<label>
												<input name="calificacion_medico" value="2" <?=( isset($atention->calificacion_medico) && $atention->calificacion_medico==2)?'checked="checked"':'';?> type="radio">Bueno
											</label>
											<label>
												<input name="calificacion_medico" value="3" <?=( isset($atention->calificacion_medico) && $atention->calificacion_medico==3)?'checked="checked"':'';?> type="radio">Regular
											</label>
											<label>
												<input name="calificacion_medico" value="4" <?=( isset($atention->calificacion_medico) && $atention->calificacion_medico==4)?'checked="checked"':'';?> type="radio">Malo
											</label>
											<label>
												<input name="calificacion_medico" value="5" <?=( isset($atention->calificacion_medico) && $atention->calificacion_medico==5)?'checked="checked"':'';?> type="radio">Muy malo
											</label>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="calificacion_enfermeras" class="col-md-12">¿Cómo calificaría la atención de las enfermeras?</label>
									<div class="radio">
										<div class="col-md-12">
											<label>
												<input name="calificacion_enfermeras" value="0" <?=( isset($atention->calificacion_enfermeras) && $atention->calificacion_enfermeras==0)?'checked="checked"':'';?> type="radio">Excelente
											</label>
											<label>
												<input name="calificacion_enfermeras" value="1" <?=( isset($atention->calificacion_enfermeras) && $atention->calificacion_enfermeras==1)?'checked="checked"':'';?> type="radio">Muy bueno
											</label>
											<label>
												<input name="calificacion_enfermeras" value="2" <?=( isset($atention->calificacion_enfermeras) && $atention->calificacion_enfermeras==2)?'checked="checked"':'';?> type="radio">Bueno
											</label>
											<label>
												<input name="calificacion_enfermeras" value="3" <?=( isset($atention->calificacion_enfermeras) && $atention->calificacion_enfermeras==3)?'checked="checked"':'';?> type="radio">Regular
											</label>
											<label>
												<input name="calificacion_enfermeras" value="4" <?=( isset($atention->calificacion_enfermeras) && $atention->calificacion_enfermeras==4)?'checked="checked"':'';?> type="radio">Malo
											</label>
											<label>
												<input name="calificacion_enfermeras" value="5" <?=( isset($atention->calificacion_enfermeras) && $atention->calificacion_enfermeras==5)?'checked="checked"':'';?> type="radio">Muy malo
											</label>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="calificacion_administracion" class="col-md-12">¿Cómo calificaría la atención del personal administrativo en el Hospital?</label>
									<div class="radio">
										<div class="col-md-12">
											<label>
												<input name="calificacion_administracion" value="0" <?=( isset($atention->calificacion_administracion) && $atention->calificacion_administracion==0)?'checked="checked"':'';?> type="radio">Excelente
											</label>
											<label>
												<input name="calificacion_administracion" value="1" <?=( isset($atention->calificacion_administracion) && $atention->calificacion_administracion==1)?'checked="checked"':'';?> type="radio">Muy bueno
											</label>
											<label>
												<input name="calificacion_administracion" value="2" <?=( isset($atention->calificacion_administracion) && $atention->calificacion_administracion==2)?'checked="checked"':'';?> type="radio">Bueno
											</label>
											<label>
												<input name="calificacion_administracion" value="3" <?=( isset($atention->calificacion_administracion) && $atention->calificacion_administracion==3)?'checked="checked"':'';?> type="radio">Regular
											</label>
											<label>
												<input name="calificacion_administracion" value="4" <?=( isset($atention->calificacion_administracion) && $atention->calificacion_administracion==4)?'checked="checked"':'';?> type="radio">Malo
											</label>
											<label>
												<input name="calificacion_administracion" value="5" <?=( isset($atention->calificacion_administracion) && $atention->calificacion_administracion==5)?'checked="checked"':'';?> type="radio">Muy malo
											</label>
										</div>
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