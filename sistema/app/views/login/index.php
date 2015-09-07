<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php $this->load->view('header'); ?>
	<div class="container">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6 padding-top-md">
				<div class="panel panel-purple">
					<div class="panel-heading">
						<h3 class="panel-title">Login</h3>
					</div>
					<div class="panel-body">
						<?php echo form_open( 'login-process', [ 'id' => 'form_login', 'name' => 'form_login', 'method' => 'POST', 'role' => 'form', 'autocomplete' => 'off' ] ); ?>
							<div class="form-group">
								<input type="email" name="email" class="form-control" placeholder="E-mail">
							</div>
							<div class="form-group">
								<input type="password" name="password" class="form-control" placeholder="Contraseña">
							</div>
							<button class="btn btn-purple btn-flat btn-lg pull-right" type="submit">Ingresar</button>
						<?php echo form_close(); ?>
					</div>
				</div>
			</div>
			<div class="col-md-3"></div>
		</div>
	</div>
<?php $this->load->view('footer'); ?>