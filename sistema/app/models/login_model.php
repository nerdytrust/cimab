<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	public function __construct(){
		parent::__construct();
        $this->load->database();
        $this->key_encrypt  = 'i2qogr7IHw4M0UdIYGjKbHxaGLN0Aec9uSrk';
	}

	public function get_login( $credentials ){
        	$this->db->select( 'uid_user, name, lastname, role');
                $this->db->select( "AES_DECRYPT( email,'{$this->key_encrypt}') AS email", FALSE );
                $this->db->where( 'email', "AES_ENCRYPT('{$this->db->escape_str( $credentials['email'] )}','{$this->key_encrypt}')", FALSE );
                $this->db->where( 'password', "AES_ENCRYPT('{$this->db->escape_str( $credentials['password'] )}','{$this->key_encrypt}')", FALSE );
                $result = $this->db->get( $this->db->dbprefix( 'system_users' ) );
                if ( $result->num_rows() === 1 ) return $result->row();
                        else return FALSE;
	}
	
}

/* End of file login_model.php */
/* Location: ./app/models/login_model.php */