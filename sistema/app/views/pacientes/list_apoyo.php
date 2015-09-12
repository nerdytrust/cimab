<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php $this->load->view('header'); ?>
	<div class="container">
		<div class="row">
			<div class="col-md-12 padding-top-md">
				<div class="panel panel-purple">
					<div class="panel-heading">
						<h3 class="panel-title">Lista de pacientes</h3>
					</div>
					<div class="panel-body">
						<div class="col-md-12 margin-bottom-10">
							<button class="btn btn-purple btn-flat btn-lg pull-right" onclick="window.location.href=base_url+'pacientes'">Agregar paciente</button>
						</div>
						<table id="list_patients_apoyo" class="display" cellspacing="0" width="100%"> 
							<thead> 
								<tr>
									<th>Id</th> 
									<th>Nombre</th>
									<th>Teléfono</th>
									<th>Celular</th>
								</tr> 
							</thead> 
							<tfoot> 
								<tr> 
									<th>Id</th> 
									<th>Nombre</th>
									<th>Teléfono</th>
									<th>Celular</th>
								</tr> 
							</tfoot> 
						</table>
						<div class="col-md-12 margin-top-10">
							<button class="btn btn-purple btn-flat btn-lg pull-right" onclick="window.location.href=base_url+'pacientes'">Agregar paciente</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php $this->load->view('footer'); ?>