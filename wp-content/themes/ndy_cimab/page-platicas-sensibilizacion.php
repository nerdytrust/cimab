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
						<?php get_template_part( 'form', 'platicas' ); ?>
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