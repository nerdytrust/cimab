<?php
/**
 * Template Name: Checkout
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
			<div class="col-md-12 entry">
				<?php if ( has_post_thumbnail() ) : ?>
					<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'nota' ); ?>
					<?php if ( $src[3] ) : ?>
						<?php the_post_thumbnail( 'nota', array( 'class' => 'img-responsive img-full' ) ); ?>
					<?php else : ?>
						<?php the_post_thumbnail( 'nota', array( 'class' => 'img-responsive img-old' ) ); ?>
					<?php endif; ?>
				<?php endif; ?>
				<?php the_content(); ?>
			</div>

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