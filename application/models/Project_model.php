/**Maulida edit model untuk database**/

<?php  
if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Project_model extends CI_Model {
	function __construct(){
       parent::__construct();
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
	
	function get_datadonation($id)
    {
		$res = array();
        //$query = $this->db->query("SELECT * FROM `project` INNER JOIN `users` ON `users`.`id` = `project`.`id_user` INNER JOIN `projectcategory` ON `projectcategory`.`id_category` = `project`.`category` INNER JOIN `province` ON `province`.`id_province` = `project`.`province` INNER JOIN `donate` ON `donate`.`id_project` = `project`.`id_project` WHERE `users`.`id` = '12' GROUP BY `project`.`id_project` ORDER BY `project`.`id_project` ASC", FALSE);
        $this->db->select('*');
        $this->db->from('project');
		$this->db->join('users', 'users.id = project.id_user', 'inner');
		$this->db->join('projectcategory', 'projectcategory.id_category = project.category', 'inner');
		$this->db->join('province', 'province.id_province = project.province', 'inner');
		$this->db->join('donate', 'donate.id_project = project.id_project', 'inner');
		//$this->db->where('users.id', $id);
		$this->db->where('project.id_user', $id);
		$this->db->group_by('project.id_project');
		$this->db->order_by('project.id_project','ASC');
        $arr = $this->db->get();
		
		$res = $arr->result();
		
        return $res;
    }
	
	function get_datatables_admin()
    {
        $this->db->select('*');
        $this->db->from('project');
		$this->db->join('users', 'users.id = project.id_user', 'inner');
		$this->db->join('projectcategory', 'projectcategory.id_category = project.category', 'inner');
		$this->db->join('province', 'province.id_province = project.province', 'inner');
		$this->db->order_by('id_project','ASC');
        $arr = $this->db->get();
 
        return $arr->result();
    }
	
	function get_datatables($id)
    {
		$res = array();
        //$query = $this->db->query("SELECT * FROM `project` INNER JOIN `users` ON `users`.`id` = `project`.`id_user` INNER JOIN `projectcategory` ON `projectcategory`.`id_category` = `project`.`category` INNER JOIN `province` ON `province`.`id_province` = `project`.`province` INNER JOIN `donate` ON `donate`.`id_project` = `project`.`id_project` WHERE `users`.`id` = '12' GROUP BY `project`.`id_project` ORDER BY `project`.`id_project` ASC", FALSE);
        $this->db->select('*');
        $this->db->from('project');
		$this->db->join('users', 'users.id = project.id_user', 'inner');
		$this->db->join('projectcategory', 'projectcategory.id_category = project.category', 'inner');
		$this->db->join('province', 'province.id_province = project.province', 'inner');
		//$this->db->join('city', 'city.id_city = project.city', 'inner');
		$this->db->where('project.id_user', $id);
		$this->db->group_by('project.id_project');
		$this->db->order_by('project.id_project','ASC');
        $arr = $this->db->get();
		
		$res = $arr->result();
		
        return $res;
    }

    function get_selected_datatables($kunc = null, $kate = null)
    {
        $this->db->select('*');
        $this->db->from('project');
		$this->db->join('users', 'users.id = project.id_user', 'inner');
		$this->db->join('projectcategory', 'projectcategory.id_category = project.category', 'inner');
		$this->db->join('province', 'province.id_province = project.province', 'inner');
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
	
	function get_mydatatables($id)
    {
		$res = array();
        //$query = $this->db->query("SELECT * FROM `project` INNER JOIN `users` ON `users`.`id` = `project`.`id_user` INNER JOIN `projectcategory` ON `projectcategory`.`id_category` = `project`.`category` INNER JOIN `province` ON `province`.`id_province` = `project`.`province` INNER JOIN `donate` ON `donate`.`id_project` = `project`.`id_project` WHERE `users`.`id` = '12' GROUP BY `project`.`id_project` ORDER BY `project`.`id_project` ASC", FALSE);
        $this->db->select('*');
        $this->db->from('project');
		$this->db->join('users', 'users.id = project.id_user', 'inner');
		$this->db->join('projectcategory', 'projectcategory.id_category = project.category', 'inner');
		$this->db->join('province', 'province.id_province = project.province', 'inner');
		$this->db->join('donate', 'donate.id_project = project.id_project', 'inner');
		//$this->db->join('city', 'city.id_city = project.city', 'inner');
		$this->db->where('donate.id_user', $id);
		$this->db->where('project.status', '1');
		$this->db->group_by('project.id_project');
		$this->db->order_by('project.id_project','ASC');
        $arr = $this->db->get();
		
		$res = $arr->result();
		
        return $res;
    }
	
	function get_all_datatables($page = 0) /* all project list*/
    {	
		$start = 0;
		if($page > 1) {
			$start = ($page * 6) - 6;
		}
		
		$res = array();
        //$query = $this->db->query("SELECT * FROM `project` INNER JOIN `users` ON `users`.`id` = `project`.`id_user` INNER JOIN `projectcategory` ON `projectcategory`.`id_category` = `project`.`category` INNER JOIN `province` ON `province`.`id_province` = `project`.`province` INNER JOIN `donate` ON `donate`.`id_project` = `project`.`id_project` WHERE `users`.`id` = '12' GROUP BY `project`.`id_project` ORDER BY `project`.`id_project` ASC", FALSE);
        $this->db->select('*');
        $this->db->from('project');
		$this->db->join('users', 'users.id = project.id_user', 'inner');
		$this->db->join('projectcategory', 'projectcategory.id_category = project.category', 'inner');
		$this->db->join('province', 'province.id_province = project.province', 'inner');
		//$this->db->join('city', 'city.id_city = project.city', 'inner');
		$this->db->where('project.status', '1');
		$this->db->group_by('project.id_project');
		$this->db->order_by('project.id_project','ASC');
		$this->db->limit(6, $start);
        $arr = $this->db->get();
		
		$res = $arr->result();
		
        return $res;
    }
	
	function get_all_datatables_count() /* all project list*/
    {	
		
		$res = array();
        $this->db->select('*');
        $this->db->from('project');
		$this->db->join('users', 'users.id = project.id_user', 'inner');
		$this->db->join('projectcategory', 'projectcategory.id_category = project.category', 'inner');
		$this->db->join('province', 'province.id_province = project.province', 'inner');
		$this->db->where('project.status', '1');
		$this->db->group_by('project.id_project');
		$this->db->order_by('project.id_project','ASC');
        $arr = $this->db->get();
		
		$res = $arr->result();
		
        return $res;
    }
	
	function get_process()
    {
        $this->db->select('*');
        $this->db->from('donate');
		$this->db->join('project', 'project.id_project = donate.id_project', 'inner');
		$this->db->where('donate.donatetype', 'uang');
		$this->db->where('donate.donationstatus', 1);
        $arr = $this->db->get();
 
        return $arr->result();
    }
	
	function get_donatetables($type, $user)
    {
		if(!$this->ion_auth->is_admin()){
			$this->db->select('*');
			$this->db->from('donate');
			$this->db->join('project', 'project.id_project = donate.id_project', 'inner');
			$this->db->where('donate.id_user', $user);
			$this->db->where('donate.donatetype', $type);
			$arr = $this->db->get();
		}else{
			$this->db->select('*');
			$this->db->from('donate');
			$this->db->join('project', 'project.id_project = donate.id_project', 'inner');
			$this->db->where('donate.donatetype', $type);
			$arr = $this->db->get();
		}
 
        return $arr->result();
    }

    function get_donatetables_by_project_id($type, $id)
    {
    	$this->db->select('*');
		$this->db->from('donate');
		$this->db->join('project', 'project.id_project = donate.id_project', 'inner');
		$this->db->where('donate.id_project', $id);
		$this->db->where('donate.donatetype', $type);
		$arr = $this->db->get();
 
        return $arr->result();
    }

    function get_updated_donatetables($type, $user)
    {
		if(!$this->ion_auth->is_admin()){
			$arr = $this->db->query('SELECT donate.id_donate, donate.dateadded, donate.value, project.name_project, donate_money.bank, donate_money.atasnama, users.username, donate.donationstatus, donate.donatetype
				FROM donate LEFT JOIN project ON donate.id_project = project.id_project 
				LEFT JOIN donate_money ON donate.id_donate = donate_money.id_donate 
				LEFT JOIN users ON users.id = donate.id_user' .' WHERE donate.donatetype="'.$type.'"'.' AND '.'donate.id_user="'.$user.'"');
		}else{
			$arr = $this->db->query('SELECT donate.id_donate, donate.dateadded, donate.value, project.name_project, donate_money.bank, donate_money.atasnama, users.username, donate.donationstatus, donate.donatetype
				FROM donate LEFT JOIN project ON donate.id_project = project.id_project 
				LEFT JOIN donate_money ON donate.id_donate = donate_money.id_donate 
				LEFT JOIN users ON users.id = donate.id_user' .' WHERE donate.donatetype="'.$type.'"');
		}
 
        return $arr->result();
    }

    function get_updated_donatetables_by_project_id($type, $id)
    {

		$arr = $this->db->query('SELECT donate.id_donate, donate.dateadded, donate.value, project.name_project, donate_money.bank, donate_money.atasnama, users.username, donate.donationstatus, donate.donatetype
				FROM donate LEFT JOIN project ON donate.id_project = project.id_project 
				LEFT JOIN donate_money ON donate.id_donate = donate_money.id_donate 
				LEFT JOIN users ON users.id = donate.id_user' .' WHERE donate.donatetype="'.$type.'"'.' AND '.'donate.id_project="'.$id.'"');
 
        return $arr->result();
    }

	public function getcountprojectbyuserid($user_id) {
		$this->db->select('*');
		$this->db->from('project');
		$this->db->where('id_user', $user_id);
		$this->db->where('status', 1);
		$arr = $this->db->get();

		return $arr->num_rows();
	}

	public function getcollecteddoantionbyuserid($user_id) {
		$arr = $this->db->query('SELECT donate.id_donate, donate.dateadded, donate.value, project.name_project, donate_money.bank, donate_money.atasnama, users.username, donate.donationstatus, donate.donatetype
				FROM donate LEFT JOIN project ON donate.id_project = project.id_project 
				LEFT JOIN donate_money ON donate.id_donate = donate_money.id_donate 
				LEFT JOIN users ON users.id = donate.id_user
                WHERE donate.donatetype = "uang" AND donate.donationstatus = 1 AND project.id_user ="'.$user_id.'"');

		return $arr->result();
	}

	public function getdonatetablebyuserid($user_id) {
		$this->db->select('*');
		$this->db->from('donate');
		$this->db->where('id_user', $user_id);
		$this->db->where('donationstatus', 1);
		$this->db->where('donatetype', 'uang');
		$arr = $this->db->get();

		return $arr->result();
	}

	public function getcountdonatedprojecttablebyuserid($user_id) {
		$this->db->distinct();
		$this->db->select('id_project');
		$this->db->from('donate');
		$this->db->where('id_user', $user_id);
		$this->db->where('donationstatus', 1);
		$this->db->where('donatetype', 'uang');
		$arr = $this->db->get();

		return $arr->num_rows();
	}
	
	function get_donatetables_admin($type)
    {
        $this->db->select('*');
        $this->db->from('donate');
		$this->db->join('project', 'project.id_project = donate.id_project', 'inner');
		$this->db->where('donate.donatetype', $type);
        $arr = $this->db->get();
 
        return $arr->result();
    }
	
	public function getproject($id) {
		$this->db->select('*');
		$this->db->from('project');
		$this->db->where('id_project', $id);
		$result = $this->db->get();
		
		$ret = $result->row();
		return $ret;
	}
	
 	public function getprojectbyslug($slug, $id) {
		$id = ltrim($id, '0');
		$this->db->select('*');
		$this->db->from('project');
		$this->db->join('users', 'users.id = project.id_user', 'inner');
		$this->db->where('slug', $slug)->where('id_user', $id);
		$result = $this->db->get();
		
		$ret = $result->row();
		return $ret;
	}
	
	function addproject($data){
		$this->db->insert('project', $data);
        $id = $this->db->insert_id();
		return (isset($id)) ? $id : FALSE;
	}
	
	function updateproject($id, $data){
		$this->db->where('id_project', $id);
		$this->db->update('project', $data);
		
		return $id;
	}
	
	function adddonate($data){
		$this->db->insert('donate', $data);
        $id = $this->db->insert_id();
		return (isset($id)) ? $id : FALSE;
	}
	
	
	function adddonatemoney($data){
		$this->db->insert('donate_money', $data);
        $id = $this->db->insert_id();
		return (isset($id)) ? $id : FALSE;
	}
	
	function setstatus($id, $data){
		$this->db->where('id_project', $id);
		$this->db->update('project', $data);

		return $id;
	}
	
	function setstatusdonate($id, $data){
		$this->db->where('id_donate', $id);
		$this->db->update('donate', $data);

		return $id;
	}
	
	function get_province(){
		$result = array();
        $this->db->select('*');
        $this->db->from('province');
        $this->db->order_by('id_province','ASC');
        $array_keys_values = $this->db->get();
        foreach ($array_keys_values->result() as $row)
        {
            $result['']= '';
            $result[$row->id_province]= $row->name_province;
        }
 
        return $result;
	}
	function getCityList($id_province){
        $result = array();
        
		$this->db->select('*');
        $this->db->from('city');
        $this->db->where('id_province_city',$id_province);
        $this->db->order_by('id_city','ASC');
        $array_keys_values = $this->db->get();
		
        foreach ($array_keys_values->result() as $row)
        {
            $result['']= '';
            $result[$row->id_city] = $row->name_city;
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
