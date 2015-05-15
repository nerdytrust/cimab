<?php
/**
 * Plantilla de descripción corta para Single Product
 * @author Eric Bravo para Nerdy Trust <ebravo@itcitrus.mx>
 * @package Nerdy Trust - CIMAB/WooCommerce/Templates
 * @version 1.6.4
 */

if ( ! defined( 'ABSPATH' ) )
	exit;

global $post;

?>
<div class="col-md-12 intro">
	<h2>
		<?php if ( $post->post_excerpt ) : ?>
			<?php echo apply_filters( 'woocommerce_short_description', $post->post_excerpt ) ?>
		<?php endif; ?>
	</h2>
</div>