<?php get_header(); ?>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-7 cont">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<h1><?php $cat = get_the_category_custompost( $post->ID, 'agreements'); echo $cat[0]->name; ?></h1>
					<?php if ( has_excerpt( $post->ID ) ) : ?>
						<div class="col-md-12 intro">
							<h2><?php the_excerpt(); ?></h2>
						</div>
					<?php endif; ?>
					<?php if ( has_post_thumbnail() ) : ?>
						<?php the_post_thumbnail( 'large', array( 'class' => 'img-responsive img-full' ) ); ?>
					<?php endif; ?>
					<div class="col-sm-12 entry">
						<div class="row">
							<div class="col-sm-12 specs">
								<p>Usted solicitó el estudio <strong class="text-resalte"><?php the_title(); ?></strong>. Para obtener este convenio, por favor comuníquese con nosotros:</p>
								<p class="adicional">
									<em>De lunes a viernes de 09 a 18hrs.</em>
									<em>Tel: 55.74.90.58</em>
									<em>Tel: 55.74.90.73</em>
								</p>
							</div>
						</div>
						<p>
							<strong>Fundación Cimab ha establecido alianzas con Hospitales y Médicos especialistas para facilitar el acceso únicamente a mujeres de bajos recursos económicos a los estudios de detección de cáncer de mama y/o consultas especializadas de calidad con costo preferencial</strong>.
						</p>
						<p>Estos servicios se ubican en diferentes zonas del área metropolitana para facilitar el acceso de las pacientes en instituciones de atención médica privada con el equipo más adecuado para brindar una atención de calidad con personal calificado.</p>
						<p>Los médicos especialistas están certificados y cuentan con una amplia trayectoria profesional. El costo de la consulta especializada dependerá del nivel socio-económico de la paciente y cada médico se reservará el derecho a brindar o no ese costo, especialmente en consultas de primera vez o para una segunda opinión médica.</p>
						<p>Los precios preferenciales no aplican para pacientes con seguro de gastos médicos, ni con ningún otro tipo de descuento. Fundación Cimab no se hace responsable de los resultados médicos que las pacientes obtengan, ni está comprometida a cubrir los gastos que se originen de los tratamientos que les sean indicados.</p>
					</div>
					<div class="col-md-12 btn-more-contents">
						<div class="row">
							<div class="col-md-6"></div>
							<div class="col-md-6">
								<a href="<?php echo bloginfo( 'url' ); ?>/convenios" class="btn btn-cimab-green btn-lg btn-block pull-right"><?php echo __( 'Volver atrás' ); ?></a>
							</div>
						</div>
					</div>
					
					<!-- módulo de compartir -->
						<?php get_template_part( 'shareit' ); ?>
					<!-- /módulo de compartir -->

					<!-- módulo de comentarios -->
						<?php get_template_part( 'comments', 'form' ); ?>
					<!-- /módulo de comentarios -->
				
				<?php endwhile; ?>
				<?php else: ?>
					<h2><?php echo __( 'No existe el contenido' ); ?></h2>
				<?php endif; ?>
			</div>
			<!-- sidebar -->
				<?php get_sidebar(); ?>
			<!-- /sidebar -->
		</div>
	</div>
<?php get_footer(); ?>