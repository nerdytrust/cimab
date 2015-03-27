<?php get_header(); ?>
	<div class="row">
		<div class="col-md-7 contenido">
			<div class="notas">
				<?php //woocommerce_content(); ?>
				<h1 class="seccion"><?php echo woocommerce_page_title(); ?></h1>
				<?php if ( have_posts() ) : ?>
					<div class="col-xs-12 col-sm-12 col-md-12"><h4><?php do_action('woocommerce_before_shop_loop'); ?></h4></div>
					<?php woocommerce_product_loop_start(); ?>
						<?php woocommerce_product_subcategories(); ?>
						<?php while ( have_posts() ) : the_post(); ?>
							<div class="nota">
								<?php wc_get_template_part( 'content', 'product' ); ?>
							</div>
						<?php endwhile; // end of the loop. ?>
					<?php woocommerce_product_loop_end(); ?>
					<?php do_action('woocommerce_after_shop_loop'); ?>
				<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>
					<div class="col-xs-12 col-sm-12 col-md-12">
						<?php wc_get_template( 'loop/no-products-found.php' ); ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
		<!-- sidebar -->
			<?php get_sidebar(); ?>
		<!-- /sidebar -->
	</div>
<?php get_footer(); ?>