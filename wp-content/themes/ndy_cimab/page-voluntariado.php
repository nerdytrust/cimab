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
				<div class="col-md-12 entry">
					<?php the_content(); ?>
				</div>
				<div class="spacing-down"></div>

				<!-- Formulario de solicitud de voluntariado -->
					<div class="col-md-12">
						<h4 class="back-pink3">Envíanos tus datos</h4>
					</div>
					<div class="col-md-12">
						<?php get_template_part( 'form', 'voluntariado' ); ?>
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