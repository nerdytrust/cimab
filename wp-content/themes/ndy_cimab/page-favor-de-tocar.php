<?php 
/**
 * Template Name: Favor de Tocar
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
					<img src="<?php echo bloginfo( 'template_url' ); ?>/img/home-favordetocar.jpg" alt="" class="img-responsive">
				</div>
				<div class="spacing-down-sm"></div>
				<div class="col-md-12">
					<div class="col-md-5">
						<img src="<?php bloginfo( 'template_url') ; ?>/img/sumate-victoria.png" alt="" class="img-responsive">
					</div>
					<div class="col-md-6 entry">
						<h3 class="colours-green">En el marco del mes mundial contra el cáncer de mama, Fundación Cimab presenta la sexta temporada de la reconocida campaña de conciencia social “Favor de Tocar”, con el objetivo de motivar la práctica de la autoexploración como un método para detectar oportunamente el cáncer de mama.</h3>
					</div>
				</div>
				<div class="col-md-12 back-pink4 colours-white">
					<h4 class="text-left">El cáncer de mama no es prevenible por ello, los principales esfuerzos están dirigidos a promover la detección temprana a través de tres recomendaciones (NOM-041):</h4>
				</div>
				<div class="spacing-down"></div>
				<div class="col-md-12">
					<div class="col-md-5">
						<img src="<?php bloginfo( 'template_url' ); ?>/img/autoexploracion-mensual.png" alt="" class="img-responsive">
					</div>
					<div class="col-md-6">
						<p>Gloria Calzada, Ingrid Coronado y Mónica Garza portan la playera con la frase “Favor de Tocar” para invitar a las mujeres a practicar la autoexploración mamaria mensual a partir de los 20 años. Por su parte, Yordi Rosado y Mauricio Barcelata se unen vistiendo una playera con la frase “Favor de Apoyar” para sumar a los hombres en esta importante causa pues ellos también pueden padecer la enfermedad y principalmente, son el apoyo de las mujeres cuando enfrentan al cáncer de mama.</p>
						<p>La campaña “Favor de Tocar” será difundida a partir del mes de octubre en medios de comunicación impresa, radio, televisión, parabuses, metro y redes sociales. <strong>Ayúdanos a difundir esta acción ¡Por allí nos vemos!</strong></p>
					</div>
				</div>
				<div class="spacing-down"></div>
				<div class="col-md-12 back-pink2">
					<div class="col-md-8 colours-white favor-de-tocar-quote">
						<quote class="jumbo-quote">¡Acompañanos también en las redes sociales!</quote>
					</div>
					<div class="col-md-3 social-favor-de-tocar pull-right">
						<a href="https://www.facebook.com/pages/Fundacion-Cimab/126791140757052" target="_blank" class="btn-circle btn-circle-2x back-purple">
							<i class="fa fa-facebook fa-2x"></i>
						</a>
						<a href="https://www.youtube.com/user/FundacionCimab" target="_blank" class="btn-circle btn-circle-2x back-purple">
							<i class="fa fa-youtube fa-2x"></i>
						</a>
						<a href="https://twitter.com/fundacion_cimab" target="_blank" class="btn-circle btn-circle-2x back-purple">
							<i class="fa fa-twitter fa-2x"></i>
						</a>
					</div>
				</div>
				<div class="spacing-down"></div>
				<div class="col-md-12">
					<div class="col-md-4">
						<a href="<?php echo bloginfo( 'url' ); ?>/videos/lanzamiento-campana-favor-de-tocar-2014/">
							<img src="<?php echo bloginfo( 'url' ); ?>/wp-content/uploads/2015/06/video_cover__1412894736.png" alt="" class="img-responsive">
						</a>
					</div>
					<div class="col-md-4">
						<a href="<?php echo bloginfo( 'url' ); ?>/videos/favor-de-tocar-2014-mauricio-barcelata/">
							<img src="<?php echo bloginfo( 'url' ); ?>/wp-content/uploads/2015/05/video_cover__1412895165.png" alt="" class="img-responsive">
						</a>
					</div>
					<div class="col-md-4">
						<a href="<?php echo bloginfo( 'url' ); ?>/videos/favor-de-tocar-2014-monica-garza/">
							<img src="<?php echo bloginfo( 'url' ); ?>/wp-content/uploads/2015/06/video_cover__1412894938.png" alt="" class="img-responsive">
						</a>
					</div>
				</div>
				<div class="spacing-down"></div>
				<div class="col-md-12">
					<h4 class="colours-purple"><strong>Sobre Fundación Cimab</strong></h4>
					<p>Fundación Cimab es una organización no gubernamental, sin fines de lucro, que nace en 2002 para crear conciencia sobre el cáncer de mama en México a través de información, educación, servicios a pacientes e incidencia en políticas públicas.</p>
				</div>
				<div class="spacing-down-sm"></div>
				<div class="col-md-12">
					<div class="col-md-5">
						<a href="<?php echo bloginfo( 'url' ); ?>/videos/autoexploracion-mamaria/">
							<img src="<?php echo bloginfo( 'url' ); ?>/wp-content/uploads/2015/07/video_cover__1412874301.jpg" alt="" class="img-responsive">
						</a>
						<h3 class="colours-pink"><strong>Quiérete:</strong> La importancia de la autoexploración</h3>
						<p>Si bien no previene el cáncer de mama, la realización periódica facilita la detección oportuna y el tratamiento temprano.</p>
					</div>
					<div class="col-md-6">
						<h4 class="colours-pink text-center">Patrocinadores</h4>
						<img src="<?php echo bloginfo( 'template_url' ); ?>/img/favor-de-tocar-sponsors-2014.png" alt="" class="img-responsive">
					</div>
				</div>

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