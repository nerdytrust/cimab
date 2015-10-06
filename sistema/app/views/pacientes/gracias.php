<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php $this->load->view('header'); ?>
	<div class="container">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6 padding-top-md">
				<div class="panel panel-purple">
					<div class="panel-heading">
						<h3 class="panel-title">Paciente guadado correctamente</h3>
					</div>
					<div class="panel-body">
						
							<a href="<?=base_url('pacientes')?>">Desea ingresar un nuevo paciente?</a>
						
					</div>
				</div>
			</div>
			<div class="col-md-3"></div>
		</div>
	</div>
<?php $this->load->view('footer'); ?>