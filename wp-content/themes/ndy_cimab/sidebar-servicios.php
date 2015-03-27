<article class="col-xs-12 col-sm-6 col-md-12">
	<h2><?php echo __( 'Programas' ); ?></h2>
	<ul class="syp">
		<?php $categories = get_categories( [ 'child_of' => 5, 'parent' => '', 'orderby' => 'name', 'order' => 'ASC', 'taxonomy' => 'category', 'pad_counts' => true, 'hide_empty' => 0 ] ); ?>
		<?php foreach ( $categories as $category ) : ?>
		<li>
			<p><a href="<?php echo get_category_link( $category->term_id ); ?>"><?php echo $category->name; ?></a></p>
			<span class="fecha"><?php echo $category->count; ?></span>
		</li>
		<?php endforeach; ?>
	</ul>
</article>