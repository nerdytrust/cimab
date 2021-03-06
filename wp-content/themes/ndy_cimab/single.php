<?php get_header(); ?>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-7 cont">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<h1><?php the_title(); ?></h1>
					<?php if ( has_excerpt( $post->ID ) ) : ?>
						<div class="col-md-12 intro">
							<h2><?php the_excerpt(); ?></h2>
						</div>
					<?php endif; ?>				
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
					<?php if ( get_field( 'nombre_fuente' ) ) : ?>
						<span class="col-sm-12 col-md-4 note-source">
							<em>
								Fuente: 
									<?php if ( get_field( 'link_de_la_fuente' ) ) : ?>
										<a href="<?php echo the_field( 'link_de_la_fuente' ); ?>" target="_blank" title=""><?php echo the_field( 'nombre_fuente' ); ?></a>
									<?php else: ?>
										<?php echo the_field( 'nombre_fuente' ); ?>
									<?php endif; ?>
							</em>
						</span>
					<?php endif; ?>
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