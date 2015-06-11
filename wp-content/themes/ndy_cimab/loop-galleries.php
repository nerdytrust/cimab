<?php $galerias = new WP_Query( array( 'post_type' => 'galleries', 'posts_per_page' => 4, 'order' => 'DESC', 'orderby' => 'date' ) ); ?>
<?php if ( $galerias->have_posts() ) : ?>
	<span class="galeria">
		<h3><?php echo __( 'Galería' ); ?></h3>
	</span>
	<div class="row gal">
		<?php while ( $galerias->have_posts() ) : $galerias->the_post(); ?>
			<div class="col-xs-6 col-sm-3 col-md-6 col-lg-3">
				<figure>
					<a href="<?php echo the_permalink(); ?>">
						<?php if ( has_post_thumbnail() ): ?>
							<?php the_post_thumbnail( 'posts_home', array( 'class' => 'img-responsive' ) ); ?>
						<?php else: ?>
							<img src="<?php echo bloginfo( 'template_url' ); ?>/img/img2.png" alt="" class="img-responsive">
						<?php endif; ?>
					</a>
					<figcaption>
						<?php the_excerpt(); ?>
					</figcaption>
				</figure>
			</div>
		<?php endwhile; ?>
	</div>
<?php endif; ?>