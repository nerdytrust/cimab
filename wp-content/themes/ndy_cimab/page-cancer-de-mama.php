<?php
/**
 * Template Name: Cáncer de mama
 */
?>
<?php get_header(); ?>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-7 cont">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<div class="col-md-12 intro">
					<h2><?php the_excerpt(); ?></h2>
				</div>
				<div class="col-md-12 entry">
					<div class="grafico-deteccion text-center">
						<img class="img-responsive" src="<?php bloginfo( 'template_url' ); ?>/img/globo-cancer-mama.jpg" alt="Deteccion y tratamiento para el cancer de mama" border="0" />
						<br><br>
						<div class="row">
							<div class="col-sm-12 col-md-12">
					            <ul class="nav nav-pills nav-stacked">
					            	<li role="presentation" class="active"><a href="<?php echo bloginfo( 'url' ); ?>/deteccion-oportuna" >Detección Oportuna</a></li>
					            	<li role="presentation"><a href="<?php echo bloginfo( 'url' ); ?>/diagnostico" >Diagnóstico</a></li>
					            	<li role="presentation"><a href="<?php echo bloginfo( 'url' ); ?>/estadios" >Estadíos</a></li>
					            	<li role="presentation"><a href="<?php echo bloginfo( 'url' ); ?>/tratamiento" >Tratamiento</a></li>
					            	<li role="presentation"><a href="<?php echo bloginfo( 'url' ); ?>/category/apoyo-emocional" >Apoyo Emocional</a></li>
					            	<li role="presentation"><a href="<?php echo bloginfo( 'url' ); ?>/factores-de-riesgo" >Factores de Riesgo</a></li>
					            	<li role="presentation"><a href="<?php echo bloginfo( 'url' ); ?>/biblioteca" >Biblioteca</a></li>
					            </ul>
					       	</div>
					    </div>
			          </div>
				</div>
				<!-- módulo de relacionados paginas -->
					<?php get_template_part( 'widget', 'temas-relacionados' ); ?>
				<!-- /módulo de relacionados paginas -->
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
	</div>
<?php get_footer(); ?>