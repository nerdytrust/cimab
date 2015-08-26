<?php 
/**
 * Template Name: Contacto
 */
?>
<?php get_header(); ?>
	</div>
	<div class="row">
		<div class="col-md-7 cont">
			<h1><?php the_title(); ?></h1>
			<div class="col-md-12 intro">
				<h2 class="colours-purple">Completa tus datos para enviarnos la solicitud. <br>¡Tu contacto es muy importante para nosotros!</h2>
			</div>
			<div class="col-md-12">
				<?php get_template_part( 'form', 'contacto' ); ?>
			</div>
			<div class="col-md-12 entry">
				<div class="col-md-12">
					<div class="col-md-6 green-top-border h185">
						<h4 class="colours-green">CENTRO DE INFORMACIÓN DISTRITO FEDERAL</h4>
						<div class="row">
							<div class="col-md-12">
								<ul class="list-unstyled">
									<li>Ometusco No. 44, Hipódromo, Delegación Cuauhtémoc, C.P. 06100, México D.F.</li>
									<li><strong class="colours-green">Horario de atención: </strong>lunes a viernes de <strong>9 a 18 hrs.</strong></li>
									<li><strong class="colours-green">Teléfonos: </strong> 55.74.90.58 y 55.74.90.73</li>
									<li><strong class="colours-green">Correo electrónico: </strong><a href="mailto:info@cimab.org" class="colours-black">info@cimab.org</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-6 purple-top-border h185">
						<h4 class="colours-purple">CENTRO DE INFORMACIÓN MONTERREY</h4>
						<div class="row">
							<div class="col-md-12">
								<ul class="list-unstyled">
									<li>Matamoros, Esq. Calle 5 de Mayo, Palo Blanco, San Pedro Garza García, C.P. 66230, Nuevo León</li>
									<li><strong class="colours-purple">Horario de atención: </strong>lunes a viernes de <strong>9 a 18 hrs.</strong></li>
									<li><strong class="colours-purple">Teléfonos: </strong>01.81.83.38.70.88 y 01.81.83.38.00.88</li>
									<li><strong class="colours-purple">Correo electrónico: </strong><a href="mailto:infonl@cimab.org" class="colours-black">infonl@cimab.org</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- módulo de compartir -->
				<?php get_template_part( 'shareit' ); ?>
			<!-- /módulo de compartir -->
		</div>
		<!-- sidebar -->
			<?php get_sidebar(); ?>
		<!-- /sidebar -->
	</div>
<?php get_footer(); ?>