<?php  
if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Welcome_model extends CI_Model {
	function __construct(){
       parent::__construct();
    }
	
	function get_datatables()
    {
        $this->db->select('*');
        $this->db->from('project');
		$this->db->join('users', 'users.id = project.id_user', 'inner');
		$this->db->join('projectcategory', 'projectcategory.id_category = project.category', 'inner');
		$this->db->join('province', 'province.id_province = project.province', 'inner');
		$this->db->where('project.status =', 1);
		$this->db->order_by('project.id_project', 'RANDOM');
		$this->db->limit(3, 0);
        $arr = $this->db->get();
 
        return $arr->result();
    }
	
	function get_process()
    {
        $this->db->select('*');
        $this->db->from('donate');
		$this->db->join('project', 'project.id_project = donate.id_project', 'inner');
		$this->db->where('donate.donatetype', 'uang');
        $this->db->where('donationstatus', 1);
        $arr = $this->db->get();
 
        return $arr->result();
    }
}
?>