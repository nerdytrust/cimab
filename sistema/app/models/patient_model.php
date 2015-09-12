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
                return FALSE;
	}

        public function get_patient( $idPatient ){
                $this->db->where('id',$idPatient);
                $result = $this->db->get( $this->db->dbprefix( 'system_patients' ) );
                if ( $result->num_rows() > 0 ) return $result->result_object();
                return FALSE;
        }

        public function edit_patient( $data ){
                $idPatient = $data['id_patients'];
                unset($data['id_patients']);
                $this->db->where('id', $idPatient);
                $result = $this->db->update('system_patients', $data); 
                if (!$result) return FALSE;
                return $idPatient;
        }

	public function add_diagnostic( $data ){
                $this->db->insert('system_diagnostic', $data); 
                if ($this->db->affected_rows() > 0) return $data['id_patients'];
                return FALSE;
	}

        public function get_diagnostic( $idPatient ){
                $this->db->where('id_patients',$idPatient);
                $result = $this->db->get( $this->db->dbprefix( 'system_diagnostic' ) );
                if ( $result->num_rows() > 0 ) return $result->result_object();
                return FALSE;
        }

        public function edit_diagnostic( $data ){
                $idPatient = $data['id_patients'];
                unset($data['id_patients']);
                $this->db->where('id_patients', $idPatient);
                $result = $this->db->update('system_diagnostic', $data); 
                if (!$result) return FALSE;
                return $idPatient;
        }

	public function add_atention( $data ){
                $this->db->insert('system_atention', $data); 
                if ($this->db->affected_rows() > 0) return $data['id_patients'];
                return FALSE;
	}

        public function get_atention( $idPatient ){
                $this->db->where('id_patients',$idPatient);
                $result = $this->db->get( $this->db->dbprefix( 'system_atention' ) );
                if ( $result->num_rows() > 0 ) return $result->result_object();
                return FALSE;
        }

        public function edit_atention( $data ){
                $idPatient = $data['id_patients'];
                unset($data['id_patients']);
                $this->db->where('id_patients', $idPatient);
                $result = $this->db->update('system_atention', $data); 
                if (!$result) return FALSE;
                return $idPatient;
        }

	public function add_recidivism( $data ){
                $this->db->insert('system_recidivism', $data); 
                if ($this->db->affected_rows() > 0) return $data['id_patients'];
                return FALSE;
	}

        public function get_recidivism( $idPatient ){
                $this->db->where('id_patients',$idPatient);
                $result = $this->db->get( $this->db->dbprefix( 'system_recidivism' ) );
                if ( $result->num_rows() > 0 ) return $result->result_object();
                return FALSE;
        }

        public function edit_recidivism( $data ){
                $idPatient = $data['id_patients'];
                unset($data['id_patients']);
                $this->db->where('id_patients', $idPatient);
                $result = $this->db->update('system_recidivism', $data); 
                if (!$result) return FALSE;
                return $idPatient;
        }
	
}

/* End of file patient_model.php */
/* Location: ./app/models/patient_model.php */