<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php echo bloginfo( 'name' ); ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo bloginfo( 'template_url' ); ?>/css/styles-demo2.css">

	<link rel="stylesheet" href="<?php echo bloginfo( 'template_url' ); ?>/css/flexslider.css" type="text/css" media="screen" />
	<?php echo wp_head(); ?>
</head>
<body>
	<div class="container-fluid">
		<div class="row redes">
			<!--<div class="col-xs-12 col-sm-6 col-sm-offset-6 col-md-5 col-md-offset-7 col-lg-4 col-lg-offset-8">-->
			<div class="col-xs-12 col-sm-6 col-md-5 col-lg-4 pull-right">
				<a href=""><i class="fa fa-envelope fa-2x"></i></a>
				<a href=""><i class="fa fa-twitter fa-2x"></i></a>
				<a href=""><i class="fa fa-facebook fa-2x"></i></a>
				<a href=""><i class="fa fa-google-plus fa-2x"></i></a>
				<a href="" class="market"><span>2</span></a>
			</div>
		</div>
		<div class="row bloq1">
			<div class="col-xs-4 col-sm-6 col-md-4 col-lg-4">
				<a href="<?php echo bloginfo( 'url' ); ?>"><img src="<?php echo bloginfo( 'template_url' ); ?>/img/logo.png" class="img-responsive"></a>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
				<button class="btn-dona pull-right"><img src="<?php echo bloginfo( 'template_url' ); ?>/img/dona.png" alt="" class="img-respondive"></button>
			</div>	
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Search for...">
					<span class="input-group-btn">
						<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
					</span>
				</div><!-- /input-group -->
			</div>
		</div><!--termina row bloq1-->
		<div class="row menu">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div id="menu-m"></div>
				<ul class="nav">
					<li role="" class=""><a href="nosotros.html">Sobre Nosotros</a></li>
					<li role="" class=""><a href="sobre-cancer.html">Sobre Cancer de Mama</a></li>
					<li role="" class=""><a href="#">Servicios</a></li>
					<li role="" class=""><a href="#">Programas</a></li>
					<li role="" class=""><a href="#">Noticias</a></li>
					<li role="" class=""><a href="#">Unete</a></li>
					<li role="" class=""><a href="#">Tienda en Linea</a></li>
				</ul>
			</div>
		</div>	<!--termina row menu-->