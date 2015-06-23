	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 col-md-12">
				<div class="g-apoyo">
					<h2><?php echo __( 'Gracias por el apoyo de' ); ?></h2>
					<span>
						<img src="<?php echo bloginfo( 'template_url' ); ?>/img/alpura.png" alt="">
						<img src="<?php echo bloginfo( 'template_url' ); ?>/img/campbells.png" alt="">
						<img src="<?php echo bloginfo( 'template_url' ); ?>/img/epura.png" alt="">
						<img src="<?php echo bloginfo( 'template_url' ); ?>/img/colgate.png" alt="">
						<img src="<?php echo bloginfo( 'template_url' ); ?>/img/kellogs.png" alt="">
						<img src="<?php echo bloginfo( 'template_url' ); ?>/img/kisses.png" alt="">
						<img src="<?php echo bloginfo( 'template_url' ); ?>/img/oster.png" alt="">
						<img src="<?php echo bloginfo( 'template_url' ); ?>/img/bimbo.png" alt="">
						<img src="<?php echo bloginfo( 'template_url' ); ?>/img/conagra.png" alt="">
					</span>
				</div>
			</div>
		</div>
	</div>
	<footer>
		<div class="container-fluid">
			<div class="row footer2">
				<div class="col-xs-12 col-md-4 skuare">
					<!-- módulo de newsletter del footer -->
						<?php get_template_part( 'footer', 'newsletter' ); ?>
					<!-- /módulo de newsletter del footer -->
				</div>
				<div class="col-xs-12 col-md-4 skuare">
					<div class="col-md-12 sk">
						<h3><?php echo __( 'Contáctanos' ); ?></h3>
						<h4><?php echo __( 'Centro de información Distrito Federal' ); ?></h4>
						<p>
							<?php echo __( 'Ometusco No.44, Hipodromo,' ); ?></br>
							<?php echo __( 'Delegación Cuauhtémoc,' ); ?></br>
							<?php echo __( 'C.P.06100, México DF.' ); ?></br>
							<?php echo __( 'Horario de atención de L-V 9 a 18hrs.' ); ?></br>
							<?php echo __( 'Teléfonos | 55.74.90.85 y 55.74.90.73' ); ?></br>
							<?php echo __( 'info@cimab.org' ); ?>
						</p>

						<h4><?php echo __( 'Centro de información Monterrey' ); ?></h4>
						<p>
							<?php echo __( 'Matamoros, Esq. Calle 5 de mayo, Palo Blanco,' ); ?></br>
							<?php echo __( 'San Pedro Garza García,' ); ?></br>
							<?php echo __( 'C.P.66230, Nuevo León.' ); ?></br>
							<?php echo __( 'Horario de atención de L-V 9 a 18hrs.' ); ?></br>
							<?php echo __( 'Teléfonos | 81.83.70.88 y 81.83.00.88' ); ?></br>
							<?php echo __( 'infonl@cimab.org' ); ?>
						</p>
					</div>	
				</div>
				<div class="col-xs-12 col-md-4 skuare">
					<div class="col-md-12 sk">
						<h3><?php echo __( 'Síguenos' ); ?></h3>
						<div class="row sgns">
							<a href="https://instagram.com/fundacion_cimab/" class="" target="_blank"><img src="<?php echo bloginfo( 'template_url' ); ?>/img/bt1.png" alt="" class=""></a>
							<a href="https://twitter.com/fundacion_cimab" class="" target="_blank"><img src="<?php echo bloginfo( 'template_url' ); ?>/img/bt2.png" alt="" class=""></a>
							<a href="https://www.facebook.com/pages/Fundacion-Cimab/126791140757052" class="" target="_blank"><img src="<?php echo bloginfo( 'template_url' ); ?>/img/bt3.png" alt="" class=""></a>
							<!--<a href="http://plus.google.com" class="" target="_blank"><img src="<?php echo bloginfo( 'template_url' ); ?>/img/bt4.png" alt="" class=""></a>
							<a href="http://pinterest.com" class="" target="_blank"><img src="<?php echo bloginfo( 'template_url' ); ?>/img/bt5.png" alt="" class=""></a>-->
							<a href="<?php echo bloginfo( 'rss2_url' ); ?>" class="" target="_blank"><img src="<?php echo bloginfo( 'template_url' ); ?>/img/bt6.png" alt="" class=""></a>
						</div>
					</div>

					<!-- módulo de prensa del footer -->
						<?php get_template_part( 'footer', 'prensa' ); ?>
					<!-- /módulo de prensa del footer -->
				</div>


			</div><!--termina row footer-->
		</div>
		<div class="col-lg-12 pie"><?php echo __( 'Copyright Cimab' ); ?> <?php echo date( 'Y') ; ?></div>
	</footer>
	<?php wp_footer(); ?>
</body>
</html>