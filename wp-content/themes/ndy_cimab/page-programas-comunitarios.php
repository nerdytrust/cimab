<?php
/**
 * Template Name: Programas Comunitarios
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
					<div class="col-md-5">
						<div class="carousel slide" role="carousel" id="carousel_logros">
							<div class="carousel-inner" role="listbox">
								<div class="item active"><img src="<?php bloginfo( 'template_url' ); ?>/img/comunitarios-001.jpg" alt="" class="img-responsive"></div>
								<div class="item"><img src="<?php bloginfo( 'template_url' ); ?>/img/comunitarios-002.jpg" class="img-responsive"></div>
								<div class="item"><img src="<?php bloginfo( 'template_url' ); ?>/img/comunitarios-003.jpg" class="img-responsive"></div>
								<div class="item"><img src="<?php bloginfo( 'template_url' ); ?>/img/comunitarios-004.jpg" class="img-responsive"></div>
								<div class="item"><img src="<?php bloginfo( 'template_url' ); ?>/img/comunitarios-005.jpg" class="img-responsive"></div>
								<div class="item"><img src="<?php bloginfo( 'template_url' ); ?>/img/comunitarios-006.jpg" class="img-responsive"></div>
								<div class="item"><img src="<?php bloginfo( 'template_url' ); ?>/img/comunitarios-007.jpg" class="img-responsive"></div>
								<div class="item"><img src="<?php bloginfo( 'template_url' ); ?>/img/comunitarios-008.jpg" class="img-responsive"></div>
								<div class="item"><img src="<?php bloginfo( 'template_url' ); ?>/img/comunitarios-009.jpg" class="img-responsive"></div>
								<div class="item"><img src="<?php bloginfo( 'template_url' ); ?>/img/comunitarios-010.jpg" class="img-responsive"></div>
								<div class="item"><img src="<?php bloginfo( 'template_url' ); ?>/img/comunitarios-011.jpg" class="img-responsive"></div>
								<div class="item"><img src="<?php bloginfo( 'template_url' ); ?>/img/comunitarios-012.jpg" class="img-responsive"></div>
								<div class="item"><img src="<?php bloginfo( 'template_url' ); ?>/img/comunitarios-013.jpg" class="img-responsive"></div>
								<div class="item"><img src="<?php bloginfo( 'template_url' ); ?>/img/comunitarios-014.jpg" class="img-responsive"></div>
								<div class="item"><img src="<?php bloginfo( 'template_url' ); ?>/img/comunitarios-015.jpg" class="img-responsive"></div>
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
						<?php the_content(); ?>
					</div>
				</div>
				<hr class="he">
				<div class="col-md-12">
					<img src="<?php bloginfo( 'template_url' ); ?>/img/bullet-somos.png" alt="">
					<span class="cv"><strong>LOGROS OBTENIDOS</strong> en el programa son:</span>
					<div class="spacing-down-sm"></div>
					<div class="dropdown">
						<table class="table table-bordered text-center">
							<tr class="back-pink4 colours-white">
								<th class="text-center">Año</th>
								<th class="text-center">Estado</th>
								<th class="text-center">Municipios</th>
								<th class="text-center">Organizaciones colaboradoras</th>
								<th class="text-center">Nº de promotoras capacitadas</th>
								<th class="text-center">Nº de personas sensibilizadas</th>
								<th class="text-center">Nº de exploraciones clínicas</th>
								<th class="text-center">Nº de mastografías</th>
								<th class="text-center">Nº de ultrasonidos mamarios</th>
								<th class="text-center">Nº de biopsias</th>
								<th class="text-center">Nº de casos de cáncer diagnosticados</th>
							</tr>
							<tr>
								<td>2006</td>
								<td>Estado de México</td>
								<td>Atlacomulco</td>
								<td>Gimtrap</td>
								<td></td>
								<td>500</td>
								<td></td>
								<td>206</td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>2007</td>
								<td>Estado de México</td>
								<td>Ixtlahuaca</td>
								<td>Consejo Estatal de la Mujer</td>
								<td></td>
								<td>600</td>
								<td></td>
								<td>195</td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>2008</td>
								<td>Estado de México</td>
								<td>Amanalco de Becerra, Donato Guerra, San José del Rincón, San Felipe del Progreso</td>
								<td></td>
								<td></td>
								<td>2,700</td>
								<td>1,287</td>
								<td>753</td>
								<td></td>
								<td>3</td>
								<td>3</td>
							</tr>
							<tr>
								<td>2009</td>
								<td>Estado de México</td>
								<td>Amanalco de Becerra, Donato Guerra, San José del Rincón, San Felipe del Progreso</td>
								<td></td>
								<td></td>
								<td>3,565</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>2009</td>
								<td>Michohacán</td>
								<td>Uruapan</td>
								<td>Mexfam</td>
								<td></td>
								<td></td>
								<td></td>
								<td>1,000</td>
								<td>200</td>
								<td>5</td>
								<td></td>
							</tr>
							<tr>
								<td>2010</td>
								<td>Nuevo León</td>
								<td>Escobedo, García, Guadalupe, Juárez, Monterrey, Santa Catarina</td>
								<td>Supera</td>
								<td>66</td>
								<td>15,000</td>
								<td>1,500</td>
								<td>1,500</td>
								<td>300</td>
								<td>30</td>
								<td></td>
							</tr>
							<tr>
								<td>2011</td>
								<td>Veracruz</td>
								<td>Tepetzintla, Chontla, Chicontepec, Ixcatepec, Tantima</td>
								<td>Mexfam</td>
								<td>29</td>
								<td>4,200</td>
								<td>224</td>
								<td>1,287</td>
								<td>399</td>
								<td>8</td>
								<td>3</td>
							</tr>
							<tr>
								<td>2011</td>
								<td>Nuevo León</td>
								<td>Monterrey, Apodaca, Escobedo, Juárez, García</td>
								<td>Supera</td>
								<td>19</td>
								<td>838</td>
								<td>461</td>
								<td>226</td>
								<td>20</td>
								<td>1</td>
								<td>1</td>
							</tr>
							<tr>
								<td>2012</td>
								<td>Estado de México</td>
								<td>Ecatepec</td>
								<td></td>
								<td>55</td>
								<td>3,377</td>
								<td>1,502</td>
								<td>1,016</td>
								<td>140</td>
								<td>2</td>
								<td>1</td>
							</tr>
							<tr>
								<td>2012</td>
								<td>Nuevo León</td>
								<td>Monterrey, Escobedo, Juárez, García, Santa Catarina, Guadalupe</td>
								<td>Supera</td>
								<td>457</td>
								<td>16,967</td>
								<td>2,288</td>
								<td>1,508</td>
								<td>32</td>
								<td>9</td>
								<td>4</td>
							</tr>
							<tr>
								<td>2012</td>
								<td>Hidalgo</td>
								<td>Ixmiquilpan</td>
								<td></td>
								<td>43</td>
								<td>4,279</td>
								<td>789</td>
								<td>1,424</td>
								<td>80</td>
								<td>6</td>
								<td>3</td>
							</tr>
							<tr>
								<td>2013</td>
								<td>Hidalgo</td>
								<td>Ixmiquilpan, Chilcuautla, Tasquillo</td>
								<td></td>
								<td>52</td>
								<td>4,346</td>
								<td>347</td>
								<td>1,435</td>
								<td></td>
								<td>2</td>
								<td>1</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="spacing-down"></div>

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