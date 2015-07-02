<?php if ( comments_open() ) : ?>
	<?php
		$args = array(
			'fields' => apply_filters(
				'comment_form_default_fields', array(
					'author' => '<div class="form-group col-md-4">' .
									'<label>' . __( 'Nombre' ) . '</label>' . 
									'<input size="30" ' . $aria_req . ' name="author" type="text" class="form-control" id="author" placeholder="' . __( 'Nombre' ) . '" value="' . esc_attr( $commenter['comment_author'] ) . '">' . 
								'</div>',
					'email'	=> '<div class="form-group col-md-4">' .
									'<label>' . __( 'Email' ) . '</label>' .
									'<input size="30" ' . $aria_req . ' type="email" class="form-control" id="email" placeholder="' . __( 'tu-correo-real@ejemplo.com' ) .'" value="' . esc_attr(  $commenter['comment_author_email'] ) . '">' .
								'</div>',
					'url'	=> '<div class="form-group col-md-4">' .
									'<label>' . __( 'Website' ) . '</label>' .
									'<input size="30" type="text" class="form-control" name="url" id="url" placeholder="' . __( 'http://tusitio.com' ) . '" value="' . esc_attr( $commenter['comment_author_url'] ) . '">' .
								'</div>',
				)
			),
			'comment_field' => '<div class="form-group col-md-12">' .
									'<label>' . __( 'Comentario' ) . '</label>' .
									'<textarea class="form-control" rows="7" placeholder=""></textarea>' .
								'</div>',
			'comment_notes_after' => '<div class="col-md-6">' .
										do_shortcode( '[bws_google_captcha]' ) .
									'</div>' .
									'<div class="col-md-6 comment-submit">' .
										'<button type="submit" class="btn btn-danger">'.
											__( 'Enviar Comentario' ) .
										'</button>' .
									'</div>',
			'comment_notes_before'	=> '',
			'title_reply' => '',
		);
	?>
	<div class="col-md-12 comentarios">
		<span class="galeria">
			<h3><?php echo __( 'Deja un comentario' ); ?></h3>
		</span>
		<?php comment_form( $args ); ?>
	</div>
<?php endif; ?>