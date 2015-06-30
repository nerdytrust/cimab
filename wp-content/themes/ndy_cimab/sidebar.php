<div class="col-xs-12 col-md-3 side">	
	<div class="row">
		<!-- sidebar de podemos ayudarte -->
			<?php get_template_part( 'sidebar', 'podemos-ayudarte' ); ?>
		<!-- /sidebar de podemos ayudarte -->

		<!-- sidebar de subcategorías -->
			<?php $parent = get_the_category(); ?>
			<?php $categories = get_categories( array( 'child_of' => 0, 'parent' => $parent[0]->cat_ID, 'orderby' => 'name', 'order' => 'ASC', 'taxonomy' => 'category', 'pad_counts' => true, 'hide_empty' => 0 ) ); ?>
			<?php if ( is_category() && $parent[0]->parent == 0 && isset( $parent[0]->parent ) && ! empty( $categories ) ) : ?>
				<?php get_template_part( 'sidebar', 'subcategorias' ); ?>
			<?php endif; ?>
		<!-- /sidebar de subcategorías -->
		
		<!-- sidebar de servicios -->
			<?php get_template_part( 'sidebar', 'servicios' ); ?>
		<!-- /sidebar de servicios -->

		<!-- sidebar de testimonios -->
			<?php get_template_part( 'sidebar', 'testimonios' ); ?>
		<!-- /sidebar de testimonios -->

		<!-- sidebar de videoteca -->
			<?php get_template_part( 'sidebar', 'videoteca' ); ?>
		<!-- /sidebar de videoteca -->
	</div>
	<div class="row">
		<!-- sidebar catalogo -->
			<?php get_template_part( 'sidebar', 'banner'); ?>
		<!-- /sidebar catalogo -->
		
		<!-- sidebar formamos parte de -->
			<?php get_template_part( 'sidebar', 'partede' ); ?>
		<!-- /sidebar formamos parte de -->
	</div>	
</div>