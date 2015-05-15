<?php
/**
 * Plantilla para Single Product
 * 
 * @author Eric Bravo para Nerdy Trust <ebravo@itcitrus.mx>
 * @package Nerdy Trust - CIMAB/WooCommerce/Templates
 * @version 1.6.4
 */

if ( ! defined( 'ABSPATH' ) )
	exit; // Exit if accessed directly

?>

<h1><?php the_title(); ?></h1>
<?php woocommerce_template_single_excerpt(); ?>
<?php if ( has_post_thumbnail() ) : ?>
	<?php woocommerce_template_loop_product_thumbnail( 'shop_single', [ 'class' => 'img-responsive' ] ); ?>
<?php endif; ?>
<div class="col-md-12 entry">
	<?php the_content(); ?>
</div>