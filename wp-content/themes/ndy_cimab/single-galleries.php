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
					<div class="col-md-12 btn-more-contents">
						<div class="row">
							<div class="col-md-6"></div>
							<div class="col-md-6">
								<a href="<?php echo bloginfo( 'url' ); ?>/galerias" class="btn btn-cimab-green btn-lg btn-block pull-right"><?php echo __( 'Más galerías' ); ?></a>
							</div>
						</div>
					</div>
					
					<!-- módulo de compartir -->
						<?php get_template_part( 'shareit' ); ?>
					<!-- /módulo de compartir -->

					<!-- módulo de comentarios -->
						<?php get_template_part( 'comments', 'form' ); ?>
					<!-- /módulo de comentarios -->

					<!-- módulo de posts relacionados -->
						<?php get_template_part( 'relacionados' ); ?>
					<!-- /módulo de posts relacionados -->
				
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