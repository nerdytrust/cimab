<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Core_model extends CI_Model {

	public function __construct(){
		parent::__construct();
        $this->load->database();
	}

    /**
     * Método para guardar en la base de datos un registro de contacto
     * @param array $data Datos del Formulario
     */
    public function add_contact( $data ){
        $this->db->set( 'name', $data['name'] );
        $this->db->set( 'lastname', $data['lastname'] );
        $this->db->set( 'phone', $data['phone'] );
        $this->db->set( 'email', $data['email'] );
        $this->db->set( 'contact_type', $data['contact_type'] );
        $this->db->set( 'state', $data['state'] );
        $this->db->set( 'message', $data['message'] );
        $this->db->set( 'ip', $data['ip'] );
        $this->db->set( 'browser', $data['browser'] );
        $this->db->insert( $this->db->dbprefix( 'contacto' ) );
        if ( $this->db->affected_rows() > 0 )
            return TRUE;
    }
	
    /**
     * Método para guardar en la base de datos un registro de subscriptor de Newsletter
     * @param array $data Datos del Formulario
     */
	public function add_subscribe( $data ){
        $this->db->set( 'name', $data['name'] );
        $this->db->set( 'email', $data['email'] );
        $this->db->set( 'ip', $data['ip'] );
        $this->db->set( 'browser', $data['browser'] );
        $this->db->insert( $this->db->dbprefix( 'subscribers_newsletter' ) );
        if ( $this->db->affected_rows() > 0 )
            return TRUE;
    }

    /**
     * Método para guardar una nueva solicitud de Platicas de Sensibilización en la Base de Datos
     * @param array $data Datos del Formulario
     */
    public function add_speak( $data ){
        $this->db->set( 'name', $data['name'] );
        $this->db->set( 'lastname', $data['lastname'] );
        $this->db->set( 'phone', $data['phone'] );
        $this->db->set( 'email', $data['email'] );
        $this->db->set( 'work', $data['work'] );
        $this->db->set( 'date_speak', $data['date_speak'] );
        $this->db->set( 'time_speak', $data['time_speak'] );
        $this->db->set( 'state', $data['state'] );
        $this->db->set( 'address', $data['address'] );
        $this->db->set( 'assistants', $data['assistants'] );
        $this->db->set( 'requeriments', $data['requeriments'] );
        $this->db->set( 'ip', $data['ip'] );
        $this->db->set( 'browser', $data['browser'] );
        $this->db->insert( $this->db->dbprefix( 'platicas_sensibilizacion' ) );
        if ( $this->db->affected_rows() > 0 )
            return TRUE;
    }

    /**
     * Método para guardar una nueva solicitud de Voluntariado en la Base de Datos
     * @param array $data Datos del Formulario
     */
    public function add_volunteer( $data ){
        $this->db->set( 'fullname', $data['fullname'] );
        $this->db->set( 'phone', $data['phone'] );
        $this->db->set( 'email', $data['email'] );
        $this->db->set( 'school', $data['school'] );
        $this->db->set( 'degree', $data['degree'] );
        $this->db->set( 'timevolunteer', $data['timevolunteer'] );
        $this->db->set( 'volunteer_type', $data['volunteer_type'] );
        $this->db->set( 'ip', $data['ip'] );
        $this->db->set( 'browser', $data['browser'] );
        $this->db->insert( $this->db->dbprefix( 'voluntariado' ) );
        if ( $this->db->affected_rows() > 0 )
            return TRUE;
    }

}

/* End of file Core_model.php */
/* Location: ./app/models/Core_model.php */