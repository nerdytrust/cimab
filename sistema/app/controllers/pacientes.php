<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pacientes extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		/*if ( ! $this->session->userdata( 'session' ) )
			redirect('sistema/login');
		*/

		$data['title'] = 'Formulario de Entrevista para Pacientes que reciben apoyo emocional';
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