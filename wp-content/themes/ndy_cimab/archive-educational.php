<?php get_header(); ?>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-7 contenido">
				<div class="notas">
					<h1 class="seccion">
						<?php echo get_category_tax(); ?>
					</h1>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<div class="nota biblioteca">
							<?php if ( has_post_thumbnail() ) : ?>
								<?php the_post_thumbnail( 'posts_home', array( 'class' => 'img-responsive' ) ); ?>
							<?php else : ?>
								<img src="<?php echo bloginfo( 'template_url' ); ?>/img/splash_tienda.png" alt="" class="img-responsive">
							<?php endif; ?>
							<div class="info">
								<h5><?php the_title(); ?></h5>
								<!-- Extracto o Resúmen de la nota -->
									<?php if ( has_excerpt( $post->ID ) ) : ?>
										<?php the_excerpt(); ?>
									<?php else : ?>
										<?php the_content(); ?>
									<?php endif; ?>
								<!-- /Extracto o resúmen de la nota -->

								<!-- Fuente o autor de la nota -->
									<?php if ( get_field( 'nombre_fuente' ) ) : ?>
										<div class="row">
											<div class="col-md-12">
												<em>
													Fuente / Autor: 
														<?php if ( get_field( 'link_de_la_fuente' ) ) : ?>
															<a href="<?php echo the_field( 'link_de_la_fuente' ); ?>" target="_blank" title=""><?php echo the_field( 'nombre_fuente' ); ?></a>
														<?php else: ?>
															<?php echo the_field( 'nombre_fuente' ); ?>
														<?php endif; ?>
												</em>
											</div>
										</div>
									<?php endif;  ?>
								<!-- /Fuente o autor de la nota -->

								<!-- Botón de descarga o link externo -->
									<?php if ( get_field( 'link_externo' ) ) : ?>
										<div class="row">
											<div class="col-md-12">
												<?php if ( get_field( 'tipo_de_boton' ) == 'descargar' ) : ?>
													<a href="<?php echo get_field( 'link_externo' ); ?>" class="btn btn-pink">Descargar <i class="fa fa-download"></i></a>
												<?php else : ?>
													<a href="<?php echo get_field( 'link_externo' ); ?>" class="btn btn-pink">Comprar <i class="fa fa-shopping-cart"></i></a>
												<?php endif; ?>
											</div>
										</div>
									<?php endif;  ?>
								<!-- /Botón de descarga o link externo -->
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