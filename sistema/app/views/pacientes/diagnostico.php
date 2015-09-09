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
						<?php echo form_open( 'add-patient', [ 'class' => 'form-horizontal', 'id' => 'form_add_patient', 'name' => 'form_add_patient', 'method' => 'POST', 'role' => 'form', 'autocomplete' => 'off' ] ); ?>
							<div class="col-md-12">
								<div class="form-group">
									<label for="" class="col-md-12">Antes del diagnóstico ¿Usted alguna vez se realizó?</label>
									<div class="col-md-12">
										<div class="radio">
											<span class="group-option-title">Autoexploración mamaria</span>
											<label>
												<input name="b_aut_mamaria" value="0" type="radio">No
											</label>
											<label>
												<input name="b_aut_mamaria" value="1" type="radio">Si
											</label>
										</div>
										<div class="radio">
											<span class="group-option-title">Exploración clínica</span>
											<label>
												<input name="b_exp_clinica" value="0" type="radio">No
											</label>
											<label>
												<input name="b_exp_clinica" value="1" type="radio">Si
											</label>
										</div>
										<div class="radio">
											<span class="group-option-title">Ultrasonido mamario</span>
											<label>
												<input name="b_ultrasonido" value="0" type="radio">No
											</label>
											<label>
												<input name="b_ultrasonido" value="1" type="radio">Si
											</label>
										</div>
										<div class="radio">
											<span class="group-option-title">Mastografía</span>
											<label>
												<input name="b_mastografia" value="0" type="radio">No
											</label>
											<label>
												<input name="b_mastografia" value="1" type="radio">Si
											</label>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="" class="col-md-12">¿En qué Institución de Salud recibe atención médica?</label>
									<div class="col-md-12">
										<label class="checkbox-inline">
											<input name="imss" value="1" type="checkbox">IMSS
										</label>
										<label class="checkbox-inline">
											<input name="issste" value="1" type="checkbox">ISSSTE
										</label>
										<label class="checkbox-inline">
											<input name="popular" value="1" type="checkbox">Seguro Popular
										</label>
										<label class="checkbox-inline">
											<input name="privado" value="1" type="checkbox">Servicio Privado
										</label>
										<label class="checkbox-inline">
											<input name="seguro_otro" value="1" type="checkbox">Otro
										</label>
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-12">
										<input type="text" name="otro_seguro" class="form-control" placeholder="¿Cuál otra?">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="hospital" class="col-md-12">¿En cuál Hospital o Clínica es atendida?</label>
									<div class="col-md-12">
										<input type="text" name="hospital" id="hospital" class="form-control" placeholder="¿En cuál Hospital o Clínica es atendida?">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="medico" class="col-md-12">¿Cuál es el nombre del médico tratante?</label>
									<div class="col-md-12">
										<input type="tel" name="medico" id="medico" class="form-control" placeholder="¿Cuál es el nombre del médico tratante?">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="fecha_cancer" class="col-md-12">¿En qué fecha aproximadamente le dijeron que tenía cáncer? (DD/MM/AA)?</label>
									<div class="col-md-12">
										<input type="tel" name="fecha_cancer" id="fecha_cancer" class="form-control" placeholder="¿En qué fecha aproximadamente le dijeron que tenía cáncer? (DD/MM/AA)?">
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="" class="col-md-12">¿De qué forma fue diagnosticada?</label>
									<div class="col-md-12">
										<label class="checkbox-inline">
											<input name="rutina" value="1" type="checkbox">Examen de rutina
										</label>
										<label class="checkbox-inline">
											<input name="campaña" value="1" type="checkbox">En una campaña
										</label>
										<label class="checkbox-inline">
											<input name="yo" value="1" type="checkbox">Yo detecté algo anormal
										</label>
										<label class="checkbox-inline">
											<input name="forma_otro" value="1" type="checkbox">Otro
										</label>
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-12">
										<input type="text" name="forma" class="form-control" placeholder="¿Cuál otra?">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="edad_diagnostico" class="col-md-12">¿Cuál era su edad al momento del diagnóstico?</label>
									<div class="col-md-12">
										<select name="edad_diagnostico" id="edad_diagnostico" class="form-control">
											<option value="0">Edad</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="noticia" class="col-md-12">¿Qué fue lo primero que pensó cuando le dieron la noticia del cáncer?</label>
									<div class="col-md-12">
										<input type="text" name="noticia" id="noticia" class="form-control" placeholder="¿Qué fue lo primero que pensó cuando le dieron la noticia del cáncer?">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="tipo_cancer" class="col-md-12">¿Conoce su tipo de cáncer de mama?</label>
									<div class="col-md-12">
										<label class="radio-inline">
											<input name="tipo_cancer" vlaue="0" type="radio">No sé
										</label>
										<label class="radio-inline">
											<input name="tipo_cancer" vlaue="1" type="radio">ER+
										</label>
										<label class="radio-inline">
											<input name="tipo_cancer" vlaue="2" type="radio">Her2
										</label>
										<label class="radio-inline">
											<input name="tipo_cancer" vlaue="3" type="radio">Triple negativo
										</label>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="etapa_cancer" class="col-md-12">¿Conoce la etapa clínica en la que se le detectó el cáncer?</label>
									<div class="col-md-12">
										<label class="radio-inline">
											<input name="etapa_cancer" vlaue="0" type="radio">No sé
										</label>
										<label class="radio-inline">
											<input name="etapa_cancer" vlaue="1" type="radio">Etapa 1
										</label>
										<label class="radio-inline">
											<input name="etapa_cancer" vlaue="2" type="radio">Etapa 2
										</label>
										<label class="radio-inline">
											<input name="etapa_cancer" vlaue="3" type="radio">Etapa 3
										</label>
										<label class="radio-inline">
											<input name="etapa_cancer" vlaue="4" type="radio">Etapa 4
										</label>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="fecha_tratamiento" class="col-md-12">¿En qué fecha aproximadamente inicio el tratamiento? (DD/MM/AA)</label>
									<div class="col-md-12">
										<input type="text" name="fecha_tratamiento" id="fecha_tratamiento" class="form-control" placeholder="¿En qué fecha aproximadamente inicio el tratamiento? (DD/MM/AA)">
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
												<input name="tipo_tratamiento" value="0" type="radio">Primer lugar
											</label>
											<label>
												<input name="tipo_tratamiento" value="1" type="radio">Segundo lugar
											</label>
											<label>
												<input name="tipo_tratamiento" value="2" type="radio">Tercer lugar
											</label>
										</div>
										<div class="radio">
											<span class="group-option-title">Quimioterapia</span>
											<label>
												<input name="quimioterapia" value="0" type="radio">Primer lugar
											</label>
											<label>
												<input name="quimioterapia" value="1" type="radio">Segundo lugar
											</label>
											<label>
												<input name="quimioterapia" value="2" type="radio">Tercer lugar
											</label>
										</div>
										<div class="radio">
											<span class="group-option-title">Radioterapia</span>
											<label>
												<input name="radioterapia" value="0" type="radio">Primer lugar
											</label>
											<label>
												<input name="radioterapia" value="0" type="radio">Segundo lugar
											</label>
											<label>
												<input name="radioterapia" value="0" type="radio">Tercer lugar
											</label>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="" class="col-md-12">Si le realizaron una cirugía, ¿De qué tipo fue?</label>
									<div class="col-md-12">
										<label class="checkbox-inline">
											<input type="checkbox">No sé
										</label>
										<label class="checkbox-inline">
											<input type="checkbox">Tumorectomía
										</label>
										<label class="checkbox-inline">
											<input type="checkbox">Cuadrantectomía
										</label>
										<label class="checkbox-inline">
											<input type="checkbox">Masectomía
										</label>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="" class="col-md-12">¿Sabe cuántos ganglios le quitaron?</label>
									<div class="col-md-12">
										<label class="radio-inline">
											<input type="radio">No
										</label>
										<label class="radio-inline">
											<input type="radio">Si, menos de 10
										</label>
										<label class="radio-inline">
											<input type="radio">Si, más de 10
										</label>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="" class="col-md-12">¿Le explicaron los cuidados que debe tener con su brazo después de la cirugía?</label>
									<div class="col-md-12">
										<label class="radio-inline">
											<input type="radio">No
										</label>
										<label class="radio-inline">
											<input type="radio">Si
										</label>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="" class="col-md-12">¿Sabe que es el linfedema?</label>
									<div class="col-md-12">
										<label class="radio-inline">
											<input type="radio">No
										</label>
										<label class="radio-inline">
											<input type="radio">Si
										</label>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="" class="col-md-12">¿Ha recibido servicio de terapia física para su brazo?</label>
									<div class="col-md-3">
										<label class="radio-inline">
											<input type="radio">No
										</label>
										<label class="radio-inline">
											<input type="radio">Si
										</label>
									</div>
									<div class="col-md-9">
										<input type="text" class="form-control" placeholder="¿Dónde?">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="" class="col-md-12">¿Usa o usó manga de compresión?</label>
									<div class="col-md-12">
										<label class="radio-inline">
											<input type="radio">No
										</label>
										<label class="radio-inline">
											<input type="radio">Si
										</label>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="" class="col-md-12">¿Le explicaron la importancia de utilizar una prótesis después de la cirugía?</label>
									<div class="col-md-12">
										<label class="radio-inline">
											<input type="radio">No
										</label>
										<label class="radio-inline">
											<input type="radio">Si
										</label>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="" class="col-md-12">¿Utiliza prótesis externa?</label>
									<div class="col-md-3">
										<label class="radio-inline">
											<input type="radio">No
										</label>
										<label class="radio-inline">
											<input type="radio">Si
										</label>
									</div>
									<div class="col-md-9">
										<input type="text" class="form-control" placeholder="¿De qué material?">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="" class="col-md-12">¿Recibe o recibió terapia hormonal?</label>
									<div class="col-md-3">
										<label class="radio-inline">
											<input type="radio">No
										</label>
										<label class="radio-inline">
											<input type="radio">Si
										</label>
									</div>
									<div class="col-md-9">
										<input type="text" class="form-control" placeholder="¿Cuál medicamento?">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="" class="col-md-12">¿Ha dejado de hacer sus actividades cotidianas a causa de la enfermedad?</label>
									<div class="col-md-3">
										<label class="radio-inline">
											<input type="radio">No
										</label>
										<label class="radio-inline">
											<input type="radio">Si
										</label>
									</div>
									<div class="col-md-9">
										<input type="text" class="form-control" placeholder="¿Cuáles?">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="" class="col-md-12">¿Alguien le ha ayudado a realizar esas actividades ahora que está enferma?</label>
									<div class="col-md-3">
										<label class="radio-inline">
											<input type="radio">No
										</label>
										<label class="radio-inline">
											<input type="radio">Si
										</label>
									</div>
									<div class="col-md-9">
										<input type="text" class="form-control" placeholder="¿Quién?">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="" class="col-md-12">¿Cuánto tiempo le toma llegar desde donde vive hasta el Hospital?</label>
									<div class="col-md-12">
										<input type="text" class="form-control" placeholder="¿Cuánto tiempo le toma llegar desde donde vive hasta el Hospital?">
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="" class="col-md-12">¿En qué medio de transporte se traslada al Hospital y aproximadamente cuánto gasta en ida y vuelta?</label>
									<div class="col-md-12">
										<input type="text" class="form-control" placeholder="¿En qué medio de transporte se traslada al Hospital y aproximadamente cuánto gasta en ida y vuelta?">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="" class="col-md-12">¿Quién(es) le han ayudado económicamente para pagar su tratamiento?</label>
									<div class="col-md-12">
										<input type="text" class="form-control" placeholder="¿Quién(es) le han ayudado económicamente para pagar su tratamiento?">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="" class="col-md-12">¿Ha tenido que pedir dinero prestado para poder continuar su atención médica?</label>
									<div class="col-md-3">
										<label class="radio-inline">
											<input type="radio">No
										</label>
										<label class="radio-inline">
											<input type="radio">Si
										</label>
									</div>
									<div class="col-md-9">
										<input type="text" class="form-control" placeholder="¿En qué casos?">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="" class="col-md-12">¿Realiza actividad física o ejercicio?</label>
									<div class="col-md-3">
										<label class="radio-inline">
											<input type="radio">No
										</label>
										<label class="radio-inline">
											<input type="radio">Si
										</label>
									</div>
									<div class="col-md-9">
										<input type="text" class="form-control" placeholder="¿Cuál?, ¿Cuándo?">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="" class="col-md-12">¿Considera que ha subido de peso a causa del tratamiento?</label>
									<div class="col-md-12">
										<label class="radio-inline">
											<input type="radio">No
										</label>
										<label class="radio-inline">
											<input type="radio">Si
										</label>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="" class="col-md-12">¿La refirieron con un nutriólogo?</label>
									<div class="col-md-3">
										<label class="radio-inline">
											<input type="radio">No
										</label>
										<label class="radio-inline">
											<input type="radio">Si
										</label>
									</div>
									<div class="col-md-9">
										<input type="text" class="form-control" placeholder="¿Con qué médico?">
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="" class="col-md-12">¿Cómo considera sus hábitos alimenticios?</label>
									<div class="col-md-12">
										<label class="radio-inline">
											<input type="radio">Excelente
										</label>
										<label class="radio-inline">
											<input type="radio">Muy bueno
										</label>
										<label class="radio-inline">
											<input type="radio">Bueno
										</label>
										<label class="radio-inline">
											<input type="radio">Regular
										</label>
										<label class="radio-inline">
											<input type="radio">Malo
										</label>
										<label class="radio-inline">
											<input type="radio">Muy malo
										</label>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="" class="col-md-12">¿Le dieron la opción de reconstruirse tras la cirugía?</label>
									<div class="col-md-12">
										<label class="radio-inline">
											<input type="radio">No
										</label>
										<label class="radio-inline">
											<input type="radio">Si
										</label>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="" class="col-md-12">Durante su tratamiento en el Hospital, ¿Le ofrecieron apoyo emocional o terapia psicológica?</label>
									<div class="col-md-3">
										<label class="radio-inline">
											<input type="radio">No
										</label>
										<label class="radio-inline">
											<input type="radio">Si
										</label>
									</div>
									<div class="col-md-9">
										<input type="text" class="form-control" placeholder="¿Dónde?">
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="" class="col-md-12">Recibe medicamento para dormir, ansiedad o depresión</label>
									<div class="col-md-12">
										<label class="radio-inline">
											<input type="radio">No
										</label>
										<label class="radio-inline">
											<input type="radio">Si
										</label>
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-6">
										<input type="text" class="form-control" placeholder="¿Cuál medicamento?">
									</div>
									<div class="col-md-6">
										<input type="text" class="form-control" placeholder="¿Cuánto tiempo?">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="" class="col-md-12">¿Qué médico le indicó ese medicamento?</label>
									<div class="col-md-12">
										<input type="text" class="form-control" placeholder="¿Qué médico le indicó ese medicamento?">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="" class="col-md-12">¿Recibe algún tipo de terapia alternativa?</label>
									<div class="col-md-3">
										<label class="radio-inline">
											<input type="radio">No
										</label>
										<label class="radio-inline">
											<input type="radio">Si
										</label>
									</div>
									<div class="col-md-9">
										<input type="text" class="form-control" placeholder="¿Cuál?">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="" class="col-md-12">¿Conoce sus derechos como paciente?</label>
									<div class="col-md-12">
										<label class="radio-inline">
											<input type="radio">No
										</label>
										<label class="radio-inline">
											<input type="radio">Si
										</label>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="" class="col-md-12">¿Siente que sus derechos como pacientes han sido violados?</label>
									<div class="col-md-3">
										<label class="radio-inline">
											<input type="radio">No
										</label>
										<label class="radio-inline">
											<input type="radio">Si
										</label>
									</div>
									<div class="col-md-9">
										<input type="text" class="form-control" placeholder="¿Explique la razón?">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="" class="col-md-12">¿Levantó una queja?</label>
									<div class="col-md-3">
										<label class="radio-inline">
											<input type="radio">No
										</label>
										<label class="radio-inline">
											<input type="radio">Si
										</label>
									</div>
									<div class="col-md-9">
										<input type="text" class="form-control" placeholder="¿Por qué?">
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="" class="col-md-12">En caso de que se encuentre en remisión, ¿En qué fecha aproximadamente terminó el tratamiento clínico? (DD/MM/AA)</label>
									<div class="col-md-12">
										<input type="text" class="form-control" placeholder="En caso de que se encuentre en remisión, ¿En qué fecha aproximadamente terminó el tratamiento clínico? (DD/MM/AA)">
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