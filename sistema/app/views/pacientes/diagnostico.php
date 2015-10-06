<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php $this->load->view('header'); ?>
	<div class="container">
		<div class="row">
			<div class="col-md-12 padding-top-md">
				<div class="panel panel-purple">
					<div class="panel-heading">
						<h3 class="panel-title">Diagnóstico, tratamiento y sobrevida</h3>
					</div>
					<div class="panel-body">
						<?php 
							echo form_open( base_url().'add-diagnostic', array( 'class' => 'form-horizontal', 'id' => 'form_add_diagnostic', 'name' => 'form_add_diagnostic', 'method' => 'POST', 'role' => 'form', 'autocomplete' => 'off' ) );
							if(isset($diagnostic)){
								echo '<input name="edit" value="true" type="hidden">';
							} 
						?>
							<input name="id_patients" value="<?=$idPatient?>" type="hidden">
							<div class="col-md-12">
								<div class="form-group">
									<label for="exploracion_mamaria" class="col-md-12">Antes del diagnóstico ¿Usted alguna vez se realizó?</label>
									<div class="col-md-12">
										<div class="radio">
											<span class="group-option-title">Autoexploración mamaria</span>
											<label>
												<input name="exploracion_mamaria" value="0" <?=( isset($diagnostic->exploracion_mamaria) && $diagnostic->exploracion_mamaria==0)?'checked="checked"':'';?> type="radio">No
											</label>
											<label>
												<input name="exploracion_mamaria" value="1" <?=( isset($diagnostic->exploracion_mamaria) && $diagnostic->exploracion_mamaria==1)?'checked="checked"':'';?> type="radio">Si
											</label>
										</div>
										<div class="radio">
											<span class="group-option-title">Exploración clínica</span>
											<label>
												<input name="exploracion_clinica" value="0" <?=( isset($diagnostic->exploracion_clinica) && $diagnostic->exploracion_clinica==0)?'checked="checked"':'';?> type="radio">No
											</label>
											<label>
												<input name="exploracion_clinica" value="1" <?=( isset($diagnostic->exploracion_clinica) && $diagnostic->exploracion_clinica==1)?'checked="checked"':'';?> type="radio">Si
											</label>
										</div>
										<div class="radio">
											<span class="group-option-title">Ultrasonido mamario</span>
											<label>
												<input name="ultrasonido" value="0" <?=( isset($diagnostic->ultrasonido) && $diagnostic->ultrasonido==0)?'checked="checked"':'';?> type="radio">No
											</label>
											<label>
												<input name="ultrasonido" value="1" <?=( isset($diagnostic->ultrasonido) && $diagnostic->ultrasonido==1)?'checked="checked"':'';?> type="radio">Si
											</label>
										</div>
										<div class="radio">
											<span class="group-option-title">Mastografía</span>
											<label>
												<input name="mastografia" value="0" <?=( isset($diagnostic->mastografia) && $diagnostic->mastografia==0)?'checked="checked"':'';?> type="radio">No
											</label>
											<label>
												<input name="mastografia" value="1" <?=( isset($diagnostic->mastografia) && $diagnostic->mastografia==1)?'checked="checked"':'';?> type="radio">Si
											</label>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="imss" class="col-md-12">¿En qué Institución de Salud recibe atención médica?</label>
									<div class="col-md-12">
										<label class="checkbox-inline">
											<input name="imss" value="1" <?=( isset($diagnostic->imss) && $diagnostic->imss==1)?'checked="checked"':'';?> type="checkbox">IMSS
										</label>
										<label class="checkbox-inline">
											<input name="issste" value="1" <?=( isset($diagnostic->issste) && $diagnostic->issste==1)?'checked="checked"':'';?> type="checkbox">ISSSTE
										</label>
										<label class="checkbox-inline">
											<input name="popular" value="1" <?=( isset($diagnostic->popular) && $diagnostic->popular==1)?'checked="checked"':'';?> type="checkbox">Seguro Popular
										</label>
										<label class="checkbox-inline">
											<input name="privado" value="1" <?=( isset($diagnostic->privado) && $diagnostic->privado==1)?'checked="checked"':'';?> type="checkbox">Servicio Privado
										</label>
										<label class="checkbox-inline">
											<input name="seguro_otro" value="1" <?=( isset($diagnostic->seguro_otro) && $diagnostic->seguro_otro==1)?'checked="checked"':'';?> type="checkbox">Otro
										</label>
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-12">
										<input type="text" name="otro_seguro" class="form-control" value="<?=$diagnostic->otro_seguro?>" placeholder="¿Cuál otro?">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="hospital" class="col-md-12">¿En cuál Hospital o Clínica es atendida?</label>
									<div class="col-md-12">
										<input type="text" name="hospital" id="hospital" value="<?=$diagnostic->hospital?>" class="form-control" placeholder="¿En cuál Hospital o Clínica es atendida?">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="medico" class="col-md-12">¿Cuál es el nombre del médico tratante?</label>
									<div class="col-md-12">
										<input type="tel" name="medico" id="medico" value="<?=$diagnostic->medico?>" class="form-control" placeholder="¿Cuál es el nombre del médico tratante?">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="fecha_cancer" class="col-md-12">¿En qué fecha aproximadamente le dijeron que tenía cáncer? (DD/MM/AAAA)?</label>
									<div class="col-md-12">
										<input type="tel" name="fecha_cancer" id="fecha_cancer" value="<?=$diagnostic->fecha_cancer?>" class="datepicker form-control" placeholder="¿En qué fecha aproximadamente le dijeron que tenía cáncer? (DD/MM/AAAA)?">
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="rutina" class="col-md-12">¿De qué forma fue diagnosticada?</label>
									<div class="col-md-12">
										<label class="checkbox-inline">
											<input name="rutina" value="1" <?=( isset($diagnostic->rutina) && $diagnostic->rutina==1)?'checked="checked"':'';?> type="checkbox">Examen de rutina
										</label>
										<label class="checkbox-inline">
											<input name="campania" value="1" <?=( isset($diagnostic->campania) && $diagnostic->campania==1)?'checked="checked"':'';?> type="checkbox">En una campaña
										</label>
										<label class="checkbox-inline">
											<input name="yo" value="1" <?=( isset($diagnostic->yo) && $diagnostic->yo==1)?'checked="checked"':'';?> type="checkbox">Yo detecté algo anormal
										</label>
										<label class="checkbox-inline">
											<input name="forma_otro" value="1" <?=( isset($diagnostic->forma_otro) && $diagnostic->forma_otro==1)?'checked="checked"':'';?> type="checkbox">Otro
										</label>
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-12">
										<input type="text" name="forma" value="<?=$diagnostic->forma?>" class="form-control" placeholder="¿Cuál otra?">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="edad_diagnostico" class="col-md-12">¿Cuál era su edad al momento del diagnóstico?</label>
									<div class="col-md-12">
										<select name="edad_diagnostico" id="edad_diagnostico" class="form-control">
											<option value="">Edad</option>
											<?php 
												for($i=1;$i<=99;$i++){
													$selected = (isset($diagnostic->edad_diagnostico) && $diagnostic->edad_diagnostico==$i)?'selected':'';
													echo '<option val="'.$i.'" '.$selected.'>'.$i.'</option>';
												} 
											?>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="noticia" class="col-md-12">¿Qué fue lo primero que pensó cuando le dieron la noticia del cáncer?</label>
									<div class="col-md-12">
										<input type="text" name="noticia" id="noticia" value="<?=$diagnostic->noticia?>" class="form-control" placeholder="¿Qué fue lo primero que pensó cuando le dieron la noticia del cáncer?">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="tipo_cancer" class="col-md-12">¿Conoce su tipo de cáncer de mama?</label>
									<div class="col-md-12">
										<label class="radio-inline">
											<input name="tipo_cancer" value="0" <?=( isset($diagnostic->tipo_cancer) && $diagnostic->tipo_cancer==0)?'checked="checked"':'';?> type="radio">No sé
										</label>
										<label class="radio-inline">
											<input name="tipo_cancer" value="1" <?=( isset($diagnostic->tipo_cancer) && $diagnostic->tipo_cancer==1)?'checked="checked"':'';?> type="radio">ER+
										</label>
										<label class="radio-inline">
											<input name="tipo_cancer" value="2" <?=( isset($diagnostic->tipo_cancer) && $diagnostic->tipo_cancer==2)?'checked="checked"':'';?> type="radio">Her2
										</label>
										<label class="radio-inline">
											<input name="tipo_cancer" value="3" <?=( isset($diagnostic->tipo_cancer) && $diagnostic->tipo_cancer==3)?'checked="checked"':'';?> type="radio">Triple negativo
										</label>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="etapa_cancer" class="col-md-12">¿Conoce la etapa clínica en la que se le detectó el cáncer?</label>
									<div class="col-md-12">
										<label class="radio-inline">
											<input name="etapa_cancer" value="0" <?=( isset($diagnostic->etapa_cancer) && $diagnostic->etapa_cancer==0)?'checked="checked"':'';?> type="radio">No sé
										</label>
										<label class="radio-inline">
											<input name="etapa_cancer" value="1" <?=( isset($diagnostic->etapa_cancer) && $diagnostic->etapa_cancer==1)?'checked="checked"':'';?> type="radio">Etapa 1
										</label>
										<label class="radio-inline">
											<input name="etapa_cancer" value="2" <?=( isset($diagnostic->etapa_cancer) && $diagnostic->etapa_cancer==2)?'checked="checked"':'';?> type="radio">Etapa 2
										</label>
										<label class="radio-inline">
											<input name="etapa_cancer" value="3" <?=( isset($diagnostic->etapa_cancer) && $diagnostic->etapa_cancer==3)?'checked="checked"':'';?> type="radio">Etapa 3
										</label>
										<label class="radio-inline">
											<input name="etapa_cancer" value="4" <?=( isset($diagnostic->etapa_cancer) && $diagnostic->etapa_cancer==4)?'checked="checked"':'';?> type="radio">Etapa 4
										</label>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="fecha_tratamiento" class="col-md-12">¿En qué fecha aproximadamente inicio el tratamiento? (DD/MM/AAAA)</label>
									<div class="col-md-12">
										<input type="text" name="fecha_tratamiento" id="fecha_tratamiento" value="<?=$diagnostic->fecha_tratamiento?>" class="datepicker form-control" placeholder="¿En qué fecha aproximadamente inicio el tratamiento? (DD/MM/AAAA)">
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="tipo_tratamiento" class="col-md-12">¿Qué tipo de tratamiento recibe, recibió o recibirá?</label>
									<div class="col-md-12">
										<div class="radio">
											<span class="group-option-title">Cirugía</span>
											<label>
												<input name="tipo_tratamiento" value="0" <?=( isset($diagnostic->tipo_tratamiento) && $diagnostic->tipo_tratamiento==0)?'checked="checked"':'';?> type="radio">Primer lugar
											</label>
											<label>
												<input name="tipo_tratamiento" value="1" <?=( isset($diagnostic->tipo_tratamiento) && $diagnostic->tipo_tratamiento==1)?'checked="checked"':'';?> type="radio">Segundo lugar
											</label>
											<label>
												<input name="tipo_tratamiento" value="2" <?=( isset($diagnostic->tipo_tratamiento) && $diagnostic->tipo_tratamiento==2)?'checked="checked"':'';?> type="radio">Tercer lugar
											</label>
										</div>
										<div class="radio">
											<span class="group-option-title">Quimioterapia</span>
											<label>
												<input name="quimioterapia" value="0" <?=( isset($diagnostic->quimioterapia) && $diagnostic->quimioterapia==0)?'checked="checked"':'';?> type="radio">Primer lugar
											</label>
											<label>
												<input name="quimioterapia" value="1" <?=( isset($diagnostic->quimioterapia) && $diagnostic->quimioterapia==1)?'checked="checked"':'';?> type="radio">Segundo lugar
											</label>
											<label>
												<input name="quimioterapia" value="2" <?=( isset($diagnostic->quimioterapia) && $diagnostic->quimioterapia==2)?'checked="checked"':'';?> type="radio">Tercer lugar
											</label>
										</div>
										<div class="radio">
											<span class="group-option-title">Radioterapia</span>
											<label>
												<input name="radioterapia" value="0" <?=( isset($diagnostic->radioterapia) && $diagnostic->radioterapia==0)?'checked="checked"':'';?> type="radio">Primer lugar
											</label>
											<label>
												<input name="radioterapia" value="1" <?=( isset($diagnostic->radioterapia) && $diagnostic->radioterapia==1)?'checked="checked"':'';?> type="radio">Segundo lugar
											</label>
											<label>
												<input name="radioterapia" value="2" <?=( isset($diagnostic->radioterapia) && $diagnostic->radioterapia==2)?'checked="checked"':'';?> type="radio">Tercer lugar
											</label>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="cirugia_nose" class="col-md-12">Si le realizaron una cirugía, ¿De qué tipo fue?</label>
									<div class="col-md-12">
										<label class="checkbox-inline">
											<input name="cirugia_nose" value="1" <?=( isset($diagnostic->cirugia_nose) && $diagnostic->cirugia_nose==1)?'checked="checked"':'';?> type="checkbox">No sé
										</label>
										<label class="checkbox-inline">
											<input name="cirugia_tumorectomia" value="1" <?=( isset($diagnostic->cirugia_tumorectomia) && $diagnostic->cirugia_tumorectomia==1)?'checked="checked"':'';?> type="checkbox">Tumorectomía
										</label>
										<label class="checkbox-inline">
											<input name="cirugia_cuadrantectomia" value="1" <?=( isset($diagnostic->cirugia_cuadrantectomia) && $diagnostic->cirugia_cuadrantectomia==1)?'checked="checked"':'';?> type="checkbox">Cuadrantectomía
										</label>
										<label class="checkbox-inline">
											<input name="cirugia_masectomia" value="1" <?=( isset($diagnostic->cirugia_masectomia) && $diagnostic->cirugia_masectomia==1)?'checked="checked"':'';?> type="checkbox">Masectomía
										</label>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="numero_ganglios" class="col-md-12">¿Sabe cuántos ganglios le quitaron?</label>
									<div class="col-md-12">
										<label class="radio-inline">
											<input name="numero_ganglios" value="0" <?=( isset($diagnostic->numero_ganglios) && $diagnostic->numero_ganglios==0)?'checked="checked"':'';?> type="radio">No
										</label>
										<label class="radio-inline">
											<input name="numero_ganglios" value="1" <?=( isset($diagnostic->numero_ganglios) && $diagnostic->numero_ganglios==1)?'checked="checked"':'';?> type="radio">Si, menos de 10
										</label>
										<label class="radio-inline">
											<input name="numero_ganglios" value="2" <?=( isset($diagnostic->numero_ganglios) && $diagnostic->numero_ganglios==2)?'checked="checked"':'';?> type="radio">Si, más de 10
										</label>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="cuidados" class="col-md-12">¿Le explicaron los cuidados que debe tener con su brazo después de la cirugía?</label>
									<div class="col-md-12">
										<label class="radio-inline">
											<input name="cuidados" value="0" <?=( isset($diagnostic->cuidados) && $diagnostic->cuidados==0)?'checked="checked"':'';?> type="radio">No
										</label>
										<label class="radio-inline">
											<input name="cuidados" value="1" <?=( isset($diagnostic->cuidados) && $diagnostic->cuidados==1)?'checked="checked"':'';?> type="radio">Si
										</label>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="linfedema" class="col-md-12">¿Sabe que es el linfedema?</label>
									<div class="col-md-12">
										<label class="radio-inline">
											<input name="linfedema" value="0" <?=( isset($diagnostic->linfedema) && $diagnostic->linfedema==0)?'checked="checked"':'';?> type="radio">No
										</label>
										<label class="radio-inline">
											<input name="linfedema" value="1" <?=( isset($diagnostic->linfedema) && $diagnostic->linfedema==1)?'checked="checked"':'';?> type="radio">Si
										</label>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="terapia" class="col-md-12">¿Ha recibido servicio de terapia física para su brazo?</label>
									<div class="col-md-3">
										<label class="radio-inline">
											<input name="terapia" value="0" <?=( isset($diagnostic->terapia) && $diagnostic->terapia==0)?'checked="checked"':'';?> type="radio">No
										</label>
										<label class="radio-inline">
											<input name="terapia" value="1" <?=( isset($diagnostic->terapia) && $diagnostic->terapia==1)?'checked="checked"':'';?> type="radio">Si
										</label>
									</div>
									<div class="col-md-9">
										<input type="text" name="donde_terapia" value="<?=$diagnostic->donde_terapia?>" class="form-control" placeholder="¿Dónde?">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="manga" class="col-md-12">¿Usa o usó manga de compresión?</label>
									<div class="col-md-12">
										<label class="radio-inline">
											<input name="manga" value="0" <?=( isset($diagnostic->manga) && $diagnostic->manga==0)?'checked="checked"':'';?> type="radio">No
										</label>
										<label class="radio-inline">
											<input name="manga" value="1" <?=( isset($diagnostic->manga) && $diagnostic->manga==1)?'checked="checked"':'';?> type="radio">Si
										</label>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="protesis" class="col-md-12">¿Le explicaron la importancia de utilizar una prótesis después de la cirugía?</label>
									<div class="col-md-12">
										<label class="radio-inline">
											<input name="protesis" value="0" <?=( isset($diagnostic->protesis) && $diagnostic->protesis==0)?'checked="checked"':'';?> type="radio">No
										</label>
										<label class="radio-inline">
											<input name="protesis" value="1" <?=( isset($diagnostic->protesis) && $diagnostic->protesis==1)?'checked="checked"':'';?> type="radio">Si
										</label>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="protesis_externa" class="col-md-12">¿Utiliza prótesis externa?</label>
									<div class="col-md-3">
										<label class="radio-inline">
											<input name="protesis_externa" value="0" <?=( isset($diagnostic->protesis_externa) && $diagnostic->protesis_externa==0)?'checked="checked"':'';?>  type="radio">No
										</label>
										<label class="radio-inline">
											<input name="protesis_externa" value="1" <?=( isset($diagnostic->protesis_externa) && $diagnostic->protesis_externa==1)?'checked="checked"':'';?>  type="radio">Si
										</label>
									</div>
									<div class="col-md-9">
										<input type="text" name="material" value="<?=$diagnostic->material?>" class="form-control" placeholder="¿De qué material?">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="terapia_hormanal" class="col-md-12">¿Recibe o recibió terapia hormonal?</label>
									<div class="col-md-3">
										<label class="radio-inline">
											<input name="terapia_hormanal" value="0" <?=( isset($diagnostic->terapia_hormanal) && $diagnostic->terapia_hormanal==0)?'checked="checked"':'';?> type="radio">No
										</label>
										<label class="radio-inline">
											<input name="terapia_hormanal" value="1" <?=( isset($diagnostic->terapia_hormanal) && $diagnostic->terapia_hormanal==1)?'checked="checked"':'';?> type="radio">Si
										</label>
									</div>
									<div class="col-md-9">
										<input type="text" name="medicamento_hormonal" value="<?=$diagnostic->medicamento_hormonal?>" class="form-control" placeholder="¿Cuál medicamento?">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="actividades" class="col-md-12">¿Ha dejado de hacer sus actividades cotidianas a causa de la enfermedad?</label>
									<div class="col-md-3">
										<label class="radio-inline">
											<input name="actividades" value="0" <?=( isset($diagnostic->actividades) && $diagnostic->actividades==0)?'checked="checked"':'';?> type="radio">No
										</label>
										<label class="radio-inline">
											<input name="actividades" value="1" <?=( isset($diagnostic->actividades) && $diagnostic->actividades==1)?'checked="checked"':'';?> type="radio">Si
										</label>
									</div>
									<div class="col-md-9">
										<input type="text" name="cual_actividad" value="<?=$diagnostic->cual_actividad?>" class="form-control" placeholder="¿Cuáles?">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="ayuda_actividad" class="col-md-12">¿Alguien le ha ayudado a realizar esas actividades ahora que está enferma?</label>
									<div class="col-md-3">
										<label class="radio-inline">
											<input name="ayuda_actividad" <?=( isset($diagnostic->ayuda_actividad) && $diagnostic->ayuda_actividad==0)?'checked="checked"':'';?> value="0" type="radio">No
										</label>
										<label class="radio-inline">
											<input name="ayuda_actividad" <?=( isset($diagnostic->ayuda_actividad) && $diagnostic->ayuda_actividad==1)?'checked="checked"':'';?> value="1" type="radio">Si
										</label>
									</div>
									<div class="col-md-9">
										<input type="text" name="quien_ayuda" value="<?=$diagnostic->quien_ayuda?>" class="form-control" placeholder="¿Quién?">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="tiempo_hospital" class="col-md-12">¿Cuánto tiempo le toma llegar desde donde vive hasta el Hospital?</label>
									<div class="col-md-12">
										<input type="text" name="tiempo_hospital" value="<?=$diagnostic->tiempo_hospital?>" class="form-control" placeholder="¿Cuánto tiempo le toma llegar desde donde vive hasta el Hospital?">
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="medio_transporte" class="col-md-12">¿En qué medio de transporte se traslada al Hospital y aproximadamente cuánto gasta en ida y vuelta?</label>
									<div class="col-md-12">
										<input type="text" name="medio_transporte" value="<?=$diagnostic->medio_transporte?>" class="form-control" placeholder="¿En qué medio de transporte se traslada al Hospital y aproximadamente cuánto gasta en ida y vuelta?">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="ayuda_economica" class="col-md-12">¿Quién(es) le han ayudado económicamente para pagar su tratamiento?</label>
									<div class="col-md-12">
										<input type="text" name="ayuda_economica" value="<?=$diagnostic->ayuda_economica?>" class="form-control" placeholder="¿Quién(es) le han ayudado económicamente para pagar su tratamiento?">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="prestamo" class="col-md-12">¿Ha tenido que pedir dinero prestado para poder continuar su atención médica?</label>
									<div class="col-md-3">
										<label class="radio-inline">
											<input name="prestamo" value="0" <?=( isset($diagnostic->prestamo) && $diagnostic->prestamo==0)?'checked="checked"':'';?> type="radio">No
										</label>
										<label class="radio-inline">
											<input name="prestamo" value="1" <?=( isset($diagnostic->prestamo) && $diagnostic->prestamo==1)?'checked="checked"':'';?> type="radio">Si
										</label>
									</div>
									<div class="col-md-9">
										<input type="text" name="casos_prestamo" value="<?=$diagnostic->casos_prestamo?>" class="form-control" placeholder="¿En qué casos?">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="ejercicio" class="col-md-12">¿Realiza actividad física o ejercicio?</label>
									<div class="col-md-3">
										<label class="radio-inline">
											<input name="ejercicio" value="0" <?=( isset($diagnostic->ejercicio) && $diagnostic->ejercicio==0)?'checked="checked"':'';?> type="radio">No
										</label>
										<label class="radio-inline">
											<input name="ejercicio" value="1" <?=( isset($diagnostic->ejercicio) && $diagnostic->ejercicio==1)?'checked="checked"':'';?> type="radio">Si
										</label>
									</div>
									<div class="col-md-9">
										<input type="text" name="cual_ejercicio" value="<?=$diagnostic->cual_ejercicio?>" class="form-control" placeholder="¿Cuál?, ¿Cuándo?">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="mas_peso" class="col-md-12">¿Considera que ha subido de peso a causa del tratamiento?</label>
									<div class="col-md-12">
										<label class="radio-inline">
											<input name="mas_peso" value="0" <?=( isset($diagnostic->mas_peso) && $diagnostic->mas_peso==0)?'checked="checked"':'';?> type="radio">No
										</label>
										<label class="radio-inline">
											<input name="mas_peso" value="1" <?=( isset($diagnostic->mas_peso) && $diagnostic->mas_peso==1)?'checked="checked"':'';?> type="radio">Si
										</label>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="nutriologo" class="col-md-12">¿La refirieron con un nutriólogo?</label>
									<div class="col-md-3">
										<label class="radio-inline">
											<input name="nutriologo" value="0" <?=( isset($diagnostic->nutriologo) && $diagnostic->nutriologo==0)?'checked="checked"':'';?> type="radio">No
										</label>
										<label class="radio-inline">
											<input name="nutriologo" value="1" <?=( isset($diagnostic->nutriologo) && $diagnostic->nutriologo==1)?'checked="checked"':'';?> type="radio">Si
										</label>
									</div>
									<div class="col-md-9">
										<input type="text" name="que_nutriologo" value="<?=$diagnostic->que_nutriologo?>" class="form-control" placeholder="¿Con qué médico?">
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="habitos_alimenticios" class="col-md-12">¿Cómo considera sus hábitos alimenticios?</label>
									<div class="col-md-12">
										<label class="radio-inline">
											<input name="habitos_alimenticios" value="0" <?=( isset($diagnostic->habitos_alimenticios) && $diagnostic->habitos_alimenticios==0)?'checked="checked"':'';?> type="radio">Excelente
										</label>
										<label class="radio-inline">
											<input name="habitos_alimenticios" value="1" <?=( isset($diagnostic->habitos_alimenticios) && $diagnostic->habitos_alimenticios==1)?'checked="checked"':'';?> type="radio">Muy bueno
										</label>
										<label class="radio-inline">
											<input name="habitos_alimenticios" value="2" <?=( isset($diagnostic->habitos_alimenticios) && $diagnostic->habitos_alimenticios==2)?'checked="checked"':'';?> type="radio">Bueno
										</label>
										<label class="radio-inline">
											<input name="habitos_alimenticios" value="3" <?=( isset($diagnostic->habitos_alimenticios) && $diagnostic->habitos_alimenticios==3)?'checked="checked"':'';?> type="radio">Regular
										</label>
										<label class="radio-inline">
											<input name="habitos_alimenticios" value="4" <?=( isset($diagnostic->habitos_alimenticios) && $diagnostic->habitos_alimenticios==4)?'checked="checked"':'';?> type="radio">Malo
										</label>
										<label class="radio-inline">
											<input name="habitos_alimenticios" value="5" <?=( isset($diagnostic->habitos_alimenticios) && $diagnostic->habitos_alimenticios==5)?'checked="checked"':'';?> type="radio">Muy malo
										</label>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="recontruirse" class="col-md-12">¿Le dieron la opción de reconstruirse tras la cirugía?</label>
									<div class="col-md-12">
										<label class="radio-inline">
											<input name="recontruirse" value="0" <?=( isset($diagnostic->recontruirse) && $diagnostic->recontruirse==0)?'checked="checked"':'';?> type="radio">No
										</label>
										<label class="radio-inline">
											<input name="recontruirse" value="1" <?=( isset($diagnostic->recontruirse) && $diagnostic->recontruirse==1)?'checked="checked"':'';?> type="radio">Si
										</label>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="apoyo_emocional" class="col-md-12">Durante su tratamiento en el Hospital, ¿Le ofrecieron apoyo emocional o terapia psicológica?</label>
									<div class="col-md-3">
										<label class="radio-inline">
											<input name="apoyo_emocional" value="0" <?=( isset($diagnostic->apoyo_emocional) && $diagnostic->apoyo_emocional==0)?'checked="checked"':'';?> type="radio">No
										</label>
										<label class="radio-inline">
											<input name="apoyo_emocional" value="1" <?=( isset($diagnostic->apoyo_emocional) && $diagnostic->apoyo_emocional==1)?'checked="checked"':'';?> type="radio">Si
										</label>
									</div>
									<div class="col-md-9">
										<input type="text" name="donde_apoyo_emocional" value="<?=$diagnostic->donde_apoyo_emocional?>" class="form-control" placeholder="¿Dónde?">
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="medicamento" class="col-md-12">Recibe medicamento para dormir, ansiedad o depresión</label>
									<div class="col-md-12">
										<label class="radio-inline">
											<input name="medicamento" value="0" <?=( isset($diagnostic->medicamento) && $diagnostic->medicamento==0)?'checked="checked"':'';?> type="radio">No
										</label>
										<label class="radio-inline">
											<input name="medicamento" value="1" <?=( isset($diagnostic->medicamento) && $diagnostic->medicamento==1)?'checked="checked"':'';?> type="radio">Si
										</label>
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-6">
										<input type="text" name="cual_medicamento" value="<?=$diagnostic->cual_medicamento?>" class="form-control" placeholder="¿Cuál medicamento?">
									</div>
									<div class="col-md-6">
										<input type="text" name="tiempo_medicamento" value="<?=$diagnostic->tiempo_medicamento?>" class="form-control" placeholder="¿Cuánto tiempo?">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="medico_medicamento" class="col-md-12">¿Qué médico le indicó ese medicamento?</label>
									<div class="col-md-12">
										<input type="text" name="medico_medicamento" value="<?=$diagnostic->medico_medicamento?>" class="form-control" placeholder="¿Qué médico le indicó ese medicamento?">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="terapia_alternativa" class="col-md-12">¿Recibe algún tipo de terapia alternativa?</label>
									<div class="col-md-3">
										<label class="radio-inline">
											<input name="terapia_alternativa" value="0" <?=( isset($diagnostic->terapia_alternativa) && $diagnostic->terapia_alternativa==0)?'checked="checked"':'';?> type="radio">No
										</label>
										<label class="radio-inline">
											<input name="terapia_alternativa" value="1" <?=( isset($diagnostic->terapia_alternativa) && $diagnostic->terapia_alternativa==1)?'checked="checked"':'';?> type="radio">Si
										</label>
									</div>
									<div class="col-md-9">
										<input type="text" name="cual_terapia_alternativa" value="<?=$diagnostic->cual_terapia_alternativa?>" class="form-control" placeholder="¿Cuál?">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="derechos" class="col-md-12">¿Conoce sus derechos como paciente?</label>
									<div class="col-md-12">
										<label class="radio-inline">
											<input name="derechos" value="0" <?=( isset($diagnostic->derechos) && $diagnostic->derechos==0)?'checked="checked"':'';?> type="radio">No
										</label>
										<label class="radio-inline">
											<input name="derechos" value="1" <?=( isset($diagnostic->derechos) && $diagnostic->derechos==1)?'checked="checked"':'';?> type="radio">Si
										</label>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="derechos_violados" class="col-md-12">¿Siente que sus derechos como pacientes han sido violados?</label>
									<div class="col-md-3">
										<label class="radio-inline">
											<input name="derechos_violados" value="0" <?=( isset($diagnostic->derechos_violados) && $diagnostic->derechos_violados==0)?'checked="checked"':'';?> type="radio">No
										</label>
										<label class="radio-inline">
											<input name="derechos_violados" value="1" <?=( isset($diagnostic->derechos_violados) && $diagnostic->derechos_violados==1)?'checked="checked"':'';?> type="radio">Si
										</label>
									</div>
									<div class="col-md-9">
										<input type="text" name="razon_derechos_violados" value="<?=$diagnostic->razon_derechos_violados?>" class="form-control" placeholder="¿Explique la razón?">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="queja" class="col-md-12">¿Levantó una queja?</label>
									<div class="col-md-3">
										<label class="radio-inline">
											<input name="queja" value="0" <?=( isset($diagnostic->queja) && $diagnostic->queja==0)?'checked="checked"':'';?> type="radio">No
										</label>
										<label class="radio-inline">
											<input name="queja" value="1" <?=( isset($diagnostic->queja) && $diagnostic->queja==1)?'checked="checked"':'';?> type="radio">Si
										</label>
									</div>
									<div class="col-md-9">
										<input type="text" name="porque_queja" value="<?=$diagnostic->porque_queja?>" class="form-control" placeholder="¿Por qué?">
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="remision_fecha_tratamiento" class="col-md-12">En caso de que se encuentre en remisión, ¿En qué fecha aproximadamente terminó el tratamiento clínico? (DD/MM/AAAA)</label>
									<div class="col-md-12">
										<input type="text" name="remision_fecha_tratamiento" value="<?=$diagnostic->remision_fecha_tratamiento?>" class="datepicker form-control" placeholder="En caso de que se encuentre en remisión, ¿En qué fecha aproximadamente terminó el tratamiento clínico? (DD/MM/AAAA)">
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