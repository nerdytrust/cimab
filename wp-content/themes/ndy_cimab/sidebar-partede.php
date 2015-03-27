<?php $ongs = new WP_Query( [ 'post_type' => 'ongs', 'posts_per_page' => 6, 'orderby' => 'rand' ] ); ?>
<?php if ( $ongs->have_posts() ) : ?>
	<article class="col-xs-12 col-sm-6 col-md-12">
		<h2><?php echo __( 'Formamos parte de' ); ?></h2>
		<ul class="forma">
			<?php while( $ongs->have_posts() ) : $ongs->the_post(); ?>
				<li>
					<a href="<?php echo the_field( 'url_ong' ); ?>" target="_blank">
						<img src="<?php echo get_field( 'ong_logo' )['url']; ?>" alt="<?php the_title(); ?>">
					</a>
				</li>
			<?php endwhile; ?>
		</ul>
	</article>
<?php endif; ?>