<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Address_model extends CI_Model {

	public function __construct(){
		parent::__construct();
	}

	public function get_federal_entities(){
        	$this->db->select( 'id, nombre');
                $result = $this->db->get( $this->db->dbprefix( 'system_estados' ) );
                if ( $result->num_rows() > 0 ) return $result->result_object();
                        else return FALSE;
	}
	
}

/* End of file login_model.php */
/* Location: ./app/models/login_model.php */