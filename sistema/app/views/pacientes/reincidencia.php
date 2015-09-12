<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php $this->load->view('header'); ?>
	<div class="container">
		<div class="row">
			<div class="col-md-12 padding-top-md">
				<div class="panel panel-purple">
					<div class="panel-heading">
						<h3 class="panel-title">Reincidencia o metástasis</h3>
					</div>
					<div class="panel-body">
						<?php 
							echo form_open( base_url().'add-recidivism', [ 'class' => 'form-horizontal', 'id' => 'form_add_diagnostic', 'name' => 'form_add_diagnostic', 'method' => 'POST', 'role' => 'form', 'autocomplete' => 'off' ] ); 
							if(isset($recidivism)){
								echo '<input name="edit" value="true" type="hidden">';
							} 
						?>
							<input name="id_patients" value="<?=$idPatient?>" type="hidden">
							<div class="col-md-12">
								<div class="form-group">
									<label for="fecha_diagnostico" class="col-md-12">¿En qué fecha aproximadamente fue diagnosticada? (DD/MM/AAAA)</label>
									<div class="col-md-6">
										<input type="text" name="fecha_diagnostico" value="<?=$recidivism->fecha_diagnostico?>" class="datepicker form-control" placeholder="¿En qué fecha aproximadamente fue diagnosticada? (DD/MM/AAAA)">
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="imss" class="col-md-12">¿En qué parte del cuerpo se presentó la reincidencia o metástasis?</label>
									<div class="col-md-12">
										<label class="checkbox-inline">
											<input name="hueso" value="1" <?=( isset($recidivism->hueso) && $recidivism->hueso==1)?'checked="checked"':'';?>  type="checkbox">Hueso
										</label>
										<label class="checkbox-inline">
											<input name="pulmon" value="1"  <?=( isset($recidivism->pulmon) && $recidivism->pulmon==1)?'checked="checked"':'';?> type="checkbox">Pulmón
										</label>
										<label class="checkbox-inline">
											<input name="higado" value="1"  <?=( isset($recidivism->higado) && $recidivism->higado==1)?'checked="checked"':'';?> type="checkbox">Hígado
										</label>
										<label class="checkbox-inline">
											<input name="cerebro" value="1"  <?=( isset($recidivism->cerebro) && $recidivism->cerebro==1)?'checked="checked"':'';?> type="checkbox">Cerebro
										</label>
										<label class="checkbox-inline">
											<input name="otro_reincidencia" value="1"  <?=( isset($recidivism->otro_reincidencia) && $recidivism->otro_reincidencia==1)?'checked="checked"':'';?> type="checkbox">Otro
										</label>
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-12">
										<input type="text" name="cual_reincidencia" value="<?=$recidivism->cual_reincidencia?>" class="form-control" placeholder="¿Cuál otro?">
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="sintoma" class="col-md-12">¿Presentó algún síntoma antes del diagnóstico (dolor, inflamación, cansancio, etc.)?</label>
									<div class="col-md-3">
										<label class="radio-inline">
											<input name="sintoma" value="0" <?=( isset($recidivism->sintoma) && $recidivism->sintoma==0)?'checked="checked"':'';?> type="radio">No
										</label>
										<label class="radio-inline">
											<input name="sintoma" value="1" <?=( isset($recidivism->sintoma) && $recidivism->sintoma==1)?'checked="checked"':'';?> type="radio">Si
										</label>
									</div>
									<div class="col-md-9">
										<input type="text" name="sintoma_cuales" value="<?=$recidivism->sintoma_cuales?>" class="form-control" placeholder="¿Cuál(es)?">
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="quimioterapia" class="col-md-12">¿Qué tipo de tratamiento recibe, recibió o recibirá?</label>
									<div class="col-md-12">
										<label class="checkbox-inline">
											<input name="quimioterapia" value="1" <?=( isset($recidivism->quimioterapia) && $recidivism->quimioterapia==1)?'checked="checked"':'';?> type="checkbox">Quimioterapia
										</label>
										<label class="checkbox-inline">
											<input name="radioterapia" value="1" <?=( isset($recidivism->radioterapia) && $recidivism->radioterapia==1)?'checked="checked"':'';?> type="checkbox">Radioterapia
										</label>
										<label class="checkbox-inline">
											<input name="cirugia" value="1" <?=( isset($recidivism->cirugia) && $recidivism->cirugia==1)?'checked="checked"':'';?> type="checkbox">Cirugía
										</label>
										<label class="checkbox-inline">
											<input name="paliativo" value="1" <?=( isset($recidivism->paliativo) && $recidivism->paliativo==1)?'checked="checked"':'';?> type="checkbox">Paliativo
										</label>
										<label class="checkbox-inline">
											<input name="otro_tratamiento" value="1" <?=( isset($recidivism->otro_tratamiento) && $recidivism->otro_tratamiento==1)?'checked="checked"':'';?> type="checkbox">Otro
										</label>
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-12">
										<input type="text" name="cual_tratamiento" value="<?=$recidivism->sintoma_cuales?>" class="form-control" placeholder="¿Cuál otro?">
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="tratamiento_tiempo" class="col-md-12">¿Recibió a tiempo su tratamiento?</label>
									<div class="radio">
										<div class="col-md-12">
											<label>
												<input name="tratamiento_tiempo" value="0" <?=( isset($recidivism->tratamiento_tiempo) && $recidivism->tratamiento_tiempo==0)?'checked="checked"':'';?> type="radio">Siempre
											</label>
											<label>
												<input name="tratamiento_tiempo" value="1" <?=( isset($recidivism->tratamiento_tiempo) && $recidivism->tratamiento_tiempo==1)?'checked="checked"':'';?> type="radio">Casi siempre
											</label>
											<label>
												<input name="tratamiento_tiempo" value="2" <?=( isset($recidivism->tratamiento_tiempo) && $recidivism->tratamiento_tiempo==2)?'checked="checked"':'';?> type="radio">Algunas veces
											</label>
											<label>
												<input name="tratamiento_tiempo" value="3" <?=( isset($recidivism->tratamiento_tiempo) && $recidivism->tratamiento_tiempo==3)?'checked="checked"':'';?> type="radio">Casi nunca
											</label>
											<label>
												<input name="tratamiento_tiempo" value="4" <?=( isset($recidivism->tratamiento_tiempo) && $recidivism->tratamiento_tiempo==4)?'checked="checked"':'';?> type="radio">Nunca
											</label>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="razon_tratamiento" class="col-md-12">En caso de que la respuesta anterior haya sido negativa, ¿Por qué razón no recibió el tratamiento?</label>
									<div class="col-md-12">
										<input type="text" name="razon_tratamiento" value="<?=$recidivism->razon_tratamiento?>" class="form-control" placeholder="En caso de que la respuesta anterior haya sido negativa, ¿Por qué razón no recibió el tratamiento?">
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