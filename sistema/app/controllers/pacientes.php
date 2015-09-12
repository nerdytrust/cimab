<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pacientes extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if ( ! $this->session->userdata( 'session' ) )
			redirect(base_url('login'));
			$this->load->model( 'patient_model', 'core' );
	}

	public function index( $idPatient = null ){
		$this->load->model( 'address_model', 'address' );
		$data['title']   = 'Formulario de Entrevista para Pacientes que reciben apoyo emocional';
		$data['estados'] = $this->address->get_federal_entities(); 

		if($idPatient){

			if ( ! $this->session->userdata( 'nivel' ) == 1 )
				redirect(base_url('pacientes/list_patients'));

			$patient = $this->core->get_patient($idPatient);
			$data['patient'] = $patient[0];
			if($data['patient']->birthday == '0000-00-00')
				unset($data['patient']->birthday);
			else{
				$birthday = explode('-', $data['patient']->birthday);
				$data['patient']->birthday = $birthday[2].'/'.$birthday[1].'/'.$birthday[0];
			}
			$data['municipios'] = $this->address->get_town($data['patient']->federal_entity); 
		}

		$this->load->view('pacientes/generales', $data );
	}

	public function add_patient(){
		if ( ! $this->input->is_ajax_request() )
			return $this->output
					->set_content_type( 'application/json' )
					->set_output( json_encode( [ 'success' => false, 'errors' => '<span class="error"><b>¡Ups!</b> Ocurrió un problema al intentar almacenar tu información.</span>' ] ) );

		$this->form_validation->set_rules( 'name', 'Nombre', 'trim|required' );
		$this->form_validation->set_rules( 'federal_entity', 'Entidad Federativa', 'required' );
		$this->form_validation->set_rules( 'town', 'Municipio', 'required' );
		$this->form_validation->set_rules( 'birthday', 'Fecha de nacimiento', 'callback__dateRegex');
		$this->form_validation->set_message('_dateRegex', 'El campo <strong>%s</strong> debe ser de formato dd/mm/aaaa'); 
		
		if ( $this->form_validation->run() === FALSE )
			return $this->output
					->set_content_type( 'application/json' )
					->set_output( json_encode( [ 'success' => false, 'errors' => validation_errors('<span class="error">','</span>') ] ) ); 

		$data = $this->input->post();
		if($this->input->post('birthday') != ""){
			$birthday = explode("/", $this->input->post('birthday'));
			$birthday = $birthday[2].'-'.$birthday[1].'-'.$birthday[0];
			$data['birthday'] = $birthday;
		}

		if($this->input->post('edit') == 'true'){
			unset($data['edit']);
			$save_patient = $this->core->edit_patient( $data );
		}
		else
			$save_patient = $this->core->add_patient( $data );

		if ( $save_patient === FALSE )
			return $this->output
					->set_content_type('application/json')
					->set_output( json_encode( [ 'success' => false, 'errors' => '<span class="error"><b>¡Ups!</b> Ocurrió un problema al intentar registrarte en nuestra lista de subscriptores.</span>' ] ) );
			
		return $this->output
				->set_content_type('application/json')
				->set_output( json_encode( [ 'success' => true, 'redirect' => base_url('pacientes/diagnostico/'.$save_patient) ] ) );
	}

	public function diagnostico( $idPatient = null ){
		$data['title'] = 'Formulario de Entrevista para Pacientes que reciben apoyo emocional';
		$data['idPatient'] = $idPatient;
		$diagnostic = $this->core->get_diagnostic($idPatient);

		if($diagnostic){

			if ( ! $this->session->userdata( 'nivel' ) == 1 )
				redirect(base_url('pacientes/list_patients'));

			$data['diagnostic'] = $diagnostic[0];

			if($data['diagnostic']->fecha_cancer == '0000-00-00')
				unset($data['diagnostic']->fecha_cancer);
			else{
				$fechaCancer = explode('-', $data['diagnostic']->fecha_cancer);
				$data['diagnostic']->fecha_cancer = $fechaCancer[2].'/'.$fechaCancer[1].'/'.$fechaCancer[0];
			}

			if($data['diagnostic']->fecha_tratamiento == '0000-00-00')
				unset($data['diagnostic']->fecha_tratamiento);
			else{
				$fechaTratamiento = explode('-', $data['diagnostic']->fecha_tratamiento);
				$data['diagnostic']->fecha_tratamiento = $fechaTratamiento[2].'/'.$fechaTratamiento[1].'/'.$fechaTratamiento[0];
			}

			if($data['diagnostic']->remision_fecha_tratamiento == '0000-00-00')
				unset($data['diagnostic']->remision_fecha_tratamiento);
			else{
				$remisionFechaTratamiento = explode('-', $data['diagnostic']->remision_fecha_tratamiento);
				$data['diagnostic']->remision_fecha_tratamiento = $remisionFechaTratamiento[2].'/'.$remisionFechaTratamiento[1].'/'.$remisionFechaTratamiento[0];
			}

		}

		$this->load->view('pacientes/diagnostico', $data );	
	}

	public function add_diagnostic(){
		if ( ! $this->input->is_ajax_request() )
			return $this->output
					->set_content_type( 'application/json' )
					->set_output( json_encode( [ 'success' => false, 'errors' => '<span class="error"><b>¡Ups!</b> Ocurrió un problema al intentar almacenar tu información.</span>' ] ) );

		$this->form_validation->set_rules( 'fecha_cancer', 'Fecha aproximadamente le dijeron que tenía cáncer', 'callback__dateRegex');
		$this->form_validation->set_rules( 'fecha_tratamiento', 'Fecha aproximadamente inicio el tratamiento', 'callback__dateRegex');
		$this->form_validation->set_rules( 'remision_fecha_tratamiento', 'Fecha aproximadamente terminó el tratamiento clínico', 'callback__dateRegex');
		$this->form_validation->set_message('_dateRegex', 'El campo <strong>%s</strong> debe ser de formato dd/mm/aaaa'); 

		if ( $this->form_validation->run() === FALSE )
			return $this->output
					->set_content_type( 'application/json' )
					->set_output( json_encode( [ 'success' => false, 'errors' => validation_errors('<span class="error">','</span>') ] ) );

		$data = $this->input->post();
		if($this->input->post('fecha_cancer') != ""){
			$fechaCancer = explode("/", $this->input->post('fecha_cancer')); 
			$fechaCancer = $fechaCancer[2].'-'.$fechaCancer[1].'-'.$fechaCancer[0];
			$data['fecha_cancer'] = $fechaCancer;
		}
		if($this->input->post('fecha_tratamiento') != ""){
			$fechaTratamiento = explode("/", $this->input->post('fecha_tratamiento')); 
			$fechaTratamiento = $fechaTratamiento[2].'-'.$fechaTratamiento[1].'-'.$fechaTratamiento[0];
			$data['fecha_tratamiento'] = $fechaTratamiento;
		}
		if($this->input->post('remision_fecha_tratamiento') != ""){
			$remisionFechaTratamiento = explode("/", $this->input->post('remision_fecha_tratamiento')); 
			$remisionFechaTratamiento = $remisionFechaTratamiento[2].'-'.$remisionFechaTratamiento[1].'-'.$remisionFechaTratamiento[0];
			$data['remision_fecha_tratamiento'] = $remisionFechaTratamiento;
		}
		
		//$data = $this->security->xss_clean( $data );
		if($this->input->post('edit') == 'true'){
			unset($data['edit']);
			if(!isset($data['imss'])) $data['imss'] = 0;
			if(!isset($data['issste'])) $data['issste'] = 0;
			if(!isset($data['popular'])) $data['popular'] = 0;
			if(!isset($data['privado'])) $data['privado'] = 0;
			if(!isset($data['seguro_otro'])) $data['seguro_otro'] = 0;
			if(!isset($data['rutina'])) $data['rutina'] = 0;
			if(!isset($data['campania'])) $data['campania'] = 0;
			if(!isset($data['yo'])) $data['yo'] = 0;
			if(!isset($data['forma_otro'])) $data['forma_otro'] = 0;
			if(!isset($data['cirugia_nose'])) $data['cirugia_nose'] = 0;
			if(!isset($data['cirugia_tumorectomia'])) $data['cirugia_tumorectomia'] = 0;
			if(!isset($data['cirugia_cuadrantectomia'])) $data['cirugia_cuadrantectomia'] = 0;
			if(!isset($data['cirugia_masectomia'])) $data['cirugia_masectomia'] = 0;
			$save_diagnostic = $this->core->edit_diagnostic( $data );
		}
		else
			$save_diagnostic = $this->core->add_diagnostic( $data );

		if ( $save_diagnostic === FALSE )
			return $this->output
					->set_content_type('application/json')
					->set_output( json_encode( [ 'success' => false, 'errors' => '<span class="error"><b>¡Ups!</b> Ocurrió un problema al intentar registrarte en nuestra lista de subscriptores.</span>' ] ) );
			
		return $this->output
				->set_content_type('application/json')
				->set_output( json_encode( [ 'success' => true, 'redirect' => base_url('pacientes/atencion/'.$save_diagnostic) ] ) );
	}

	public function atencion( $idPatient = null ){
		$data['title'] = 'Formulario de Entrevista para Pacientes que reciben apoyo emocional';
		$data['idPatient'] = $idPatient;
		$atention = $this->core->get_atention($idPatient);

		if($atention){

			if ( ! $this->session->userdata( 'nivel' ) == 1 )
				redirect(base_url('pacientes/list_patients'));

			$data['atention'] = $atention[0];
		}

		$this->load->view('pacientes/atencion', $data );	
	}

	public function add_atention(){
		if ( ! $this->input->is_ajax_request() )
			return $this->output
					->set_content_type( 'application/json' )
					->set_output( json_encode( [ 'success' => false, 'errors' => '<span class="error"><b>¡Ups!</b> Ocurrió un problema al intentar almacenar tu información.</span>' ] ) );

		/*if ( $this->form_validation->run() === FALSE )
			return $this->output
					->set_content_type( 'application/json' )
					->set_output( json_encode( [ 'success' => false, 'errors' => validation_errors('<span class="error">','</span>') ] ) );*/

		$data = $this->input->post();
		//$data = $this->security->xss_clean( $data );

		if($this->input->post('edit') == 'true'){
			unset($data['edit']);
			$save_atention = $this->core->edit_atention( $data );
		}
		else
			$save_atention = $this->core->add_atention( $data );

		if ( $save_atention === FALSE )
			return $this->output
					->set_content_type('application/json')
					->set_output( json_encode( [ 'success' => false, 'errors' => '<span class="error"><b>¡Ups!</b> Ocurrió un problema al intentar registrarte en nuestra lista de subscriptores.</span>' ] ) );
			
		return $this->output
				->set_content_type('application/json')
				->set_output( json_encode( [ 'success' => true, 'redirect' => base_url('pacientes/reincidencia/'.$save_atention) ] ) );
	}

	public function reincidencia( $idPatient = null ){
		$data['title'] = 'Formulario de Entrevisa para Pacientes que reciben apoyo emocional';
		$data['idPatient'] = $idPatient;
		$recidivism = $this->core->get_recidivism($idPatient);

		if($recidivism){

			if ( ! $this->session->userdata( 'nivel' ) == 1 )
				redirect(base_url('pacientes/list_patients'));
			
			$data['recidivism'] = $recidivism[0];

			if($data['recidivism']->fecha_diagnostico == '0000-00-00')
				unset($data['recidivism']->fecha_diagnostico);
			else{
				$fechaDiagnostico = explode('-', $data['recidivism']->fecha_diagnostico);
				$data['recidivism']->fecha_diagnostico = $fechaDiagnostico[2].'/'.$fechaDiagnostico[1].'/'.$fechaDiagnostico[0];
			}
		}

		$this->load->view('pacientes/reincidencia', $data );	
	}

	public function add_recidivism(){
		if ( ! $this->input->is_ajax_request() )
			return $this->output
					->set_content_type( 'application/json' )
					->set_output( json_encode( [ 'success' => false, 'errors' => '<span class="error"><b>¡Ups!</b> Ocurrió un problema al intentar almacenar tu información.</span>' ] ) );

		$this->form_validation->set_rules( 'fecha_diagnostico', 'fecha aproximadamente fue diagnosticada', 'callback__dateRegex');
		$this->form_validation->set_message('_dateRegex', 'El campo <strong>%s</strong> debe ser de formato dd/mm/aaaa'); 

		if ( $this->form_validation->run() === FALSE )
			return $this->output
					->set_content_type( 'application/json' )
					->set_output( json_encode( [ 'success' => false, 'errors' => validation_errors('<span class="error">','</span>') ] ) );

		$data = $this->input->post();

		if($this->input->post('fecha_diagnostico') != ""){
			$fechaDiagnostico = explode("/", $this->input->post('fecha_diagnostico')); 
			$fechaDiagnostico = $fechaDiagnostico[2].'-'.$fechaDiagnostico[1].'-'.$fechaDiagnostico[0];
			$data['fecha_diagnostico'] = $fechaDiagnostico;
		}

		//$data = $this->security->xss_clean( $data );
		if($this->input->post('edit') == 'true'){
			unset($data['edit']);
			if(!isset($data['hueso'])) $data['hueso'] = 0;
			if(!isset($data['pulmon'])) $data['pulmon'] = 0;
			if(!isset($data['higado'])) $data['higado'] = 0;
			if(!isset($data['cerebro'])) $data['cerebro'] = 0;
			if(!isset($data['otro_reincidencia'])) $data['otro_reincidencia'] = 0;
			if(!isset($data['quimioterapia'])) $data['quimioterapia'] = 0;
			if(!isset($data['radioterapia'])) $data['radioterapia'] = 0;
			if(!isset($data['cirugia'])) $data['cirugia'] = 0;
			if(!isset($data['paliativo'])) $data['paliativo'] = 0;
			if(!isset($data['otro_tratamiento'])) $data['otro_tratamiento'] = 0;
			$save_recidivism = $this->core->edit_recidivism( $data );
		}
		else
			$save_recidivism = $this->core->add_recidivism( $data );
		
		if ( $save_recidivism === FALSE )
			return $this->output
					->set_content_type('application/json')
					->set_output( json_encode( [ 'success' => false, 'errors' => '<span class="error"><b>¡Ups!</b> Ocurrió un problema al intentar registrarte en nuestra lista de subscriptores.</span>' ] ) );
			
		return $this->output
				->set_content_type('application/json')
				->set_output( json_encode( [ 'success' => true, 'redirect' => base_url('pacientes/list_patients') ] ) );
	}

	public function list_patients(){
		$data['title'] = 'Formulario de Entrevisa para Pacientes que reciben apoyo emocional';
		if ( $this->session->userdata( 'nivel' ) == 1 )
			$this->load->view('pacientes/list', $data );
		else
			$this->load->view('pacientes/list_apoyo', $data );
	}

	public function list_ajax(){
		if ( ! $this->input->is_ajax_request() )
			return $this->output
					->set_content_type( 'application/json' )
					->set_output( json_encode( [ 'success' => false, 'errors' => '<span class="error"><b>¡Ups!</b> Ocurrió un problema al intentar almacenar tu información.</span>' ] ) );
					
		$page 		 = $_GET['page'];
		$draw 		 = $_GET['draw'];
		$limit 		 = $_GET['length']; 
		$sidx        = $_GET['start']; 
		$searchValue = $_GET['search']['value'];
		if(!$sidx) $sidx =1;

		if($searchValue!=""){
			$this->db->like('name',$searchValue);
		}
		$count = $this->db->count_all_results($this->db->dbprefix( 'system_patients' ));

		if( $count >0 ) {
		    $total_pages = ceil($count/$limit);
		} else {
		    $total_pages = 0;
		}
		if ($page > $total_pages) $page=$total_pages;
		$start = $limit*$page - $limit; 

		if($searchValue!=""){
			$this->db->like('name',$searchValue);
		}
		$this->db->order_by("id", "desc");
		$this->db->limit($limit,$start);
		$query = $this->db->get($this->db->dbprefix( 'system_patients' ));
		$aPatient = array();

		foreach ($query->result_array() as $key => $patient) {
			
			$aPatientInt = array();
			array_push($aPatientInt, $patient['id']);
			array_push($aPatientInt, $patient['name']);
			array_push($aPatientInt, $patient['telephone']);
			array_push($aPatientInt, $patient['cellphone']);
			$aPatient[$key] = $aPatientInt;
		}
		
		$data['draw'] = $draw;
		$data['recordsTotal'] = $count;
		$data['recordsFiltered'] = $count;
		$data['data'] = $aPatient;

		echo json_encode($data);

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

	public function _dateRegex($date) {
		if($date == '')
			return TRUE;
  		if (preg_match('/^(?:(?:31(\/|-|\.)(?:0?[13578]|1[02]))\1|(?:(?:29|30)(\/|-|\.)(?:0?[1,3-9]|1[0-2])\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\/|-|\.)0?2\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:(?:1[6-9]|[2-9]\d)?\d{2})$/', $date ) ) 
  			return TRUE;	
  		else
    		return FALSE;
	}

}

/* End of file pacientes.php */
/* Location: ./app/controllers/pacientes.php */