<?php
/**
 * Template Name: Platicas de Sensibilización
 */
?>
<?php get_header(); ?>
	</div>
	<div class="row">
		<div class="col-md-7 cont">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<div class="col-md-12 intro">
					<?php if ( has_excerpt( $post->ID ) ) : ?>
						<h2><?php the_excerpt(); ?></h2>
					<?php endif; ?>
				</div>
				<div class="col-md-12">
					<div class="col-md-5">
						<div class="carousel slide" role="carousel" id="carousel_logros">
							<div class="carousel-inner" role="listbox">
								<div class="item active"><img src="<?php bloginfo( 'template_url' ); ?>/img/banner-sensibilidad1.jpg" alt="" class="img-responsive"></div>
								<div class="item"><img src="<?php bloginfo( 'template_url' ); ?>/img/banner-sensibilidad2.jpg" class="img-responsive"></div>
								<div class="item"><img src="<?php bloginfo( 'template_url' ); ?>/img/banner-sensibilidad3.jpg" class="img-responsive"></div>
							</div>
							<a href="#carousel_logros" class="left carousel-control" role="button" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
								<span class="sr-only">Previo</span>
							</a>
							<a href="#carousel_logros" class="right carousel-control" role="button" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
								<span class="sr-only">Siguiente</span>
							</a>
						</div>
					</div>
					<div class="col-md-6 entry">
						<h3 class="colours-green">Impartimos pláticas gratuitas de sensibilización para empresas, organizaciones o instituciones educativas con el objetivo de crear conciencia sobre el cáncer de mama.</h3>
						<p>La plática es impartida por voluntarias de Fundación CIMAB con conocimiento del tema y amplio compromiso con la causa.</p>
						<strong>Duración: 60 minutos</strong>
					</div>
				</div>
				<div class="spacing-down"></div>
				<div class="col-md-12">
					<div class="col-md-6 green-top-border h250">
						<h4 class="colours-green">Contenidos</h4>
						<div class="row">
							<div class="col-md-12">
								<ul>
									<li>¿Qué es el cáncer de mama?</li>
									<li>¿Cuáles son los factores de riesgo asociados al cáncer de mama?</li>
									<li>¿Cómo se detecta oportunamente el cáncer de mama?</li>
									<li>Video testimonial de sobrevivientes de cáncer de mama y autoexploración mamaria</li>
									<li>Sesión de preguntas y respuestas</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-6 purple-top-border h250">
						<h4 class="colours-purple">Requisitos</h4>
						<div class="row">
							<div class="col-md-12">
								<ul>
									<li><strong>Solicitar la plática con 15 días hábiles de anticipación <em>(Puede ser en sábado o domingo)</em></strong></li>
									<li>Auditorio mínimo de 70 personas</li>
									<li>
										Contar con los siguientes recursos tecnológicos:
										<ul>
											<li>Computadora con lector de DVD y entrada USB</li>
											<li>Proyector y pantalla o pared blanca para proyectar</li>
											<li>Microfono y equipo de sonido <em>(bocinas)</em></li>
										</ul>
									</li>
									<li><strong>Apoyo con el traslado de la expositora.  En el caso del Interior de la República, solicitamos adicionalmente el apoyo con hospedaje de hotel y alimentos</strong></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="spacing-down"></div>

				<!-- Formulario de solicitud de platicas -->
					<div class="col-md-12">
						<h3 class="back-pink">Solicita tu plática aquí</h3>
						<h4 class="back-pink3">Completando el siguiente formulario</h4>
					</div>
					<div class="col-md-12">
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
					</div>
				<!-- /Formulario de solicitud de platicas -->

				<!-- módulo de compartir -->
					<?php get_template_part( 'shareit' ); ?>
				<!-- /módulo de compartir -->
			<?php endwhile; ?>
			<?php else: ?>
				<h2><?php echo __( 'No existe el contenido' ); ?></h2>
			<?php endif; ?>
		</div>
		<!-- sidebar -->
			<?php get_sidebar(); ?>
		<!-- /sidebar -->
	</div>
<?php get_footer(); ?>