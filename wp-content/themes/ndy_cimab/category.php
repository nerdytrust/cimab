<?php get_header(); ?>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-7 contenido">
				<div class="notas">
					<h1 class="seccion"><?php echo esc_html( single_cat_title() ); ?></h1>
					<div class="col-sm-12 paginacion-seccion">
						<?php if ( function_exists( 'wp_pagenavi' ) ) wp_pagenavi(); ?>
					</div>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<div class="nota">
							<?php if ( has_post_thumbnail() ) : ?>
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium', array( 'class' => 'img-responsive' ) ); ?></a>
							<?php endif; ?>
							<div class="info">
								<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
								<?php echo custom_excerpt(12); ?>
							</div>
						</div>
					<?php endwhile; ?>
					<?php else: ?>
						<h2 class="not-found"><?php echo __( 'No existe el contenido' ); ?></h2>
					<?php endif; ?>
				</div>
				<div class="col-sm-12 paginacion-seccion">
					<?php if ( function_exists( 'wp_pagenavi' ) ) wp_pagenavi(); ?>
				</div>
			</div>
			<!-- sidebar -->
				<?php get_sidebar(); ?>
			<!-- /sidebar -->
		</div>
	</div>
<?php get_footer(); ?>