<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model( 'core_model', 'core' );
    }

    public function index(){
    	if ( ! $this->input->is_ajax_request() )
			return $this->output
					->set_content_type( 'application/json' )
					->set_output( json_encode( array( 'success' => false, 'errors' => '<span class="error"><b>¡Ups!</b> Ocurrió un problema al intentar almacenar tu información.</span>' ) ) );
    }

    /**
     * Método al que se ingresa por defecto, y que guarda un nuevo registro de subscriptor de Newsletter
     * @return string JSON con datos success, errors, messages
     */
	public function newsletter(){
		if ( ! $this->input->is_ajax_request() )
			return $this->output
					->set_content_type( 'application/json' )
					->set_output( json_encode( array( 'success' => false, 'errors' => '<span class="error"><b>¡Ups!</b> Ocurrió un problema al intentar almacenar tu información.</span>' ) ) );

		$this->form_validation->set_rules( 'nombre', 'Nombre', 'trim|required|callback_nombre_valido|min_length[3]|max_length[180]' );
		$this->form_validation->set_rules( 'email', 'Email', 'required|trim|valid_email' );

		if ( $this->form_validation->run() === FALSE )
			return $this->output
					->set_content_type( 'application/json' )
					->set_output( json_encode( array( 'success' => false, 'errors' => validation_errors('<span class="error">','</span>') ) ) );

		$data['name']		= $this->input->post( 'nombre' );
		$data['email']		= $this->input->post( 'email' );
		$data['ip']			= $this->input->ip_address();
		$data['browser']	= $this->input->user_agent();
		$data 				= $this->security->xss_clean( $data );
		$subscribe			= $this->core->add_subscribe( $data );
		if ( $subscribe !== TRUE )
			return $this->output
					->set_content_type('application/json')
					->set_output( json_encode( array( 'success' => false, 'errors' => '<span class="error"><b>¡Ups!</b> Ocurrió un problema al intentar registrarte en nuestra lista de subscriptores.</span>' ) ) );

		return $this->output
				->set_content_type('application/json')
				->set_output( json_encode( array( 'success' => true, 'messages' => '<span class="success"><b>¡Gracias!</b> tu información se ha agregado a nuestra lista de subscriptores.</span>' ) ) );
	}

	/**
	 * Método para guardar los datos del formulario de contacto
	 * @return string JSON con datos success, errors, messages
	 */
	public function nuevo_contacto(){
		if ( ! $this->input->is_ajax_request() )
			return $this->output
					->set_content_type( 'application/json' )
					->set_output( json_encode( array( 'success' => false, 'errors' => '<span class="error"><b>¡Ups!</b> Ocurrió un problema al intentar almacenar tu información.</span>' ) ) );

		$this->form_validation->set_rules( 'name', 'Nombre', 'trim|required|callback_nombre_valido|min_length[3]|max_length[180]' );
		$this->form_validation->set_rules( 'lastname', 'Apellido', 'trim|required|callback_nombre_valido|min_length[3]|max_length[180]' );
		$this->form_validation->set_rules( 'phone', 'Teléfono', 'trim|required|callback_valid_phone|min_length[10]|max_length[10]' );
		$this->form_validation->set_rules( 'email', 'Email', 'required|trim|valid_email' );
		$this->form_validation->set_rules( 'state', 'Estado', 'required|callback_valid_option');
		$this->form_validation->set_rules( 'contact_type', 'Tipo de Contacto', 'required|callback_valid_option');
		$this->form_validation->set_rules( 'message', 'Mensaje', 'trim|required|min_length[15]|max_length[400]');
		

		if ( $this->form_validation->run() === FALSE )
			return $this->output
					->set_content_type( 'application/json' )
					->set_output( json_encode( array( 'success' => false, 'errors' => validation_errors('<span class="error">','</span>') ) ) );

		$data['name']			= $this->input->post( 'name' );
		$data['lastname']		= $this->input->post( 'lastname' );
		$data['phone']			= $this->input->post( 'phone' );
		$data['email']			= $this->input->post( 'email' );
		$data['state']			= $this->input->post( 'state' );
		$data['contact_type']	= $this->input->post( 'contact_type' );
		$data['message']		= $this->input->post( 'message' );
		$data['ip']				= $this->input->ip_address();
		$data['browser']		= $this->input->user_agent();
		$data 					= $this->security->xss_clean( $data );
		$contact				= $this->core->add_contact( $data );
		if ( $contact !== TRUE )
			return $this->output
					->set_content_type('application/json')
					->set_output( json_encode( array( 'success' => false, 'errors' => '<span class="error"><b>¡Ups!</b> Ocurrió un problema al intentar enviar tu solicitud.</span>' ) ) );

		$this->email->from( 'no-reply@cimab.org', '[No Responser] Auto-mensaje - Portal Web Fundación CIMAB' );
        $this->email->to( 'info@cimab.org' );
        $this->email->subject( 'Mensaje enviado desde el formulario de contacto' );
        $this->email->message( $this->load->view( 'mail/nuevo_contacto', $data, TRUE ) );
        if ( ! $this->email->send() )
        	return $this->output
					->set_content_type('application/json')
					->set_output( json_encode( array( 'success' => true, 'messages' => '<span class="success"><b>¡Ups!</b> Ocurrió un problema al intentar enviar por correo electrónico tu solicitud, pero ya fué guardada en nuestro sistema, en breve nos pondremos en contacto contigo.</span>' ) ) );

		return $this->output
				->set_content_type('application/json')
				->set_output( json_encode( array( 'success' => true, 'messages' => '<span class="success"><b>¡Gracias!</b> tu información se ha sido enviada, en breve nos pondremos en contacto contigo.</span>' ) ) );
	}

	/**
	 * Método para guardar una solicitud de pláticas de sensibilización
	 * @return string JSON con datos success, errors, messages
	 */
	public function nueva_platica(){
		if ( ! $this->input->is_ajax_request() )
			return $this->output
					->set_content_type( 'application/json' )
					->set_output( json_encode( array( 'success' => false, 'errors' => '<span class="error"><b>¡Ups!</b> Ocurrió un problema al intentar enviar tu solicitud.</span>' ) ) );

		$this->form_validation->set_rules( 'name', 'Nombre', 'trim|required|callback_nombre_valido|min_length[3]|max_length[180]' );
		$this->form_validation->set_rules( 'lastname', 'Apellido', 'trim|required|callback_nombre_valido|min_length[3]|max_length[180]' );
		$this->form_validation->set_rules( 'phone', 'Teléfono', 'trim|required|callback_valid_phone|min_length[10]|max_length[10]' );
		$this->form_validation->set_rules( 'email', 'Email', 'required|trim|valid_email' );
		$this->form_validation->set_rules( 'work', 'Empresa o Institución', 'trim|required|callback_nombre_valido|min_length[3]|max_length[200]' );
		$this->form_validation->set_rules( 'date_speak', 'Fecha de la plática', 'required|callback_valid_date_dash' );
		$this->form_validation->set_rules( 'time_speak', 'Hora de la plática', 'required|trim');
		$this->form_validation->set_rules( 'state', 'Estado donde se realizará la plática', 'required|callback_valid_option');
		$this->form_validation->set_rules( 'address', 'Dirección dónde se realizará la plática', 'trim|required|min_length[5]|max_length[350]');
		$this->form_validation->set_rules( 'assistants', 'Número de asistentes', 'trim|required|numeric');
		

		if ( $this->form_validation->run() === FALSE )
			return $this->output
					->set_content_type( 'application/json' )
					->set_output( json_encode( array( 'success' => false, 'errors' => validation_errors('<span class="error">','</span>') ) ) );

		$data['name']			= $this->input->post( 'name' );
		$data['lastname']		= $this->input->post( 'lastname' );
		$data['phone']			= $this->input->post( 'phone' );
		$data['email']			= $this->input->post( 'email' );
		$data['work']			= $this->input->post( 'work' );
		$data['date_speak']		= $this->input->post( 'date_speak' );
		$data['time_speak']		= $this->input->post( 'time_speak' );
		$data['state']			= $this->input->post( 'state' );
		$data['address']		= $this->input->post( 'address' );
		$data['assistants']		= $this->input->post( 'assistants' );
		$data['requeriments']	= json_encode( $this->input->post( 'requeriments' ) );
		$data['ip']				= $this->input->ip_address();
		$data['browser']		= $this->input->user_agent();
		$data 					= $this->security->xss_clean( $data );
		$speak					= $this->core->add_speak( $data );
		if ( $speak !== TRUE )
			return $this->output
					->set_content_type('application/json')
					->set_output( json_encode( array( 'success' => false, 'errors' => '<span class="error"><b>¡Ups!</b> Ocurrió un problema al intentar enviar tu solicitud.</span>' ) ) );

		$this->email->from( 'no-reply@cimab.org', '[No Responser] Auto-mensaje - Portal Web Fundación CIMAB' );
		$this->email->to( 'info@cimab.org' );
		$this->email->subject( 'Solicitud para pláticas de sensibilización' );
		$this->email->message( $this->load->view( 'mail/solicitud_platica', $data, TRUE ) );
		if ( ! $this->email->send() )
			return $this->output
				->set_content_type('application/json')
				->set_output( json_encode( array( 'success' => true, 'messages' => '<span class="success"><b>¡Ups!</b> Ocurrió un problema al intentar enviar por correo electrónico tu solicitud, pero ya fué guardada en nuestro sistema, en breve nos pondremos en contacto contigo.</span>' ) ) );

		return $this->output
				->set_content_type('application/json')
				->set_output( json_encode( array( 'success' => true, 'messages' => '<span class="success"><b>¡Gracias!</b> tu información se ha sido enviada, en breve nos pondremos en contacto contigo.</span>' ) ) );
	}

	/**
	 * Método para guardar una solicitud de voluntario
	 * @return string JSON con datos success, errors, messages
	 */
	public function nuevo_voluntario(){
		if ( ! $this->input->is_ajax_request() )
			return $this->output
					->set_content_type( 'application/json' )
					->set_output( json_encode( array( 'success' => false, 'errors' => '<span class="error"><b>¡Ups!</b> Ocurrió un problema al intentar almacenar tu información.</span>' ) ) );

		$this->form_validation->set_rules( 'fullname', 'Nombre Completo', 'trim|required|callback_nombre_valido|min_length[3]|max_length[200]' );
		$this->form_validation->set_rules( 'phone', 'Teléfono', 'trim|required|callback_valid_phone|min_length[10]|max_length[10]' );
		$this->form_validation->set_rules( 'email', 'Email', 'required|trim|valid_email' );
		$this->form_validation->set_rules( 'school', 'Institución educativa de procedencia', 'trim|required|min_length[3]|max_length[200]' );
		$this->form_validation->set_rules( 'degree', 'Licenciatura', 'trim|required|min_length[3]|max_length[200]' );
		$this->form_validation->set_rules( 'timevolunteer', 'Horario disponible', 'required|trim');
		$this->form_validation->set_rules( 'volunteer_type', 'Tipo de solicitud', 'trim|required');
		

		if ( $this->form_validation->run() === FALSE )
			return $this->output
					->set_content_type( 'application/json' )
					->set_output( json_encode( array( 'success' => false, 'errors' => validation_errors('<span class="error">','</span>') ) ) );

		$data['fullname']		= $this->input->post( 'fullname' );
		$data['phone']			= $this->input->post( 'phone' );
		$data['email']			= $this->input->post( 'email' );
		$data['school']			= $this->input->post( 'school' );
		$data['degree']			= $this->input->post( 'degree' );
		$data['timevolunteer']	= $this->input->post( 'timevolunteer' );
		$data['volunteer_type']	= $this->input->post( 'volunteer_type' );
		$data['ip']				= $this->input->ip_address();
		$data['browser']		= $this->input->user_agent();
		$data 					= $this->security->xss_clean( $data );
		$volunteer				= $this->core->add_volunteer( $data );
		if ( $volunteer !== TRUE )
			return $this->output
					->set_content_type('application/json')
					->set_output( json_encode( array( 'success' => false, 'errors' => '<span class="error"><b>¡Ups!</b> Ocurrió un problema al intentar enviar tu solicitud.</span>' ) ) );

		$this->email->from( 'no-reply@cimab.org', '[No Responser] Auto-mensaje - Portal Web Fundación CIMAB' );
        $this->email->to( 'info@cimab.org' );
        $this->email->subject( 'Solicitud para voluntariado' );
        $this->email->message( $this->load->view( 'mail/solicitud_voluntariado', $data, TRUE ) );
        if ( ! $this->email->send() )
        	return $this->output
					->set_content_type('application/json')
					->set_output( json_encode( array( 'success' => true, 'messages' => '<span class="success"><b>¡Ups!</b> Ocurrió un problema al intentar enviar por correo electrónico tu solicitud, pero ya fué guardada en nuestro sistema, en breve nos pondremos en contacto contigo.</span>' ) ) );

		return $this->output
				->set_content_type('application/json')
				->set_output( json_encode( array( 'success' => true, 'messages' => '<span class="success"><b>¡Gracias!</b> tu información se ha sido enviada, en breve nos pondremos en contacto contigo.</span>' ) ) );
	}

	/**
	 * Método para validar que un nombre sea válido
	 * @param  string $str Nombre
	 * @return boolean      VERDADERO, FALSO
	 */
	function nombre_valido( $str ){
		if ( ! preg_match( '/^[A-Za-zÁÉÍÓÚáéíóúÑñ\s]/', $str ) ){
			$this->form_validation->set_message( 'nombre_valido','<b class="requerido">*</b> La información introducida en <b>%s</b> no es válida.' );
			return FALSE;
		} else {
			return TRUE;
		}
	}

	/**
	 * Método para validar una fecha
	 * @param  string $str Fecha en formato dd/mm/aaaa
	 * @return boolean
	 */
    function valid_date( $str ){
    	$arr = explode('/', $str);
    	if ( count($arr) == 3 ){
    		$m = $arr[0];
    		$d = $arr[1];
    		$y = $arr[2];
    		if ( is_numeric( $m ) && is_numeric( $d ) && is_numeric( $y ) ){
    			return checkdate($m, $d, $y);
    		} else {
    			$this->form_validation->set_message('valid_date', '<b class="requerido">*</b> El campo <b>%s</b> debe tener una fecha válida con el formato MM/DD/YYYY.');
    			return FALSE;
    		}
    	} else {
    		$this->form_validation->set_message('valid_date', '<b class="requerido">*</b> El campo <b>%s</b> debe tener una fecha válida con el formato MM/DD/YYYY.');
    		return FALSE;
    	}
    }

    /**
     * Método para validar una fecha con guiones medios
     * @param  string $str Fecha en formato yyyy-mm-dd
     * @return boolean
     */
    function valid_date_dash( $str ){
    	$arr = explode('-', $str);
    	if ( count($arr) == 3 ){
    		$y = $arr[0];
    		$m = $arr[1];
    		$d = $arr[2];
    		if ( is_numeric( $m ) && is_numeric( $d ) && is_numeric( $y ) ){
    			return checkdate($m, $d, $y);
    		} else {
    			$this->form_validation->set_message('valid_date', '<b class="requerido">*</b> El campo <b>%s</b> debe tener una fecha válida con el formato MM/DD/YYYY.');
    			return FALSE;
    		}
    	} else {
    		$this->form_validation->set_message('valid_date', '<b class="requerido">*</b> El campo <b>%s</b> debe tener una fecha válida con el formato MM/DD/YYYY.');
    		return FALSE;
    	}
    }

    /**
     * Método para validar un número de teléfono
     * @param  string $str Número de teléfono Necesario a 10 dígitos
     * @return boolean
     */
    function valid_phone( $str ){
        if ( $str ) {
            if ( ! preg_match( '/\([0-9]\)| |[0-9]/', $str ) ){
                $this->form_validation->set_message( 'valid_phone', '<b class="requerido">*</b> El <b>%s</b> no tiene un formato válido.' );
                return FALSE;
            } else {
                return TRUE;
            }
        }
    }

    /**
     * Método para validar un selector
     * @param  string $str Valor del selector
     * @return boolean
     */
    function valid_option( $str ){
        if ($str == 0) {
            $this->form_validation->set_message('valid_option', '<b class="requerido">*</b> Es necesario que selecciones una <b>%s</b>.');
            return FALSE;
        } else {
            return TRUE;
        }
    }

}

/* End of file Index.php */
/* Location: ./app/controllers/Index.php */