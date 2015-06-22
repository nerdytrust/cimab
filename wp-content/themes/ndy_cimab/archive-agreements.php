<?php get_header(); ?>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-7 contenido">
				<div class="notas">
					<h1 class="seccion">
						<?php echo get_category_tax() ?>
					</h1>
					<div class="col-md-12 intro">
						<h2>Fundación Cimab ha establecido alianzas con Hospitales y Médicos especialistas para facilitar el acceso únicamente a mujeres de bajos recursos económicos a los estudios de detección de cáncer de mama y/o consultas especializadas de calidad con costo preferencial.</h2>
					</div>
					<div class="col-md-12 filtros">
						<div class="row">
							<form action="" class="form-inline" method="GET">
								<div class="form-group">
									<div class="col-md-10">
										<select name="estado" id="" class="form-control">
											<option value="">Ciudad / Estado</option>
											<option value="1">Guerrero</option>
											<option value="2">Guanajuato</option>
											<option value="3">Durango</option>
											<option value="4">Distrito Federal</option>
											<option value="5">Colima</option>
											<option value="6">Coahuila</option>
											<option value="7">Chihuahua</option>
											<option value="8">Chiapas</option>
											<option value="9">Campeche</option>
											<option value="10">Baja California Sur</option>
											<option value="11">Baja California</option>
											<option value="12">Aguascalientes</option>
											<option value="17">Hidalgo</option>
											<option value="18">Jalisco</option>
											<option value="19">Estado de México</option>
											<option value="20">Michoacán</option>
											<option value="21">Morelos</option>
											<option value="22">Nayarit</option>
											<option value="23">Monterrey</option>
											<option value="24">Oaxaca</option>
											<option value="25">Puebla</option>
											<option value="26">Queretaro</option>
											<option value="27">Quintana Roo</option>
											<option value="28">San Luis Potosí</option>
											<option value="29">Sinaloa</option>
											<option value="30">Sonora</option>
											<option value="31">Tabasco</option>
											<option value="32">Tamaulipas</option>
											<option value="33">Tlaxcala</option>
											<option value="34">Veracruz</option>
											<option value="35">Yucatán</option>
											<option value="36">Zacatecas</option>
											<option value="37">Nuevo Leon</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-10">
										<select name="servicio" id="" class="form-control">
											<option value="">Tipo de Servicio</option>
											<option value="1">Estudio o servicio médico</option>
											<option value="2">Consulta especializada</option>
											<option value="4">Medicamentos</option>
											<option value="5">Prótesis, pelucas y mangas para linfedema</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-10">
										<button class="btn btn-primaty" type="submit">Buscar</button>
									</div>
								</div>
							</form>
						</div>
					</div>
					<div class="col-md-12">
						<?php $estado = get_query_var( 'estado' ); $servicio = get_query_var( 'servicio' ); ?>
						<table class="table table-bordered">
							<tr class="convenios-lista-header">
								<th>Hospital / Especialista</th>
								<th>Estudio Médico</th>
								<th>Dirección y Teléfono</th>
								<th>Solicitar a CIMAB</th>
							</tr>
							<?php
								$query = new WP_Query( array( 'post_type' => 'agreements', 'posts_per_page' => 15, 'orderby' => 'title' ) );
								if ( ! empty( $estado ) && ! empty( $servicio ) ){
									$query = new WP_Query( array( 'post_type' => 'agreements', 'posts_per_page' => 15, 'orderby' => 'title', 'meta_query' => array( 'relation' => 'AND', array( 'key' => 'estado', 'value' => $estado ), array( 'key' => 'tipo', 'value' => $servicio ) ) ) );
								} elseif ( empty( $estado ) && ! empty( $servicio ) ){
									$query = new WP_Query( array( 'post_type' => 'agreements', 'posts_per_page' => 15, 'orderby' => 'title', 'meta_key' => 'servicio', 'meta_value' => $servicio ) );
								} elseif( ! empty( $estado ) && empty ( $servicio ) ) {
									$query = new WP_Query( array( 'post_type' => 'agreements', 'posts_per_page' => 15, 'orderby' => 'title', 'meta_key' => 'estado', 'meta_value' => $estado ) );
								}
							?>
							<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
								<tr>
									<?php $cat = get_the_category_custompost( $post->ID, 'agreements'); ?>
									<td><?php echo $cat[0]->name; ?></td>
									<td><?php the_title(); ?></td>
									<td><?php echo get_field( 'direccion' ); ?></td>
									<td class="text-center"><a href="<?php the_permalink(); ?>" class="btn btn-cimab-pink btn-circle"><i class="fa fa-angle-right"></i></a></td>
								</tr>
							<?php endwhile; ?>
							<?php else: ?>
								<tr>
									<td colspan="4">
										<h2 class="not-found"><?php echo __( 'No contamos con convenios para el estado o servicio seleccionado' ); ?></h2>
									</td>
								</tr>
							<?php endif; ?>
						</table>
					</div>
				</div>
				<div class="col-sm-12 paginacion-seccion">
					<?php if ( function_exists( 'wp_pagenavi' ) ) wp_pagenavi(); ?>
				</div>
			</div>
			<!-- sidebar -->
				<?php get_sidebar(); ?>
			<!-- /sidebar -->
		</div>
	</div>
<?php get_footer(); ?>