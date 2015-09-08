<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pacientes extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if ( ! $this->session->userdata( 'session' ) )
			redirect(base_url('login'));
		
	}

	public function index(){
		$this->load->model( 'address_model', 'address' );
		$data['title']   = 'Formulario de Entrevista para Pacientes que reciben apoyo emocional';
		$data['estados'] = $this->address->get_federal_entities(); 
		$this->load->view('pacientes/generales', $data );
	}

	public function diagnostico(){
		$data['title'] = 'Formulario de Entrevista para Pacientes que reciben apoyo emocional';
		$this->load->view('pacientes/diagnostico', $data );	
	}

	public function atencion(){
		$data['title'] = 'Formulario de Entrevista para Pacientes que reciben apoyo emocional';
		$this->load->view('pacientes/atencion', $data );	
	}

	public function reincidencia(){
		$data['title'] = 'Formulario de Entrevista para Pacientes que reciben apoyo emocional';
		$this->load->view('pacientes/reincidencia', $data );	
	}

}

/* End of file pacientes.php */
/* Location: ./app/controllers/pacientes.php */