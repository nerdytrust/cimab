<?php

/**
 * Plantilla de integración de Tienda WooCommerce con el Theme de Wordpress
 *
 * @author Eric Bravo para Nerdy Trust <ebravo@itcitrus.mx>
 * @package Nerdy Trust - CIMAB/WooCommerce/Templates
 * @version 1.0
 */

?>
<?php get_header(); ?>
	<div class="row">
		<?php if ( is_singular( 'product' ) ) : while ( have_posts() ) : the_post(); ?>
			<div class="col-md-7 cont">
				<?php wc_get_template_part( 'single', 'product' ); ?>
			</div>
		<?php endwhile; else : ?>
			<div class="col-md-7 contenido">
				<div class="notas">
					<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
						<h1 class="seccion"><?php echo woocommerce_page_title(); ?></h1>
					<?php endif; ?>
					<?php if ( have_posts() ) : ?>
						<div class="col-xs-12 col-sm-12 col-md-12"><h4><?php do_action('woocommerce_before_shop_loop'); ?></h4></div>
							<?php woocommerce_product_subcategories(); ?>
							<?php while ( have_posts() ) : the_post(); ?>
								<div class="nota shop-product">
									<?php wc_get_template_part( 'content', 'product' ); ?>
								</div>
							<?php endwhile; // end of the loop. ?>
						<?php do_action('woocommerce_after_shop_loop'); ?>
					<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>
						<div class="col-xs-12 col-sm-12 col-md-12">
							<?php wc_get_template( 'loop/no-products-found.php' ); ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
		<?php endif; ?>
		<!-- sidebar -->
			<?php get_sidebar(); ?>
		<!-- /sidebar -->
	</div>
<?php get_footer(); ?>