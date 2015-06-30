<?php
/**
 * Template Name: Voluntariado
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
					<?php the_post_thumbnail( 'nota', array( 'class' => 'img-responsive' ) ); ?>
				</div>
				<div class="spacing-down"></div>
				<div class="col-md-12">
					<div class="col-md-6 green-top-border h360">
						<h4 class="colours-green">Voluntariado</h4>
						<p><strong>¡Conviértete en voluntario de Fundación Cimab! Participa de forma altruista y solidaria en nuestros proyectos dedidando talento y parte de tu tiempo a la causa.</strong></p>
						<p>Puedes colaborar con nosotros impartiendo pláticas de sensibilización, visitando hospitales, difundiendo información sobre cáncer de mama, participando en stand, apoyando en labores administrativas, entre otras actividades.</p>
						<p>Buscamos personas mayores de 20 años que tengan disponibilidad de tiempo de lunes a viernes entre 9:00 y 18:00 hrs. Si te interesa participar por favor completa el formulario de esta página.</p>
					</div>
					<div class="col-md-6 purple-top-border h360">
						<h4 class="colours-purple">Servicio social o prácticas profesionales</h4>
						<p><strong>En Fundación Cimab necesitamos de profesionales solidarios que se interesen en realizar su servicio social o prácticas con nosotros,</strong> aplicando los conocimientos y habilidades para que juntos logremos impactar positivamente en la sociedad mexicana y vencer el mito de que el cáncer de mama es sinónimo de muerte.</p>
						<div class="row">
							<div class="col-md-12">
								<h5 class="colours-purple">Requisitos</h5>
								<ul>
									<li>Estar cursando o haber concluido el nivel superior</li>
									<li>Contar con al menos el 70% de los créditos establecidos por tu plan de estudios</li>
									<li>Tener un promedio mínimo de 8 o equivalente</li>
									<li>Disponibilidad de tiempo de lunes a viernes entre 9:00 y 18:00 hrs.</li>
									<li>Entregar una Carta de presentación por parte de la institución educativa de procedencia</li>
								</ul>
								<em class="colours-purple">Servicio Social (480 horas) // Prácticas profesionales (Mínimo 22 horas)</em>
							</div>
						</div>
					</div>
				</div>
				<div class="spacing-down"></div>

				<!-- Formulario de solicitud de voluntariado -->
					<div class="col-md-12">
						<h4 class="back-pink3">Envíanos tus datos</h4>
					</div>
					<div class="col-md-12">
						<form action="<?php bloginfo( 'url' ); ?>/sistema/voluntarios" id="form_nuevo_voluntario" class="form-horizontal" role="form" method="post" autocomplete="off">
							<div class="col-md-12 text-center">
								<div class="radio-inline">
									<label>
										<input name="volunteer_type" value="voluntario" type="radio">
										Contacto para voluntariado
									</label>
								</div>
								<div class="radio-inline">
									<label>
										<input name="volunteer_type" value="serviciosocial-practicasprofesionales" type="radio">
										Contacto por servicio social o prácticas profesionales
									</label>
								</div>
							</div>
							<div class="spacing-down-sm"></div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-md-4" for="fullname"><em class="required_field">*</em> Nombre Completo</label>
									<div class="col-md-8">
										<input type="text" name="fullname" class="form-control" placeholder="Nombre Completo">
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
									<label class="col-md-4" for="school"><em class="required_field">*</em> Institución educativa de procedencia</label>
									<div class="col-md-8">
										<input type="text" name="school" class="form-control" placeholder="Institución educativa de procedencia">
									</div>
								</div>
								<div class="form-group">
									<label for="degree" class="col-md-4"><em class="required_field">*</em> Licenciatura</label>
									<div class="col-md-8">
										<input type="text" name="degree" class="form-control" placeholder="Licenciatura">
									</div>
								</div>
								<div class="form-group">
									<label for="timevolunteer" class="col-md-4"><em class="required_field">*</em> Horario disponible</label>
									<div class="col-md-8">
										<input type="time" name="timevolunteer" placeholder="Horario disponible" class="form-control">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="" class="col-md-4"></label>
								<div class="col-md-8">
									<em class="required_field">* Datos requeridos para el envío de la solicitud</em>
								</div>
							</div>
							<div class="spacing-down-sm"></div>
							<button type="submit" class="btn btn-pink btn-lg pull-right">Enviar <i class="fa fa-angle-double-right"></i></button>
							<div class="spacing-down-sm"></div>
						</form>
					</div>
				<!-- /Formulario de solicitud de voluntariado -->

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