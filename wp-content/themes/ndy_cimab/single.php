<?php get_header(); ?>
	<div class="row">
		<div class="col-md-7 cont">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<div class="col-md-12 intro">
					<h2><?php the_excerpt(); ?></h2>
				</div>
				<?php if ( has_post_thumbnail() ) : ?>
					<?php the_post_thumbnail( 'large', [ 'class' => 'img-responsive' ] ); ?>
				<?php endif; ?>
				<div class="col-md-12 entry">
					<?php the_content(); ?>
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
<?php get_footer(); ?>