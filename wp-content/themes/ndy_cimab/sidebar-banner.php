<?php $banners = new WP_Query( [ 'post_type' => 'banners', 'posts_per_page' => 1, 'order' => 'DESC', 'orderby' => 'date' ] ); ?>
<?php if ( $banners->have_posts() ) : ?>
	<article class="col-xs-12 col-sm-6 col-md-12">
		<h2><?php echo __( 'Catalogo' ); ?></h2>
		<?php while ( $banners->have_posts() ) : $banners->the_post(); ?>
			<a href="<?php echo the_field( 'url_banner' ); ?>">
				<img src="<?php echo get_field( 'imagen_banner' )['url']; ?>" alt="" class="catalogo">
			</a>
		<?php endwhile; ?>
	</article>
<?php endif; ?>