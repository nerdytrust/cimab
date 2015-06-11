<?php get_header(); ?>
		<div class="row">
			<?php get_template_part( 'loop', 'slider' ); ?>
		</div>
	</div><!--termina container fluid-->

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-7 apoyo">
				<?php get_template_part( 'loop', 'index' ); ?>
				<?php get_template_part( 'loop', 'galleries' ) ?>
			</div>

			<!-- sidebar -->
				<?php get_sidebar(); ?>
			<!-- /sidebar -->
		</div>
	</div><!--termina container-->
<?php get_footer(); ?>