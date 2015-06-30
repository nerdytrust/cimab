<?php
	$parent = $post->ID;
	if ( get_post_ancestors( $post->ID ) ){
		$parent = get_post_ancestors( $post->ID );
		$parent = $parent[0];
	}
	$args = array(
		'child_of'			=> $parent,
		'post_type'			=> 'page',
		'post_status'		=> 'publish',
		'sort_column'		=> 'post_date',
		'sort_order'		=> 'ASC',
		'title_li'			=> '',
		'walker'			=> new Custom_walker_page_list()
	);
?>
<section class="side side-big">
	<article class="col-xs-12 col-sm-6 col-md-12">
		<h2><?php echo __( 'Temas Relacionados' ); ?></h2>
		<ul class="syp">
			<?php wp_list_pages( $args ); ?>
		</ul>
	</article>
</section>