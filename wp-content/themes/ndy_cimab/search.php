<?php get_header(); ?>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-7 contenido">
				<div class="notas">
					<?php if ( have_posts() ) : ?>
						<h1 class="seccion">
							Resultados de <strong><?php echo esc_html( the_search_query() ); ?></strong> son:
						</h1>
						<?php while ( have_posts() ) : the_post(); ?>
							<div class="nota">
								<?php if ( has_post_thumbnail() ) : ?>
									<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium', array( 'class' => 'img-responsive' ) ); ?></a>
								<?php else : ?>
									<img src="<?php echo bloginfo( 'template_url' ); ?>/img/splash_tienda.png" alt="" class="img-responsive">
								<?php endif; ?>
								<div class="info">
									<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
									<?php echo custom_excerpt(12); ?>
								</div>
							</div>
						<?php endwhile; ?>
					<?php else: ?>
						<h2><?php echo __( 'Elementos no encontrados' ); ?></h2>
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