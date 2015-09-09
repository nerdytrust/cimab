<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patient_model extends CI_Model {

	public function __construct(){
		parent::__construct();
                $this->load->database();
	}

	public function add_patient( $data ){
                $this->db->insert('system_patients', $data); 
                if ($this->db->affected_rows() > 0) return $this->db->insert_id();
                else return FALSE;
	}
	
}

/* End of file patient_model.php */
/* Location: ./app/models/patient_model.php */