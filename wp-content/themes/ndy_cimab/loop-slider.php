<?php $loop = new WP_Query( array( 'post_type' => 'sliders', 'posts_per_page' => -1, 'order' => 'DESC', 'orderby' => 'date' ) ); ?>
<?php if( $loop->have_posts() ) : ?>
	<div class="col-md-12 slider">
		<div class="flexslider" id="slider">
			<ul class="slides">
				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<?php if ( get_field( 'imagen-slide' ) ) : ?>
						<?php $image_slide = get_field( 'imagen-slide' ); ?>
						<li>
							<a href="<?php echo the_field( 'link-slider' ); ?>">
								<img src="<?php echo $image_slide['url']; ?>" alt="<?php the_title(); ?>">
							</a>
						</li>
					<?php endif; ?>
				<?php endwhile; ?>
			</ul>
		</div>
		<div class="flexslider" id="carousel">
			<ol class="slides">
				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<?php if ( get_field( 'imagen-slide' ) ) : ?>
						<?php $img_thumb = get_field( 'thumbnail-slide' ); ?>
						<li>
							<img src="<?php echo $img_thumb['url']; ?>" alt="<?php the_title(); ?>" class="img-responsive">
						</li>
					<?php endif; ?>
				<?php endwhile; ?>
			</ol>
		</div>
	</div>
<?php endif; ?>