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
					<div class="col-md-12 sk">
						<h3><?php echo __( 'Suscribete a nuestro boletín' ); ?></h3>
						<div class="col-xs-12 col-md-10 col-md-offset-1">
							<div class="form-group">
								<label for="nombre"></label>
								<input type="text" class="form-control" id="usr" placeholder="<?php echo __( 'nombre' ); ?>">
							</div>
						</div>
						<div class="col-md-10 col-md-offset-1">
							<div class="form-group">
								<label for="email"></label>
								<input type="text" class="form-control" id="usr" placeholder="<?php echo __( 'email' ); ?>">
							</div>
						</div>
						<div class="col-md-4 col-md-offset-7">
							<button type="submit" class="btn"><?php echo __( 'enviar' ); ?></button>
						</div>
					</div>				
				</div>
				<div class="col-xs-12 col-md-4 skuare">
					<div class="col-md-12 sk">
						<h3><?php echo __( 'Contáctanos' ); ?></h3>
						<h4><?php echo __( 'Centro de información df' ); ?></h4>
						<p>
							<?php echo __( 'Ometusco No.44, Hipodromo,' ); ?></br>
							<?php echo __( 'Delegación Cuauhtémoc,' ); ?></br>
							<?php echo __( 'C.P.06100, México DF.' ); ?></br>
							<?php echo __( 'Horario de atención de L-V 9 a 18hrs.' ); ?></br>
							<?php echo __( 'Teléfonos | 55.74.90.85 y 55.74.90.73' ); ?></br>
							<?php echo __( 'info@cimab.org' ); ?>
						</p>

						<h4><?php echo __( 'Centro de información df' ); ?></h4>
						<p>
							<?php echo __( 'Ometusco No.44, Hipodromo,' ); ?></br>
							<?php echo __( 'Delegación Cuauhtémoc,' ); ?></br>
							<?php echo __( 'C.P.06100, México DF.' ); ?></br>
							<?php echo __( 'Horario de atención de L-V 9 a 18hrs.' ); ?></br>
							<?php echo __( 'Teléfonos | 55.74.90.85 y 55.74.90.73' ); ?></br>
							<?php echo __( 'info@cimab.org' ); ?>
						</p>
					</div>	
				</div>
				<div class="col-xs-12 col-md-4 skuare">
					<div class="col-md-12 sk">
						<h3><?php echo __( 'Siguenos' ); ?></h3>
						<div class="row sgns">
							<a href="#" class=""><img src="<?php echo bloginfo( 'template_url' ); ?>/img/bt1.png" alt="" class=""></a>
							<a href="#" class=""><img src="<?php echo bloginfo( 'template_url' ); ?>/img/bt2.png" alt="" class=""></a>
							<a href="#" class=""><img src="<?php echo bloginfo( 'template_url' ); ?>/img/bt3.png" alt="" class=""></a>
							<a href="#" class=""><img src="<?php echo bloginfo( 'template_url' ); ?>/img/bt4.png" alt="" class=""></a>
							<a href="#" class=""><img src="<?php echo bloginfo( 'template_url' ); ?>/img/bt5.png" alt="" class=""></a>
							<a href="#" class=""><img src="<?php echo bloginfo( 'template_url' ); ?>/img/bt6.png" alt="" class=""></a>
						</div>
					</div>

					<div class="col-xs-12 col-md-12 skuare video-sk">
						<div class="col-md-12 sk">
							<h3><?php echo __( 'Prensa' ); ?></h3>
							<video preload="">
								<source src="http://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
								<source src="http://www.w3schools.com/html/mov_bbb.ogg" type="video/ogg">
								Your browser does not support HTML5 video.
							</video>

							<video preload="">
								<source src="http://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
								<source src="http://www.w3schools.com/html/mov_bbb.ogg" type="video/ogg">
								Your browser does not support HTML5 video.
							</video>
						</div>
					</div>	
				</div>


			</div><!--termina row footer-->
		</div>
		<div class="col-lg-12 pie"><?php echo __( 'Copyright Cimab' ); ?> <?php echo date( 'Y') ; ?></div>
	</footer>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

	<!-- FlexSlider -->
	<script defer src="<?php echo bloginfo( 'template_url' ); ?>/js/jquery.flexslider.js"></script>

	<script type="text/javascript">
		$(document).ready(function(){
			$("#menu-m").click(function(){
				$(".nav").slideToggle("2000");
			});
		});
		$(function(){
			SyntaxHighlighter.all();
		});
		$(window).load(function(){
			$('.flexslider').flexslider({
				animation: "slide",
				controlNav: "thumbnails",
				start: function(slider){
					$('body').removeClass('loading');
				}
			});
		});
	</script>
	<!-- Optional FlexSlider Additions -->
	<script src="<?php echo bloginfo( 'template_url' ); ?>/js/jquery.easing.js"></script>
	<script src="<?php echo bloginfo( 'template_url' ); ?>/js/jquery.mousewheel.js"></script>
	<script defer src="<?php echo bloginfo( 'template_url' ); ?>/js/demo.js"></script>
	<?php wp_footer(); ?>
</body>
</html>