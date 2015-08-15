<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pacientes extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		if ( ! $this->session->userdata( 'session' ) )
			redirect('sistema/login');

		$data['title'] = 'Agregar Pacientes';
		$this->load->view('pacientes/index', $data );
	}

}

/* End of file pacientes.php */
/* Location: ./app/controllers/pacientes.php */