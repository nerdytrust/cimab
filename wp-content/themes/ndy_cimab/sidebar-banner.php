<?php $banners = new WP_Query( array( 'post_type' => 'banners', 'posts_per_page' => 1, 'order' => 'DESC', 'orderby' => 'date' ) ); ?>
<article class="col-xs-12 col-sm-6 col-md-12">
	<h2><?php echo __( 'Tienda' ); ?></h2>
		<?php if ( $banners->have_posts() ) : while ( $banners->have_posts() ) : $banners->the_post(); ?>
			<a href="<?php echo the_field( 'url_banner' ); ?>">
				<img src="<?php echo get_field( 'imagen_banner' )->url; ?>" alt="" class="catalogo img-responsive img-full">
			</a>
		<?php endwhile; else: ?>
			<a href="<?php echo bloginfo( 'url' ); ?>/tienda">
				<img src="<?php echo bloginfo( 'template_url' ); ?>/img/catalogo-img.png" alt="" class="catalogo">
			</a>
		<?php endif; ?>
</article>
