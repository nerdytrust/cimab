<?php

/**
 * Plantilla del Grid de Productos
 * 
 * @author Eric Bravo para Nerdy Trust <ebravo@itcitrus.mx>
 * @package Nerdy Trust - CIMAB/WooCommerce/Templates
 * @version 1.0
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

	$classes = [];
	if ( 0 == ( $woocommerce_loop['loop'] - 1 ) % $woocommerce_loop['columns'] || $woocommerce_loop['columns'] )
		$classes[] = 'first';

	if ( 0 == $woocommerce_loop['loop'] % $woocommerce_loop['columns'] )
		$classes[] = 'last';
?>
	<div <?php post_class( $classes ); ?>>
		<?php do_action( 'woocommerce_before_shop_loop_item' ); ?>
		<a href="<?php the_permalink(); ?>">
			<?php woocommerce_template_loop_product_thumbnail( 'shop_catalog', [ 'class' => 'img-responsive' ] ); ?>
		</a>
		<div class="info">
			<a href="<?php the_permalink(); ?>"><h5><?php the_title(); ?></h5></a>
			<span class="product-short-description"><?php echo custom_excerpt(23); ?></span>
		</div>
	</div>