<?php $videos = new WP_Query( array( 'post_type' => 'videos', 'posts_per_page' => 1, 'order' => 'DESC', 'orderby' => 'rand' ) ); ?>
<?php if ( $videos->have_posts() ) : ?>
	<article class="col-xs-12 col-sm-6 col-md-12">
		<h2><?php echo __( 'Videos' ); ?></h2>
		<?php while ( $videos->have_posts() ) : $videos->the_post(); ?>
			<a href="<?php echo the_permalink(); ?>">
				<?php if ( has_post_thumbnail() ) : ?>
					<?php the_post_thumbnail( 'posts_home', array( 'class' => 'img-responsive img-full' ) ); ?>
				<?php else : ?>
					<img src="<?php echo bloginfo( 'template_url' ); ?>/img/splash_tienda.png" alt="" class="img-responsive">
				<?php endif; ?>
			</a>
		<?php endwhile; ?>
	</article>
<?php endif; ?>