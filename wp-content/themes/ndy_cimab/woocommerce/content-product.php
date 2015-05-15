<?php

/**
 * Plantilla del Grid de Productos
 * 
 * @author Eric Bravo para Nerdy Trust <ebravo@itcitrus.mx>
 * @package Nerdy Trust - CIMAB/WooCommerce/Templates
 * @version 1.6.4
 */

if ( ! defined( 'ABSPATH' ) )
	exit;

	global $product, $woocommerce_loop;
	
	if ( empty( $woocommerce_loop['loop'] ) )
		$woocommerce_loop['loop'] = 0;

	/**
	 * Número de columnas en los que mostraremos los productos
	 * En este caso es 1 sola columna
	 */
	if ( empty( $woocommerce_loop['columns'] ) )
		$woocommerce_loop['columns'] = apply_filters( 'loop_shop_columns', 1 );

	/**
	 * Nos aseguramos que los productos sean visibles
	 */
	if ( ! $product || ! $product->is_visible() )
		return;

	/**
	 * Incrementamos el contador del loop
	 */
	$woocommerce_loop['loop']++;

	$classes = array();
	if ( 0 == ( $woocommerce_loop['loop'] - 1 ) % $woocommerce_loop['columns'] || $woocommerce_loop['columns'] )
		$classes[] = 'first';

	if ( 0 == $woocommerce_loop['loop'] % $woocommerce_loop['columns'] )
		$classes[] = 'last';
?>
	<div class="col-xs-12 col-sm-6 col-md-6">
		<figure>
			<div <?php post_class( $classes ); ?>>
				<?php do_action( 'woocommerce_before_shop_loop_item' ); ?>
					<a href="<?php the_permalink(); ?>">
						<?php woocommerce_template_loop_product_thumbnail( 'shop_catalog', array( 'class' => 'img-responsive' ) ); ?>
					</a>
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<?php do_action( 'woocommerce_after_shop_loop_item_title' ); ?>
					<figcaption><?php echo custom_excerpt(23); ?></figcaption>
				<?php do_action( 'woocommerce_after_shop_loop_item' ); ?>
			</div>
		</figure>
	</div>