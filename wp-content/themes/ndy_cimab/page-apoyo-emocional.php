<?php 
/**
 * Template Name: Apoyo emocional
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
				<div class="col-md-12">
					<div class="col-md-6">
						<div class="carousel slide" role="carousel" id="carousel_logros">
							<div class="carousel-inner" role="listbox">
								<div class="item active"><img src="<?php bloginfo( 'template_url' ); ?>/img/apoyo-emocional-001.jpg" alt="" class="img-responsive"></div>
								<div class="item"><img src="<?php bloginfo( 'template_url' ); ?>/img/apoyo-emocional-002.jpg" class="img-responsive"></div>
								<div class="item"><img src="<?php bloginfo( 'template_url' ); ?>/img/apoyo-emocional-003.jpg" class="img-responsive"></div>
								<div class="item"><img src="<?php bloginfo( 'template_url' ); ?>/img/apoyo-emocional-004.jpg" class="img-responsive"></div>
								<div class="item"><img src="<?php bloginfo( 'template_url' ); ?>/img/apoyo-emocional-005.jpg" class="img-responsive"></div>
								<div class="item"><img src="<?php bloginfo( 'template_url' ); ?>/img/apoyo-emocional-006.jpg" class="img-responsive"></div>
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
					</div>
					<div class="col-md-6 entry">
						<h2 class="colours-pink">En Fundación Cimab brindamos desde 2004 apoyo emocional en grupo para acompañar y apoyar a las mujeres que han sido diagnosticadas con cáncer de mama.</h2>
						<h4><strong>Es un espacio seguro y confiable donde les ayudamos a identificar, aceptar y expresar los sentimientos y emociones que experimentan a lo largo de la enfermedad.</strong></h4>
					</div>
				</div>
				<div class="spacing-down-sm"></div>
				<div class="col-md-12">
					<p>En el grupo podrán compartir sus experiencias, intercambiar información objetiva sobre los temas que les inquietan o preocupan y aprender de otras personas que atraviesan una situación similar. Les proporcionará conocimientos sobre la enfermedad y los diferentes tratamientos, además de fomentar una actitud positiva para enfrentar el proceso de manera activa y participativa. Las sesiones son completamente gratuitas y dirigidas por un profesional de la salud capacitada en atención de pacientes oncológicos.</p>
					<p>Para participar en el grupo de apoyo, la persona interesada deberá asistir puntualmente el día y hora de la sesión, presentando el carnet de la institución médica donde recibe atención y/o hoja de diagnóstico.</p>
				</div>
				<div class="col-md-12">
					<div class="col-md-6 green-top-border h360">
						<h3 class="colours-green">Grupos de Apoyo Gratuitos</h3>
						<strong class="text-uppercase">&bull; En el Distrito Federal</strong>
						<h4 class="colours-green">Horario: Miércoles, de 11 a 13 hrs. o de 16 a 18 hrs.</h4>
						<p>Ometusco No. 44, Hipódromo, Delegación Cuauhtémoc, CP. 06100, México DF. A unas cuadras del Metro o Metrobús Chilpancingo.</p>
						<hr>
						<strong class="text-uppercase">&bull; Monterrey</strong>
						<h4 class="colours-green">Horario: Jueves de 10:30 a 12:30 hrs.</h4>
						<p>Matamoros, Esq. Calle 5 de Mayo, Palo Blanco San Pedro Garza García, CP.66230, Nuevo León.</p>
					</div>
					<div class="col-md-6 purple-top-border h360">
						<h3 class="colours-purple">Grupo de apoyo a pacientes con reincidencia</h3>
						<strong class="text-uppercase">&bull; En el Distrito Federal</strong>
						<h4 class="colours-purple">Horario: Jueves de 11 a 13 hrs.</h4>
						<p>Ometusco No. 44, Hipódromo, Delegación Cuauhtémoc, CP. 06100, México DF. A unas cuadras del Metro o Metrobús Chilpancingo.</p>
					</div>
				</div>
				<div class="col-md-12">
					<div class="col-md-6 skyblue-top-border h360">
						<h3 class="colours-skyblue">Orientación para familiares y cuidados</h3>
						<p>Brindamos orientación individual o en grupo para familiares y/o cuidadores de mujeres con cáncer de mama con el objetivo de que adquieran herramientas e información útil para enfrentar la enfermedad y apoyar a la paciente en las diferentes etapas del tratamiento.</p>
						<p class="colours-skyblue">Para realizar una cita, favor de comunicarse con nosotros:</p>
						<strong class="text-uppercase">&bull; En el Distrito Federal</strong>
						<p>Tel. 5574.9058 / 5574.9073</p>
						<hr>
						<strong class="text-uppercase">&bull; En Monterrey</strong>
						<p>Tel. 81.83.38.70.88</p>
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