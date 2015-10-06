<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patient_model extends CI_Model {

	public function __construct(){
		parent::__construct();
                $this->load->database();
	}

	public function add_patient( $data ){
               foreach($data as $field => $value) {
                        $this->db->set($field, "AES_ENCRYPT(".$this->db->escape($value).", '".$this->config->item('encryption_key')."')", FALSE);  
                } 
                $this->db->insert('system_patients'); 
                if ($this->db->affected_rows() > 0) return $this->db->insert_id();
                return FALSE;
	}

        public function get_patient( $idPatient ){
                $fields = $this->db->list_fields( $this->db->dbprefix( 'system_patients' ));
                foreach ($fields as $key => $field) {
                    if($field !='id')
                        $this->db->select( "AES_DECRYPT( $field,'{$this->config->item('encryption_key')}') AS $field", FALSE );
                }
                $this->db->select('id');
                $this->db->where('id',$idPatient);
                $result = $this->db->get( $this->db->dbprefix( 'system_patients' ) );
                if ( $result->num_rows() > 0 ) return $result->result_object();
                return FALSE;
        }

        public function list_patient($limit,$start,$searchValue){
                $fields = $this->db->list_fields( $this->db->dbprefix( 'system_patients' ));
                if($searchValue!=""){
                        $this->db->like("AES_DECRYPT(name, '{$this->config->item('encryption_key')}')", "$searchValue", FALSE);
                }
                $this->db->order_by("id", "desc");
                $this->db->limit($limit,$start);
                foreach ($fields as $key => $field) {
                    if($field !='id')
                        $this->db->select( "AES_DECRYPT( $field,'{$this->config->item('encryption_key')}') AS $field", FALSE );
                }
                $this->db->select('id');
                $result = $this->db->get( $this->db->dbprefix( 'system_patients' ) );
                if ( $result->num_rows() > 0 ) return $result;
                return FALSE;
        }

        public function edit_patient( $data ){
                $idPatient = $data['id_patients'];
                unset($data['id_patients']);
                foreach($data as $field => $value) {
                        $this->db->set($field, "AES_ENCRYPT(".$this->db->escape($value).", '".$this->config->item('encryption_key')."')", FALSE);  
                } 
                $this->db->where('id', $idPatient);
                $result = $this->db->update('system_patients'); 
                if (!$result) return FALSE;
                return $idPatient;
        }

	public function add_diagnostic( $data ){
                foreach($data as $field => $value) {
                    if($field != 'id_patients')
                        $this->db->set($field, "AES_ENCRYPT(".$this->db->escape($value).", '".$this->config->item('encryption_key')."')", FALSE);  
                } 
                $this->db->set('id_patients',$data['id_patients']);
                $this->db->insert('system_diagnostic'); 
                if ($this->db->affected_rows() > 0) return $data['id_patients'];
                return FALSE;
	}

        public function get_diagnostic( $idPatient ){
                $fields = $this->db->list_fields( $this->db->dbprefix( 'system_diagnostic' ));
                foreach ($fields as $key => $field) {
                    if($field !='id_patients')
                        $this->db->select( "AES_DECRYPT( $field,'{$this->config->item('encryption_key')}') AS $field", FALSE );
                }
                $this->db->select('id_patients');
                $this->db->where('id_patients',$idPatient);
                $result = $this->db->get( $this->db->dbprefix( 'system_diagnostic' ) );
                if ( $result->num_rows() > 0 ) return $result->result_object();
                return FALSE;
        }

        public function edit_diagnostic( $data ){
                $idPatient = $data['id_patients'];
                unset($data['id_patients']);
                foreach($data as $field => $value) {
                        $this->db->set($field, "AES_ENCRYPT(".$this->db->escape($value).", '".$this->config->item('encryption_key')."')", FALSE);  
                } 
                $this->db->where('id_patients', $idPatient);
                $result = $this->db->update('system_diagnostic'); 
                if (!$result) return FALSE;
                return $idPatient;
        }

	public function add_atention( $data ){
               foreach($data as $field => $value) {
                    if($field != 'id_patients')
                        $this->db->set($field, "AES_ENCRYPT(".$this->db->escape($value).", '".$this->config->item('encryption_key')."')", FALSE);  
                } 
                $this->db->set('id_patients',$data['id_patients']);
                $this->db->insert('system_atention'); 
                if ($this->db->affected_rows() > 0) return $data['id_patients'];
                return FALSE;
	}

        public function get_atention( $idPatient ){
                $fields = $this->db->list_fields( $this->db->dbprefix( 'system_atention' ));
                foreach ($fields as $key => $field) {
                    if($field !='id_patients')
                        $this->db->select( "AES_DECRYPT( $field,'{$this->config->item('encryption_key')}') AS $field", FALSE );
                }
                $this->db->select('id_patients');
                $this->db->where('id_patients',$idPatient);
                $result = $this->db->get( $this->db->dbprefix( 'system_atention' ) );
                if ( $result->num_rows() > 0 ) return $result->result_object();
                return FALSE;
        }

        public function edit_atention( $data ){
                $idPatient = $data['id_patients'];
                unset($data['id_patients']);
                foreach($data as $field => $value) {
                        $this->db->set($field, "AES_ENCRYPT(".$this->db->escape($value).", '".$this->config->item('encryption_key')."')", FALSE);  
                } 
                $this->db->where('id_patients', $idPatient);
                $result = $this->db->update('system_atention'); 
                if (!$result) return FALSE;
                return $idPatient;
        }

	public function add_recidivism( $data ){
                foreach($data as $field => $value) {
                    if($field != 'id_patients')
                        $this->db->set($field, "AES_ENCRYPT(".$this->db->escape($value).", '".$this->config->item('encryption_key')."')", FALSE);  
                } 
                $this->db->set('id_patients',$data['id_patients']);
                $this->db->insert('system_recidivism'); 
                if ($this->db->affected_rows() > 0) return $data['id_patients'];
                return FALSE;
	}

        public function get_recidivism( $idPatient ){
                $fields = $this->db->list_fields( $this->db->dbprefix( 'system_recidivism' ));
                foreach ($fields as $key => $field) {
                    if($field !='id_patients')
                        $this->db->select( "AES_DECRYPT( $field,'{$this->config->item('encryption_key')}') AS $field", FALSE );
                }
                $this->db->select('id_patients');
                $this->db->where('id_patients',$idPatient);
                $result = $this->db->get( $this->db->dbprefix( 'system_recidivism' ) );
                if ( $result->num_rows() > 0 ) return $result->result_object();
                return FALSE;
        }

        public function edit_recidivism( $data ){
                $idPatient = $data['id_patients'];
                unset($data['id_patients']);
                foreach($data as $field => $value) {
                        $this->db->set($field, "AES_ENCRYPT(".$this->db->escape($value).", '".$this->config->item('encryption_key')."')", FALSE);  
                } 
                $this->db->where('id_patients', $idPatient);
                $this->db->where('id_patients', $idPatient);
                $result = $this->db->update('system_recidivism'); 
                if (!$result) return FALSE;
                return $idPatient;
        }
	
}

/* End of file patient_model.php */
/* Location: ./app/models/patient_model.php */