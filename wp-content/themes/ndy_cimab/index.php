<!DOCTYPE html>
<html lang="ES">
<head>
	<meta charset="UTF-8">
	<title>boostrap3</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo bloginfo( 'template_url' ); ?>css/styles-demo2.css">

	<link rel="stylesheet" href="<?php echo bloginfo( 'template_url' ); ?>css/flexslider.css" type="text/css" media="screen" />
</head>
<body>
	<div class="container-fluid">
		<div class="row redes">
			<!--<div class="col-xs-12 col-sm-6 col-sm-offset-6 col-md-5 col-md-offset-7 col-lg-4 col-lg-offset-8">-->
			<div class="col-xs-12 col-sm-6 col-md-5 col-lg-4 pull-right">
				<a href=""><i class="fa fa-envelope fa-2x"></i></a>
				<a href=""><i class="fa fa-twitter fa-2x"></i></a>
				<a href=""><i class="fa fa-facebook fa-2x"></i></a>
				<a href=""><i class="fa fa-google-plus fa-2x"></i></a>
				<a href="" class="market"><span>2</span></a>
			</div>
		</div>
		<div class="row bloq1">
			<div class="col-xs-4 col-sm-6 col-md-4 col-lg-4">
				<a href="home.html"><img src="images/logo.png" class="img-responsive"></a>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
				<button class="btn-dona pull-right"><img src="images/dona.png" alt="" class="img-respondive"></button>
			</div>	
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Search for...">
					<span class="input-group-btn">
						<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
					</span>
				</div><!-- /input-group -->
			</div>
		</div><!--termina row bloq1-->
		<div class="row menu">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div id="menu-m"></div>
				<ul class="nav">
					<li role="" class=""><a href="nosotros.html">Sobre Nosotros</a></li>
					<li role="" class=""><a href="sobre-cancer.html">Sobre Cancer de Mama</a></li>
					<li role="" class=""><a href="#">Servicios</a></li>
					<li role="" class=""><a href="#">Programas</a></li>
					<li role="" class=""><a href="#">Noticias</a></li>
					<li role="" class=""><a href="#">Unete</a></li>
					<li role="" class=""><a href="#">Tienda en Linea</a></li>
				</ul>
			</div>
		</div>	<!--termina row menu-->
		<div class="row">
			<div class="col-md-12 slider">
				<div class="flexslider">
					<ul class="slides">
						<li data-thumb="images/slide-tumb.png">
							<img src="images/slide.png" />
						</li>
						<li data-thumb="images/slide-tumb.png">
							<img src="images/slide.png" />
						</li>
						<li data-thumb="images/slide-tumb.png">
							<img src="images/slide.png" />
						</li>
						<li data-thumb="images/slide-tumb.png">
							<img src="images/slide.png" />
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div><!--termina container fluid-->

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-7 apoyo">
				<h1>Apoyo emocional</h1>
				<div class="row">
					<div class="col-xs-12  col-sm-6 col-md-6">
						<figure>
							<img src="images/img1.png" alt="" class="img-responsive">
							<h3>Lorem ipsum</h3>
							<time>2008-02-14</time>
							<figcaption>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
								Lorem ipsum dolor sit amet, consectetur adipisicing elit.
								Lorem ipsum dolor sit amet, consectetur adipisicing elit.
							</figcaption>
						</figure>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6">
						<figure>
							<img src="images/img1.png" alt="" class="img-responsive">
							<h3>Lorem ipsum</h3>
							<time>2008-02-14</time>
							<figcaption>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit.
								Lorem ipsum dolor sit amet, consectetur adipisicing elit.
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
							</figcaption>
						</figure>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6">
						<figure>
							<img src="images/img1.png" alt="" class="img-responsive">
							<h3>Lorem ipsum</h3>
							<time>2008-02-14</time>
							<figcaption>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit.
								Lorem ipsum dolor sit amet, consectetur adipisicing elit.
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
							</figcaption>
						</figure>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6">
						<figure>
							<img src="images/img1.png" alt="" class="img-responsive">
							<h3>Lorem ipsum</h3>
							<time>2008-02-14</time>
							<figcaption>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit.
								Lorem ipsum dolor sit amet, consectetur adipisicing elit
								Lorem ipsum dolor sit amet, consectetur adipisicing elit 
							</figcaption>
						</figure>
					</div>	
				</div>	
				<span class="galeria">
					<h3>Galería</h3>
				</span>
				<div class="row gal">
					<div class="col-xs-6 col-sm-3 col-md-6 col-lg-3">
						<figure>
							<img src="images/img2.png" alt="" class="img-responsive">
							<figcaption>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
								Lorem ipsum dolor sit amet
							</figcaption>
						</figure>
					</div>
					<div class="col-xs-6 col-sm-3 col-md-6 col-lg-3">
						<figure>
							<img src="images/img2.png" alt="" class="img-responsive">
							<figcaption>

								Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
								Lorem ipsum dolor sit amet
							</figcaption>
						</figure>
					</div>
					<div class="col-xs-6 col-sm-3 col-md-6 col-lg-3">
						<figure>
							<img src="images/img2.png" alt="" class="img-responsive">
							<figcaption>

								Lorem ipsum dolor sit amet, consectetur adipisicing elit.
								Lorem ipsum dolor sit amet
							</figcaption>
						</figure>
					</div>
					<div class="col-xs-6 col-sm-3 col-md-6 col-lg-3">
						<figure>
							<img src="images/img2.png" alt="" class="img-responsive">
							<figcaption>

								Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
								Lorem ipsum dolor sit amet
							</figcaption>
						</figure>
					</div>
				</div>
			</div>

			<div class="col-xs-12 col-md-3 side">	
				<div class="row">
					<article class="col-xs-12 col-sm-6 col-md-12">
						<h2>Servicios y programas</h2>
						<ul class="syp">
							<li>
								<p>Convenios medicos</p>
								<span class="fecha">6</span>
							</li>
							<li>
								<p>Apoyo emocional</p>
								<span class="fecha">6</span>
							</li>
							<li>
								<p>Programas comunitarios</p>
								<span class="fecha">6</span>
							</li>
							<li>
								<p>Politicas Publicas</p>
								<span class="fecha">6</span>
							</li>
						</ul>
					</article>

					<article class="col-xs-12 col-sm-6 col-md-12">
						<h2>testimonio</h2>
						<video controls="" preload="">
							<source src="http://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
							<source src="http://www.w3schools.com/html/mov_bbb.ogg" type="video/ogg">
									Your browser does not support HTML5 video.
						</video>
					</article>
				</div>
				<div class="row">
					<article class="col-xs-12 col-sm-6 col-md-12">
						<h2>Catalogo</h2>
						<a href="#">
							<img src="images/catalogo-img.png" alt="" class="catalogo">
						</a>
					</article>
					<article class="col-xs-12 col-sm-6 col-md-12">
						<h2>Formamos parte de</h2>
						<ul class="forma">
							<li>
								<img src="images/form.png" alt="">
							</li>
							<li><img src="images/form.png" alt=""></li>
							<li><img src="images/form.png" alt=""></li>
							<li><img src="images/form.png" alt=""></li>
							<li><img src="images/form.png" alt=""></li>
							<li><img src="images/form.png" alt=""></li>
						</ul>
					</article>
				</div>	
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-12">
				<div class="g-apoyo">
					<h2>Gracias por el apoyo de</h2>
					<span>
						<img src="images/alpura.png" alt="">
						<img src="images/campbells.png" alt="">
						<img src="images/epura.png" alt="">
						<img src="images/colgate.png" alt="">
						<img src="images/kellogs.png" alt="">
						<img src="images/kisses.png" alt="">
						<img src="images/oster.png" alt="">
						<img src="images/bimbo.png" alt="">
						<img src="images/conagra.png" alt="">
					</span>
				</div>
			</div>
		</div>
	</div><!--termina container-->
	<footer>
		<div class="container-fluid">
			<div class="row footer2">
				<div class="col-xs-12 col-md-4 skuare">
					<div class="col-md-12 sk">
						<h3>Suscribete a nuestro boletín</h3>
						<div class="col-xs-12 col-md-10 col-md-offset-1">
							<div class="form-group">
								<label for="nombre"></label>
								<input type="text" class="form-control" id="usr" placeholder="nombre">
							</div>
						</div>
						<div class="col-md-10 col-md-offset-1">
							<div class="form-group">
								<label for="email"></label>
								<input type="text" class="form-control" id="usr" placeholder="email">
							</div>
						</div>
						<div class="col-md-4 col-md-offset-7">
							<button type="submit" class="btn">enviar</button>
						</div>
					</div>				
				</div>
				<div class="col-xs-12 col-md-4 skuare">
					<div class="col-md-12 sk">
						<h3>Contáctanos</h3>
						<h4>Centro de información df</h4>	
						<p>
							Ometusco No.44, Hipodromo,</br>
							Delegación Cuauhtémoc,</br>
							C.P.06100, México DF.</br>
							Horario de atención de L-V 9 a 18hrs.</br>
							Teléfonos | 55.74.90.85 y 55.74.90.73</br>
							info@cimab.org
						</p>

						<h4>Centro de información df</h4>	
						<p>
							Ometusco No.44, Hipodromo,</br>
							Delegación Cuauhtémoc,</br>
							C.P.06100, México DF.</br>
							Horario de atención de L-V 9 a 18hrs.</br>
							Teléfonos | 55.74.90.85 y 55.74.90.73</br>
							info@cimab.org
						</p>
					</div>	
				</div>
				<div class="col-xs-12 col-md-4 skuare">
					<div class="col-md-12 sk">
						<h3>Siguenos</h3>
						<div class="row sgns">
							<a href="#" class=""><img src="images/bt1.png" alt="" class=""></a>
							<a href="#" class=""><img src="images/bt2.png" alt="" class=""></a>
							<a href="#" class=""><img src="images/bt3.png" alt="" class=""></a>
							<a href="#" class=""><img src="images/bt4.png" alt="" class=""></a>
							<a href="#" class=""><img src="images/bt5.png" alt="" class=""></a>
							<a href="#" class=""><img src="images/bt6.png" alt="" class=""></a>
						</div>
					</div>

					<div class="col-xs-12 col-md-12 skuare video-sk">
						<div class="col-md-12 sk">
							<h3>Prensa</h3>
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
		<div class="col-lg-12 pie">Copyright Cimab 2014</div>
	</footer>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

	<!-- FlexSlider -->
	<script defer src="<?php echo bloginfo( 'template_url' ); ?>js/jquery.flexslider.js"></script>

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
	<script src="<?php echo bloginfo( 'template_url' ); ?>js/jquery.easing.js"></script>
	<script src="<?php echo bloginfo( 'template_url' ); ?>js/jquery.mousewheel.js"></script>
	<script defer src="<?php echo bloginfo( 'template_url' ); ?>js/demo.js"></script>
</body>
</html>