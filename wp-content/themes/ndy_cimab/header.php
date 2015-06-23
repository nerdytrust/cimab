<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="author" content="Nerdy Trust">
	<link rel="apple-touch-icon-precomposed" href="<?php bloginfo( 'template_url' ); ?>/img/favicon-152.png">
	<meta name="msapplication-TileColor" content="#FFFFFF">
	<meta name="msapplication-TileImage" content="<?php bloginfo( 'template_url' ); ?>/img/favicon-144.png">
	<link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php bloginfo( 'template_url' ); ?>/img/favicon-152.png">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php bloginfo( 'template_url' ); ?>/img/favicon-144.png">
	<link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php bloginfo( 'template_url' ); ?>/img/favicon-120.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php bloginfo( 'template_url' ); ?>/img/favicon-114.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php bloginfo( 'template_url' ); ?>/img/favicon-72.png">
	<link rel="apple-touch-icon-precomposed" href="<?php bloginfo( 'template_url' ); ?>/img/favicon-57.png">
	<link rel="icon" href="<?php bloginfo( 'template_url' ); ?>/img/favicon-32.png" sizes="32x32">
	<title>
		<?php
            if ( function_exists('is_tag') && is_tag() ) {
                single_tag_title( "Archivo de etiquedas de &quot;" );
                echo '&quot; - ';
            } elseif (is_archive()) {
                wp_title('');
                echo ' Archivo - ';
            } elseif (is_search()) {
                echo 'Buscar &quot;' . wp_specialchars($s) . '&quot; - ';
            } elseif (!(is_404()) && (is_single()) || (is_page())) {
                wp_title('');
                echo ' - ';
            } elseif (is_404()) {
                echo 'No se ha encontrado - ';
            }
            if (is_home()) {
                bloginfo( 'name' );
                echo ' - ';
                bloginfo( 'description' );
            } else {
                bloginfo( 'name' );
            }
            if ($paged > 1) {
                echo ' - página ' . $paged;
            }
            ?>
	</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="text/plain" rel="author" href="<?php bloginfo( 'template_url' ) ?>/humans.txt">
	<?php echo wp_head(); ?>
</head>
<body <?php body_class( $class ); ?>>
	<div class="container-fluid">
		<div class="row redes">
			<div class="col-xs-12 col-sm-6 col-md-5 col-lg-4 pull-right">
				<a href="mailto:info@cimab.org"><i class="fa fa-envelope fa-2x"></i></a>
				<a href="https://twitter.com/fundacion_cimab" target="_blank"><i class="fa fa-twitter fa-2x"></i></a>
				<a href="https://www.facebook.com/pages/Fundacion-Cimab/126791140757052" target="_blank"><i class="fa fa-facebook fa-2x"></i></a>
				<!--<a href="http://plus.google.com" target="_blank"><i class="fa fa-google-plus fa-2x"></i></a>-->
				<a href="<?php woocommerce_cart_url(); ?>" class="market"><span><?php woocommerce_cart_total_items(); ?></span></a>
			</div>
		</div>
		<div class="row bloq1">
			<div class="col-xs-4 col-sm-6 col-md-4 col-lg-4">
				<a href="<?php echo bloginfo( 'url' ); ?>"><img src="<?php echo bloginfo( 'template_url' ); ?>/img/logo.png" class="img-responsive"></a>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
				<a href="<?php echo bloginfo( 'url' ); ?>/categoria-producto/vouchers-donacion/" class="btn-dona pull-right"><img src="<?php echo bloginfo( 'template_url' ); ?>/img/dona.png" alt="" class="img-respondive"></a>
			</div>	
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<?php get_search_form(); ?>
			</div>
		</div><!--termina row bloq1-->
		<div class="row menu">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div id="menu-m"></div>
				<?php wp_nav_menu( array( 'menu' => 'Principal', 'menu_class' => 'nav' ) ); ?>
			</div>
		</div>	<!--termina row menu-->