<h1><?php echo __( 'Apoyo emocional' ); ?></h1>
<?php $emotional = new WP_Query( array( 'cat' => 2, 'post_type' => 'post', 'posts_per_page' => 6, 'order' => 'DESC', 'orderby' => 'date' ) ); ?>
<div class="row home-index">
	<?php if ( $emotional->have_posts() ) : while ( $emotional->have_posts() ) : $emotional->the_post(); ?>
		<div class="col-xs-12 col-sm-6 col-md-6">
			<figure>
				<?php if ( has_post_thumbnail() ) : ?>
					<a href="<?php echo the_permalink(); ?>">
						<?php the_post_thumbnail( 'posts_home' ); ?>
					</a>
				<?php else : ?>
					<a href="<?php echo the_permalink(); ?>">
						<img src="<?php echo bloginfo( 'template_url' ); ?>/img/splash_tienda.png" alt="" class="img-responsive">
					</a>
				<?php endif; ?>
				<h3><a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a></h3>
				<time><?php echo the_date('Y-m-d'); ?></time>
				<figcaption><?php echo custom_excerpt(20); ?></figcaption>
			</figure>
		</div>
	<?php endwhile; ?>
	<?php else: ?>
		<div class="col-xs-12 col-sm-6 col-md-6">
			<h2><?php echo __( 'No hay elementos para mostrar' ); ?></h2>
		</div>
	<?php endif; ?>
</div>