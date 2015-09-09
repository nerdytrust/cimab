<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model( 'login_model', 'core' );
	}

	public function index(){
		if ( $this->session->userdata( 'session' ) )
			redirect(base_url('pacientes'));

		$data['title'] = 'Iniciar Sesión';
		$this->load->view('login/index', $data);
	}

	public function login_form(){

		if ( ! $this->input->is_ajax_request() )
			return $this->output
					->set_content_type( 'application/json' )
					->set_output( json_encode( [ 'success' => false, 'errors' => '<span class="error"><b>¡Ups!</b> Ocurrió un problema al intentar almacenar tu información.</span>' ] ) );

		$this->form_validation->set_rules( 'email', 'Email', 'trim|required|valid_email' );
		$this->form_validation->set_rules( 'password', 'Contraseña', 'trim|required|min_length[8]' );

		if ( $this->form_validation->run() === FALSE )
			return $this->output
					->set_content_type( 'application/json' )
					->set_output( json_encode( [ 'success' => false, 'errors' => validation_errors('<span class="error">','</span>') ] ) );

		$data['email']		= $this->input->post( 'email' );
		$data['password']	= $this->input->post( 'password' );
		$data 				= $this->security->xss_clean( $data );
		$credentials		= $this->core->get_login( $data );

		if ( $credentials === FALSE )
			return $this->output
					->set_content_type('application/json')
					->set_output( json_encode( [ 'success' => false, 'errors' => '<span class="error"><b>¡Ups!</b> El usuario y/o contraseña no son validos, por favor intente de nuevo.</span>' ] ) );

		$session = [
			'session'	 	=> TRUE,
			'uid' 		 	=> $credentials->uid_user,
			'nombre' 	 	=> $credentials->name,
			'apellidos'		=> $credentials->lastname,
			'email'			=> $credentials->email,
			'nivel' 	 	=> $credentials->role
		];

		$this->session->set_userdata( $session );

		return $this->output
				->set_content_type('application/json')
				->set_output( json_encode( [ 'success' => true, 'redirect' => 'pacientes' ] ) );
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}

}

/* End of file login.php */
/* Location: ./app/controllers/login.php */