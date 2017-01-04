<!-- /*This is for controller project*/ -->

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller {
	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
		$this->load->model('Project_model');
		$this->load->model('Profile_model');
	}
	
	public function index()
	{
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('/', 'refresh');
		}else{
			$this->load->view('p/html/head');
			$this->load->view('p/html/header');
			
			$userid = $this->session->userdata('user_id');
			$data['user'] = $this->ion_auth->user($userid)->row();
			$data['photo'] = $this->Profile_model->getphoto($userid);
			$this->load->view('p/html/leftpanel', $data);
			
			$data['money'] = $this->Project_model->get_process();
			if($this->ion_auth->is_admin()){
				$data['results'] = $this->Project_model->get_datatables_admin();
			}else{
				$data['results'] = $this->Project_model->get_datatables($userid); /* my project */
				$data['myresults'] = $this->Project_model->get_mydatatables($userid); /* my donation */
			}
			$data['donation'] = $this->Project_model->get_datadonation($userid);
			$data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
			$this->load->view('p/project', $data);
			
			$this->load->view('p/html/footer');
		}
	}
	
	public function all($page = 1){
		$this->load->view('p/html/head');
		$this->load->view('p/html/header');
		$userid = $this->session->userdata('user_id');
		$data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
		$data['user'] = $this->ion_auth->user($userid)->row();

		$data['money'] = $this->Project_model->get_process();

		$kunc = $this->input->post('katakunci');
		$kate = $this->input->post('category');
		$data['kunc'] = $kunc;
		if(!empty($kate)) { $data['kate'] = $this->Project_model->get_category_id($kate); }
		$data['category'] = $this->Project_model->get_category();
		
		$data['page'] = $page;
		//$data['results'] = $this->Project_model->get_all_datatables($page);
		$data['results'] = $this->Project_model->get_selected_datatables($kunc, $kate);
		
		$data['countresult'] = count($this->Project_model->get_all_datatables_count());
		
		$this->load->view('p/allproject', $data);
		$this->load->view('p/html/footer');
	}
	
	public function form($projectid = null)
	{
		$this->load->view('p/html/head');
		$this->load->view('p/html/header');
		
		$userid = $this->session->userdata('user_id');
		$data['id'] = $userid;
		$data['user'] = $this->ion_auth->user($userid)->row();
		$data['photo'] = $this->Profile_model->getphoto($userid);
		$this->load->view('p/html/leftpanel', $data);

		$data['action'] = 'insert';
		
		if($projectid != null){
			$data['dproject'] = $this->Project_model->getproject($projectid);
			$data['action'] = 'update';
		}
		
		$data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
		$data['category'] = $this->Project_model->get_category();
		$data['province'] = $this->Project_model->get_province();

		//if(isset($data['user']->province)){	
		if($projectid != null){
			$data['city'] = $this->Project_model->getCityList($data['dproject']->province);
		}
		$this->load->view('p/newproject', $data);
		$this->load->view('p/html/footer');
	}
	
	public function donate($idproject, $type)
	{
		if ($this->ion_auth->logged_in())
		{
			// redirect them to the login page
			$this->load->view('p/html/head');
			$this->load->view('p/html/header');
			
			$userid = $this->session->userdata('user_id');
			$data['id'] = $userid;
			$data['user'] = $this->ion_auth->user($userid)->row();
			$data['photo'] = $this->Profile_model->getphoto($userid);
			
			$data['dproject'] = $this->Project_model->getproject($idproject);
			$this->load->view('p/html/leftpanel', $data);
			
			$data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
			
			$data['type'] = $type;
			
			$this->load->view('p/projectdonate', $data);
			$this->load->view('p/html/footer');
		}else{
			redirect('/', 'refresh');
		}
	}
	
	function slugify($text){
		// replace non letter or digits by -
		$text = preg_replace('~[^\pL\d]+~u', '-', $text);

		// transliterate
		$text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

		// remove unwanted characters
		$text = preg_replace('~[^-\w]+~', '', $text);

		// trim
		$text = trim($text, '-');

		// remove duplicate -
		$text = preg_replace('~-+~', '-', $text);

		// lowercase
		$text = strtolower($text);

		if (empty($text)){ return 'n-a'; }

		return $text;
	}
	
	public function submit()
	{
		$this->load->library('form_validation');
		
		if($this->input->post('action') == 'update'){
			if($this->input->post('potonya') == "sip"){
				$config['upload_path'] = './assets/photos/';
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$config['max_size'] = '1000';
				$config['encrypt_name'] = TRUE;
				
				$this->load->library('upload', $config);  
				
				$w = "";	

				if($_POST || $_FILES){
					if($this->upload->do_upload('fileproject')){
						$w = $this->upload->data();
					}
				}
				
				$data = array(
					'id_user' 		=> $this->input->post('iduser'),
					'name_project' 	=> $this->input->post('projectname'),
					'category'		=> $this->input->post('category'),
					'datefrom' 		=> $this->input->post('datefrom'),
					'dateto' 		=> $this->input->post('dateto'),
					'cost' 			=> $this->input->post('cost'),
					'province'		=> $this->input->post('province'),
					'city' 			=> $this->input->post('city'),
					'summary' 		=> $this->input->post('projectsummary'),
					'objective' 	=> $this->input->post('projectobjective'),
					'reason' 		=> $this->input->post('projectreason'),
					'goal'	 		=> $this->input->post('projectgoal'),
					'details'	 	=> $this->input->post('projectdetail'),
					'projectadded'	=> date('d')."/".date('m')."/".date('Y'),
					'projectphoto'	=> $w['file_name'],
					'slug'	 		=> $this->slugify($this->input->post('projectname')),
					'country'		=> $this->input->post('country')
				);
			}else{
				$data = array(
					'id_user' 		=> $this->input->post('iduser'),
					'name_project' 	=> $this->input->post('projectname'),
					'category'		=> $this->input->post('category'),
					'datefrom' 		=> $this->input->post('datefrom'),
					'dateto' 		=> $this->input->post('dateto'),
					'cost' 			=> $this->input->post('cost'),
					'province'		=> $this->input->post('province'),
					'city' 			=> $this->input->post('city'),
					'summary' 		=> $this->input->post('projectsummary'),
					'objective' 	=> $this->input->post('projectobjective'),
					'reason' 		=> $this->input->post('projectreason'),
					'goal'	 		=> $this->input->post('projectgoal'),
					'details'	 	=> $this->input->post('projectdetail'),
					'projectadded'	=> date('d')."/".date('m')."/".date('Y'),
					'slug'	 		=> $this->slugify($this->input->post('projectname')),
					'country'		=> $this->input->post('country')
				);
			}
		}else if($this->input->post('action') == 'insert'){
			$config['upload_path'] = './assets/photos/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size'] = '1000';
			$config['encrypt_name'] = TRUE;
			
			$this->load->library('upload', $config);  
			
			$w = "";	

			if($_POST || $_FILES){
				if($this->upload->do_upload('fileproject')){
					$w = $this->upload->data();
				}
			}
			
			$data = array(
				'id_user' 		=> $this->input->post('iduser'),
				'name_project' 	=> $this->input->post('projectname'),
				'category'		=> $this->input->post('category'),
				'datefrom' 		=> $this->input->post('datefrom'),
				'dateto' 		=> $this->input->post('dateto'),
				'cost' 			=> $this->input->post('cost'),
				'province'		=> $this->input->post('province'),
				'city' 			=> $this->input->post('city'),
				'summary' 		=> $this->input->post('projectsummary'),
				'objective' 	=> $this->input->post('projectobjective'),
				'reason' 		=> $this->input->post('projectreason'),
				'goal'	 		=> $this->input->post('projectgoal'),
				'details'	 	=> $this->input->post('projectdetail'),
				'projectadded'	=> date('d')."/".date('m')."/".date('Y'),
				'projectphoto'	=> $w['file_name'],
				'slug'	 		=> $this->slugify($this->input->post('projectname')),
				'status'	 	=> 0,
				'country'		=> $this->input->post('country')
			);
		}
		
		if($this->input->post('action') == 'insert'){
		
			if ($this->Project_model->addproject($data)){
				redirect('project', 'refresh');
			}else{
				$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
				$this->_render_page('project', $this->data);
			}		
		
		}else{
			
			if ($this->Project_model->updateproject($this->input->post('idproj'), $data)){
				redirect('project', 'refresh');
			}else{
				$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
				$this->_render_page('project', $this->data);
			}
			
		}	
		
	}
	
	public function details($slug, $id)
	{
		if ($this->ion_auth->logged_in())
		{
			$data['dproject'] = $this->Project_model->getprojectbyslug($slug, $id);
			$this->load->view('p/html/head', $data);
			$this->load->view('p/html/header');
			
			$userid = $this->session->userdata('user_id');
			$data['id'] = $userid;
			$data['user'] = $this->ion_auth->user($userid)->row();
			$data['photo'] = $this->Profile_model->getphoto($userid);
			
			$this->load->view('p/html/leftpanel', $data);

			$data['r_uang'] = $this->Project_model->get_updated_donatetables_by_project_id('uang', $data['dproject']->id_project);
			$data['r_barang'] = $this->Project_model->get_donatetables_by_project_id('barang', $data['dproject']->id_project);
			$data['r_tenaga'] = $this->Project_model->get_donatetables_by_project_id('tenaga', $data['dproject']->id_project);
			
			$data['money'] = $this->Project_model->get_process();
			$data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
					
			$this->load->view('p/projectdetails', $data);
			$this->load->view('p/html/footer');
		}else{
			$data['lgn'] = $this->ion_auth->logged_in();
			$data['dproject'] = $this->Project_model->getprojectbyslug($slug, $id);
			$this->load->view('p/html/head', $data);
			$this->load->view('p/html/header', $data);

			$data['r_uang'] = $this->Project_model->get_updated_donatetables_by_project_id('uang', $data['dproject']->id_project);
			$data['r_barang'] = $this->Project_model->get_donatetables_by_project_id('barang', $data['dproject']->id_project);
			$data['r_tenaga'] = $this->Project_model->get_donatetables_by_project_id('tenaga', $data['dproject']->id_project);
			
			$data['money'] = $this->Project_model->get_process();
			$data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
					
			$this->load->view('p/projectdetails', $data);
			$this->load->view('p/html/footer');
		}
	}
	
	public function status($id, $st)
	{
		if($this->ion_auth->is_admin()){
			if($st == 'acc'){ $st = 1; }
			if($st == 'dec'){ $st = 2; }
			$data = array( 'status' => $st );
			$this->Project_model->setstatus($id, $data);
		}
		redirect('project', 'refresh');
	}
	
	public function savedonation()
	{
		$this->load->library('form_validation');
		
		$userid = $this->session->userdata('user_id');
		$type = $this->input->post('typ');
		$data = array(
			'id_user' 		=> $userid,
			'id_project'	=> $this->input->post('idproject'),
			'value' 		=> $this->input->post('nilai'),
			'donatetype' 	=> $type,
			'dateadded'	 	=> date('d')."/".date('m')."/".date('Y'),
			'donationstatus'=> 0
		);
		
		$iddonate = $this->Project_model->adddonate($data);
		
		if ($iddonate && $type == "uang"){
			$mone = array(
				'id_donate'		=> $iddonate,
				'bank' 			=> $this->input->post('bank'),
				'atasnama' 		=> $this->input->post('an'),
				'catatan' 		=> $this->input->post('catatan'),
			);
			
			$this->Project_model->adddonatemoney($mone);
			$this->session->set_flashdata('message','<b>Donasi berhasil</b>');
			redirect('donate/success', 'refresh');
		}elseif(!$iddonate){
			$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
			$this->_render_page('donate', $this->data);
		}else{
			$this->session->set_flashdata('message','<b>Donasi telah di tambahkan</b>');
			redirect('donate', 'refresh');
		}		
	}
}

?>