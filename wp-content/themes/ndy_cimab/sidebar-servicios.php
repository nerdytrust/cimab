<article class="col-xs-12 col-sm-6 col-md-12">
	<h2><?php echo __( 'Programas' ); ?></h2>
	<ul class="syp">
		<li>
			<p><a href="<?php bloginfo( 'url' ); ?>/favor-de-tocar">Favor de Tocar</a></p>
			<span class="fecha"></span>
		</li>
		<?php $categories = get_categories( array( 'child_of' => 5, 'parent' => '', 'orderby' => 'name', 'order' => 'ASC', 'taxonomy' => 'category', 'pad_counts' => true, 'hide_empty' => 0 ) ); ?>
		<?php foreach ( $categories as $category ) : ?>
			<?php if ( $category->count > 0 ) : ?>
				<li>
					<p><a href="<?php echo get_category_link( $category->term_id ); ?>"><?php echo $category->name; ?></a></p>
					<span class="fecha"></span>
				</li>
			<?php endif; ?>
		<?php endforeach; ?>
		<li>
			<p><a href="<?php bloginfo( 'url' ); ?>/programas-comunitarios">Programas Comunitarios</a></p>
			<span class="fecha"></span>
		</li>
		<li>
			<p><a href="<?php bloginfo( 'url' ); ?>/platicas-de-sensibilizacion"><?php echo __( 'Pláticas de sensibilización' ); ?></a></p>
			<span class="fecha"></span>
		</li>
		<li>
			<p><a href="<?php bloginfo( 'url' ); ?>/voluntariado"><?php echo __( 'Voluntariado' ); ?></a></p>
			<span class="fecha"></span>
		</li>
		<li>
			<p><a href="<?php bloginfo( 'url' ); ?>/alianza-con-empresas"><?php echo __( 'Alianzas' ); ?></a></p>
			<span class="fecha"></span>
		</li>
	</ul>
</article>