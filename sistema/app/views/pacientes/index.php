<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php $this->load->view('header'); ?>
	<div class="container">
		<div class="row">
			<div class="col-md-12 padding-top-md">
				<div class="panel panel-purple">
					<div class="panel-heading">
						<h3 class="panel-title">Crear un nuevo paciente</h3>
					</div>
					<div class="panel-body">
						<?php echo form_open( 'add-patient', [ 'class' => 'form-horizontal', 'id' => 'form_add_patient', 'name' => 'form_add_patient', 'method' => 'POST', 'role' => 'form', 'autocomplete' => 'off' ] ); ?>
							<div class="col-md-12">
								<div class="form-group">
									<div class="col-sm-9 col-md-12">
										<input type="text" name="name" class="form-control" placeholder="Nombre(s)">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<div class="col-md-12">
										<input type="text" name="lastname" class="form-control" placeholder="Apellido Paterno">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<div class="col-md-12">
										<input type="text" name="secondlastname" class="form-control" placeholder="Apellido Materno">
									</div>
								</div>
							</div>
							<button class="btn btn-purple btn-flat btn-lg pull-right" type="submit">Guardar</button>
						<?php echo form_close(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php $this->load->view('footer'); ?>