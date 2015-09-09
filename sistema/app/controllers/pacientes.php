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

	public function add_patient(){
		if ( ! $this->input->is_ajax_request() )
			return $this->output
					->set_content_type( 'application/json' )
					->set_output( json_encode( [ 'success' => false, 'errors' => '<span class="error"><b>¡Ups!</b> Ocurrió un problema al intentar almacenar tu información.</span>' ] ) );

		$this->form_validation->set_rules( 'name', 'name', 'trim|required' );
		//$this->form_validation->set_rules( 'password', 'Contraseña', 'trim|required|min_length[8]' );

		if ( $this->form_validation->run() === FALSE )
			return $this->output
					->set_content_type( 'application/json' )
					->set_output( json_encode( [ 'success' => false, 'errors' => validation_errors('<span class="error">','</span>') ] ) );

	}

	public function town( $idFederalEntity ){
		if ( ! $this->input->is_ajax_request() )
			return $this->output
					->set_content_type( 'application/json' )
					->set_output( json_encode( [ 'success' => false, 'errors' => '<span class="error"><b>¡Ups!</b> Ocurrió un problema al intentar almacenar tu información.</span>' ] ) );
			$this->load->model( 'address_model', 'address' );
			$municipios = $this->address->get_town( $idFederalEntity ); 
			echo json_encode($municipios);
	}

}

/* End of file pacientes.php */
/* Location: ./app/controllers/pacientes.php */