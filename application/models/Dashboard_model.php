<?php  
if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Dashboard_model extends CI_Model {
	function __construct(){
       parent::__construct();
    }
	
	function get_datatables($id, $kunc = null, $kate = null)
    {
        $this->db->select('*');
        $this->db->from('project');
		$this->db->join('users', 'users.id = project.id_user', 'inner');
		$this->db->join('projectcategory', 'projectcategory.id_category = project.category', 'inner');
		$this->db->join('province', 'province.id_province = project.province', 'inner');
		$this->db->where('users.id !=', $id);
		$this->db->where('project.status =', 1);
		if($kate != null){
			$this->db->where('projectcategory.id_category', $kate);
		}
		if($kunc != null){
			$this->db->like('project.name_project', $kunc); 
		}
		$this->db->order_by('id_project','ASC');
        $arr = $this->db->get();
 
        return $arr->result();
    }
	
	function get_process()
    {
        $this->db->select('*');
        $this->db->from('donate');
		$this->db->join('project', 'project.id_project = donate.id_project', 'inner');
		$this->db->where('donate.donatetype', 'uang');
        $arr = $this->db->get();
 
        return $arr->result();
    }
	function get_category(){
		$result = array();
        $this->db->select('*');
        $this->db->from('projectcategory');
        $this->db->order_by('id_category','ASC');
        $array_keys_values = $this->db->get();
        foreach ($array_keys_values->result() as $row)
        {
            $result['']= '';
            $result[$row->id_category]= $row->name_category;
        }
 
        return $result;
	}
	function get_category_id($id){
		$result = array();
        $this->db->select('*');
        $this->db->from('projectcategory');
        $this->db->where('projectcategory.id_category', $id);
        $result = $this->db->get()->row();
 
        return $result->name_category;
	}
}
?>