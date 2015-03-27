<?php $loop = new WP_Query( [ 'post_type' => 'sliders', 'posts_per_page' => 4, 'order' => 'DESC', 'orderby' => 'date' ] ); ?>
<?php if( $loop->have_posts() ) : ?>
	<div class="col-md-12 slider">
		<div class="flexslider">
			<ul class="slides">
				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<?php if ( get_field( 'imagen-slide' ) ) : ?>
						<?php $image_slide = get_field( 'imagen-slide' ); ?>
						<li data-thumb="<?php echo get_field( 'thumbnail-slide' )['url']; ?>">
							<a href="<?php echo the_field( 'link-slider' ); ?>">
								<img src="<?php echo $image_slide['url']; ?>" alt="<?php the_title(); ?>">
							</a>
						</li>
					<?php endif; ?>
				<?php endwhile; ?>
			</ul>
		</div>
	</div>
<?php endif; ?>