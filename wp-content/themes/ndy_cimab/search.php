<?php get_header(); ?>
	<?php if ( have_posts() ) : ?>
		<h2><?php echo __( 'Resultados de ' ) . esc_html( the_search_query() ) . __( 'son:' ); ?></h2>
		<?php while ( have_posts() ) : the_post(); ?>
		<?php endwhile; ?>
	<?php else: ?>
		<h2><?php echo __( 'Elementos no encontrados' ); ?></h2>
	<?php endif; ?>
<?php get_footer(); ?>