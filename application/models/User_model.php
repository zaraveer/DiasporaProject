<?php  
if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class User_model extends CI_Model {
	function __construct(){
       parent::__construct();
    }

    function get_usertables()
    {
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('users.company', NULL);
		$arr = $this->db->get();
    	
    	return $arr->result();
    }

    function setactive($id, $data){
        $this->db->where('id', $id);
        $this->db->update('users', $data);

        return $id;
    }
}