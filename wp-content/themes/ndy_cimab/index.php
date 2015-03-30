<?php get_header(); ?>
		<div class="row">
			<?php get_template_part( 'loop', 'slider' ); ?>
		</div>
	</div><!--termina container fluid-->

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-7 apoyo">
				<?php get_template_part( 'loop', 'index' ); ?>
				<span class="galeria">
					<h3><?php echo __( 'Galería' ); ?></h3>
				</span>
				<div class="row gal">
					<div class="col-xs-6 col-sm-3 col-md-6 col-lg-3">
						<figure>
							<img src="<?php echo bloginfo( 'template_url' ); ?>/img/img2.png" alt="" class="img-responsive">
							<figcaption>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
								Lorem ipsum dolor sit amet
							</figcaption>
						</figure>
					</div>
					<div class="col-xs-6 col-sm-3 col-md-6 col-lg-3">
						<figure>
							<img src="<?php echo bloginfo( 'template_url' ); ?>/img/img2.png" alt="" class="img-responsive">
							<figcaption>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
								Lorem ipsum dolor sit amet
							</figcaption>
						</figure>
					</div>
					<div class="col-xs-6 col-sm-3 col-md-6 col-lg-3">
						<figure>
							<img src="<?php echo bloginfo( 'template_url' ); ?>/img/img2.png" alt="" class="img-responsive">
							<figcaption>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit.
								Lorem ipsum dolor sit amet
							</figcaption>
						</figure>
					</div>
					<div class="col-xs-6 col-sm-3 col-md-6 col-lg-3">
						<figure>
							<img src="<?php echo bloginfo( 'template_url' ); ?>/img/img2.png" alt="" class="img-responsive">
							<figcaption>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
								Lorem ipsum dolor sit amet
							</figcaption>
						</figure>
					</div>
				</div>
			</div>

			<!-- sidebar -->
				<?php get_sidebar(); ?>
			<!-- /sidebar -->
		</div>
	</div><!--termina container-->
<?php get_footer(); ?>