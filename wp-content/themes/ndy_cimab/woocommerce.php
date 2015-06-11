<?php

/**
 * Plantilla de integración de Tienda WooCommerce con el Theme de Wordpress
 *
 * @author Eric Bravo para Nerdy Trust <ebravo@itcitrus.mx>
 * @package Nerdy Trust - CIMAB/WooCommerce/Templates
 * @version 1.0.1
 */

?>
<?php get_header(); ?>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-7 shop-index">
				<?php woocommerce_content(); ?>
			</div>

			<!-- sidebar -->
				<?php get_sidebar(); ?>
			<!-- /sidebar -->
		</div>
	</div>
<?php get_footer(); ?>