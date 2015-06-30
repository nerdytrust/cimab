<article class="col-xs-12 col-sm-6 col-md-12">
	<h2><?php echo __( 'Testimonio' ); ?></h2>
	<?php $testimonio = new WP_Query( array( 'category_name' => 'testimonios', 'orderby' => 'rand', 'posts_per_page' => 1 ) ); ?>
	<?php if ( $testimonio->have_posts() ) : while ( $testimonio->have_posts() ) : $testimonio->the_post(); ?>
		<?php if ( has_post_thumbnail() ) : ?>
			<a href="<?php echo the_permalink(); ?>">
				<?php the_post_thumbnail( 'posts_home', array( 'class' => 'img-responsive img-full' ) ); ?>
			</a>
		<?php else : ?>
			<a href="<?php echo the_permalink(); ?>">
				<img src="<?php echo bloginfo( 'template_url' ); ?>/img/splash_tienda.png" alt="" class="img-responsive">
			</a>
		<?php endif; ?>
	<?php endwhile; endif; wp_reset_query(); ?>
</article>