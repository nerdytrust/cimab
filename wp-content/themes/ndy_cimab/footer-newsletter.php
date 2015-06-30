<div class="col-md-12 sk">
	<h3><?php echo __( 'Suscribete a nuestro boletín' ); ?></h3>
	<form action="<?php echo bloginfo( 'url' ); ?>/sistema/newsletter" id="form_newsletter_suscribe" data-url="<?php echo bloginfo( 'url' ); ?>" method="POST" autocomplete="off" role="form">
		<div class="col-xs-12 col-md-10 col-md-offset-1">
			<div class="form-group">
				<label for="nombre"></label>
				<input name="nombre" type="text" class="form-control" id="newsletter_nombre" placeholder="<?php echo __( 'nombre' ); ?>">
			</div>
		</div>
		<div class="col-md-10 col-md-offset-1">
			<div class="form-group">
				<label for="email"></label>
				<input name="email" type="text" class="form-control" id="newsletter_email" placeholder="<?php echo __( 'email' ); ?>">
			</div>
		</div>
		<div class="col-md-4 col-md-offset-7">
			<button type="submit" class="btn"><?php echo __( 'enviar' ); ?></button>
		</div>
	</form>
</div>