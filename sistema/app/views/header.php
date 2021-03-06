<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="es-mx">
<head>
	<meta charset="UTF-8">
	<meta name="robots" content="noindex, nofollow">
	<meta name="googlebot" content="noindex">
	<link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>img/favicon-152.png">
	<meta name="msapplication-TileColor" content="#FFFFFF">
	<meta name="msapplication-TileImage" content="<?php echo base_url(); ?>img/favicon-144.png">
	<link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo base_url(); ?>img/favicon-152.png">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>img/favicon-144.png">
	<link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php echo base_url(); ?>img/favicon-120.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>img/favicon-114.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>img/favicon-72.png">
	<link rel="apple-touch-icon-precomposed" href="f<?php echo base_url(); ?>img/favicon-57.png">
	<link rel="icon" href="<?php echo base_url(); ?>img/favicon-32.png" sizes="32x32">
	<title>Fundación Cim*ab - <?php echo $title; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Cache-control" content="no-cache">
	<?= link_tag('css/bootstrap.min.css'); ?>
	<?= link_tag('css/font-awesome.min.css'); ?>
	<?= link_tag('css/sistema.css'); ?>
	<?= link_tag('css/datepicker.css'); ?>
	<?= link_tag('css/jquery.dataTables.min.css'); ?>
</head>
<body>
	<div id="foo"></div>
	<div id="messages"></div>
	<div class="container-fluid">
		<div class="row redes navbar-fixed-top">
			<div class="container text-right">
				<div class="col-md-12 color-white">
				<?php
					if( $this->session->userdata( 'session' ) )
						echo '<span class="text-left title-system"><a href="'.base_url('logout').'" class="salir">Salir</a></span>';
				?>
					<span class="title-system">Sistema de Registro de Entrevista inicial para pacientes que reciben apoyo emocional</span>
					<span class="logo-system">
						<img src="<?=base_url();?>img/logo_cimab.png" alt="" class="pull-right">
					</span>
				</div>
			</div>
			<div class="row bar-purple"></div>
		</div>
		
	