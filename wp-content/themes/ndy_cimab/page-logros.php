<?php
/**
 * Template Name: Logros
 */
?>
<?php get_header(); ?>
	</div>
	<div class="row">
		<div class="col-md-7 cont">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<div class="col-md-12 intro">
					<?php if ( has_excerpt( $post->ID ) ) : ?>
						<h2><?php the_excerpt(); ?></h2>
					<?php endif; ?>
				</div>
				<div class="carousel slide" role="carousel" id="carousel_logros">
					<div class="carousel-inner" role="listbox">
						<div class="item active"><img src="<?php bloginfo( 'template_url' ); ?>/img/banner-logros1.png" alt="" class="img-responsive img-full"></div>
						<div class="item"><img src="<?php bloginfo( 'template_url' ); ?>/img/banner-logros2.png" class="img-responsive img-full"></div>
						<div class="item"><img src="<?php bloginfo( 'template_url' ); ?>/img/banner-logros3.png" class="img-responsive img-full"></div>
						<div class="item"><img src="<?php bloginfo( 'template_url' ); ?>/img/banner-logros4.png" class="img-responsive img-full"></div>
					</div>
					<a href="#carousel_logros" class="left carousel-control" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previo</span>
					</a>
					<a href="#carousel_logros" class="right carousel-control" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Siguiente</span>
					</a>
				</div>
				<br><br>
				<img src="<?php bloginfo( 'template_url' ); ?>/img/logros-numeros.png" alt="Logros Números" class="img-responsive img-full">
				<div class="col-md-12 entry">
					<h3><img src="<?php bloginfo( 'template_url' ); ?>/img/bullet-somos.png" alt=""><strong class="colours-green">Transparencia</strong></h3>
					<?php the_content(); ?>
				</div>
				<div class="col-md-12">
					<div class="col-md-6 green-top-border h185">
						<h4 class="colours-green">¿Quiénes participan altruistamente con nosotros?</h4>
						<div class="row">
							<div class="col-md-6">
								<ul>
									<li>Sociedad Civil</li>
									<li>Empresas</li>
									<li>Medios de comunicación</li>
								</ul>
							</div>
							<div class="col-md-6">
								<ul>
									<li>Voluntarios</li>
									<li>Organismos gubernamentales</li>
									<li>Figuras públicas</li>
								</ul>
							</div>
							<div class="col-md-12">
								<a href="<?php bloginfo( 'url' ); ?>/contacto" class="btn btn-green btn-square pull-right"><i class="fa fa-plus"></i></a>
								<br><br>
							</div>
						</div>
					</div>
					<div class="col-md-6 purple-top-border h185">
						<h4 class="colours-purple">¿De dónde provienen nuestros recursos?</h4>
						<div class="row">
							<div class="col-md-12">
								<ul>
									<li>Donativos realizados por empresas</li>
									<li>Donativos realizados por personas físicas</li>
									<li>Venta de artículos con cuasa</li>
									<li>Campañas informativas, eventos deportivos y de recaudación</li>
								</ul>
							</div>
							<div class="col-md-12">
								<a href="<?php bloginfo( 'url' ); ?>/contacto" class="btn btn-purple btn-square pull-right"><i class="fa fa-plus"></i></a>
								<br><br>
							</div>
						</div>
					</div>
					<div class="col-md-6 skyblue-top-border h185">
						<h4 class="colours-skyblue">¿Cómo se utilizan los recursos?</h4>
						<div class="row">
							<div class="col-md-12">
								<ul>
									<li>Servicios</li>
									<li>Programas</li>
									<li>Campañas sociales</li>
									<li>Otros proyectos sociales</li>
								</ul>
							</div>
							<div class="col-md-12">
								<a href="<?php bloginfo( 'url' ); ?>/contacto" class="btn btn-skyblue btn-square pull-right"><i class="fa fa-plus"></i></a>
								<br><br>
							</div>
						</div>
					</div>
					<div class="col-md-6 pink-top-border h185">
						<h4 class="colours-pink">¿Quién vigila el uso de los recursos?</h4>
						<div class="row">
							<div class="col-md-12 logros-ficha">
								<p>Somos auditados anualmente por Solla Tello de Menéses S.C. para asegurar el buen manejo de los fondos que procuramos</p>
							</div>
							<div class="col-md-12">
								<a href="<?php bloginfo( 'url' ); ?>/contacto" class="btn btn-pink btn-square pull-right"><i class="fa fa-plus"></i></a>
								<br><br>
							</div>
						</div>
					</div>
				</div>
				<!-- módulo de compartir -->
					<?php get_template_part( 'shareit' ); ?>
				<!-- /módulo de compartir -->
			<?php endwhile; ?>
			<?php else: ?>
				<h2><?php echo __( 'No existe el contenido' ); ?></h2>
			<?php endif; ?>
		</div>
		<!-- sidebar -->
			<?php get_sidebar(); ?>
		<!-- /sidebar -->
	</div>
<?php get_footer(); ?>