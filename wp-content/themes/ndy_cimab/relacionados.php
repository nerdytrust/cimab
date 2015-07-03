<?php
	$orig_post = $post;
	global $post;
	$tags = wp_get_post_tags( $post->ID );
	if ( $tags ){
		$tag_ids = array();
		foreach ( $tags as $individual_tag ) $tag_ids[] = $individual_tag->term_id;

		$related = new WP_Query( array( 'tag__in' => $tag_ids, 'post__not_in' => array( $post->ID ), 'posts_per_page' => 6, 'called_get_posts' => 1 ) );
?>
		<div class="col-md-12 relacionados">
			<h3><?php echo __( 'Notas relacionadas' ); ?></h3>
			<?php while ( $related->have_posts() ) : $related->the_post(); ?>
				<div class="col-md-6">
					<div class="nota nota-relacionada">
						<div class="img-relacionada">
							<a href="<?php the_permalink(); ?>" alt="<?php the_title(); ?>">
								<?php if ( has_post_thumbnail() ) : ?>
									<?php the_post_thumbnail( 'thumbnail', array( 'class' => 'img-responsive' )  ); ?>
								<?php else : ?>
									<img src="<?php echo bloginfo( 'template_url' ); ?>/img/placeholder_150x150.jpg" alt="" class="img-responsive">
								<?php endif; ?>
							</a>
						</div>
						<div class="info col-md-6">
							<?php $category = get_the_category(); ?>
							<h5><?php the_title(); ?> <span>&bull; <?php echo $category[0]->cat_name; ?></span></h5>
							<?php echo custom_excerpt(12); ?>
						</div>
					</div>
				</div>
			<?php endwhile; $post = $orig_post; wp_reset_query(); ?>
		</div><!-- fin de relaciondos -->
<?php } ?>