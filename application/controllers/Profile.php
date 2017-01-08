<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
		$this->load->model('Profile_model');
	}
	
	public function index($code = null)
	{
		$this->load->view('p/html/head');
		$this->load->view('p/html/header');
		$userid = $this->session->userdata('user_id');
		$data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
		$data['profile'] = $this->session->flashdata('profile');
		$data['user'] = $this->ion_auth->user($userid)->row();
		$data['province'] = $this->Profile_model->get_province();
			
		if(isset($data['user']->province)){	
			$data['city'] = $this->Profile_model->getCityList($data['user']->province);
		}
		$data['id'] = $userid;
		$data['code'] = $code;
		$data['photo'] = $this->Profile_model->getphoto($userid);
		//$this->load->view('p/html/leftpanel', $data);
		$this->load->view('p/profile', $data);
		$this->load->view('p/html/footer');
	}
	
	public function details($id)
	{
		if ($this->ion_auth->logged_in()){

			$this->load->view('p/html/head');
			$this->load->view('p/html/header');
			
			$userid = $this->session->userdata('user_id');
			$data['id'] = $userid;
			$data['user'] = $this->ion_auth->user($userid)->row();
			$data['photo'] = $this->Profile_model->getphoto($userid);
			
			//$this->load->view('p/html/leftpanel', $data);
			
			$data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
			$data['duser'] = $this->Profile_model->getprofile($id);
					
			$this->load->view('p/profiledetails', $data);
			$this->load->view('p/html/footer');
		}else{
			$data['lgn'] = $this->ion_auth->logged_in();
			$this->load->view('p/html/head');
			$this->load->view('p/html/header', $data);
			
			$userid = $this->session->userdata('user_id');
			$data['id'] = $userid;
			$data['user'] = $this->ion_auth->user($userid)->row();
			
			$data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
			$data['duser'] = $this->Profile_model->getprofile($id);
					
			$this->load->view('p/profiledetails', $data);
			$this->load->view('p/html/footer');
		}
	}
	
	public function update()
	{
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('username','Username','trim|required');
		$this->form_validation->set_rules('first_name','Fisrtname','trim|required');
		$this->form_validation->set_rules('last_name','Lastname','trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('phone', 'Phone', 'trim|min_length[7]|max_length[20]');
		$this->form_validation->set_rules('dob', 'DOB', 'trim|required');
		$this->form_validation->set_rules('gender', 'Gender', 'required');
		$this->form_validation->set_rules('profession', 'Profession', 'trim|required');
		$this->form_validation->set_rules('address', 'Address', 'trim|required');
		//$this->form_validation->set_rules('province', 'Province', 'trim|required');
		$this->form_validation->set_rules('city', 'City', 'trim|required');
		
		$province = $this->input->post('province');
		if(empty($province)){
			$province = "35";
		}
		
		$data = array(
		    'username'   => $this->input->post('username'),
		    'first_name'  => $this->input->post('first_name'),
		    'last_name'   => $this->input->post('last_name'),
		    'phone'   	 => $this->input->post('phone'),
		    'email'      => $this->input->post('email'),
		    'dob' 		 => $this->input->post('dob'),
		    'gender' 	 => $this->input->post('gender'),
		    'profession' => $this->input->post('profession'),
		    'address' 	 => $this->input->post('address'),
		    'country' 	 => $this->input->post('country'),
		    'province' 	 => $province,
		    'city' 	 	 => $this->input->post('city')
		);
		$id = $this->input->post('iduser');
		
		$this->session->set_flashdata('profile','edit');
		if ($this->form_validation->run() == true)
		{
			$update = $this->Profile_model->updateprofile($id, $data);
			$this->session->set_flashdata('message','<b>Update Success!</b>');
			redirect('profile', 'refresh');
		}else{
			$message = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
			$this->session->set_flashdata('message','Update Failed!'.$message);
			redirect('profile', 'refresh');
		}
	}
	
	public function updateabout()
	{
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('aboutme','Aboutme','trim|required');
		$id = $this->input->post('iduser');
		$am = $this->input->post('aboutme');
		if ($this->form_validation->run() == true)
		{
			$update = $this->Profile_model->updateam($id, $am);
			$this->session->set_flashdata('message','Update Success!');
			$this->session->set_flashdata('profile','about');
			redirect('profile', 'refresh');
		}else{
			$message = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
			$this->session->set_flashdata('message','Update Failed!'.$message);
			$this->session->set_flashdata('profile','about');
			redirect('profile', 'refresh');
		}
	}

	function updatephoto(){
		$id = $this->input->post('iduser');
		
		$config['upload_path'] = './assets/pp/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size'] = '1000';
		$config['max_width'] = '1000';
		$config['max_height'] = '1000';
		$config['encrypt_name'] = TRUE;
		
		$this->load->library('upload', $config);   

		if($_POST || $_FILES){
			if(!$this->upload->do_upload('file')){
				//echo $this->upload->display_errors('<p>Error</p>');
				echo '<p>Error</p>';
			} else {
				$w = $this->upload->data();
				$data = array(
					'photo' => $w['file_name']
				);
				$this->db->where('id', $id);
				$this->db->update('users', $data);
			}
		}
		$this->session->set_flashdata('profile','picture');
	}
	
	public function select_city($a){
		$id_province = $a;
        $data['cities'] = $this->Profile_model->getCityList($id_province);
        $this->load->view('p/city',$data);
    }
	
	public function select_province($a){
		$id_country = $a;
        $data['provinces'] = $this->Profile_model->get_province($id_country);
        $this->load->view('p/province',$data);
    }

    public function select_kr_province($a){
		$id_country = $a;
        $data['provinces'] = $this->Profile_model->get_kr_province($id_country);
        $this->load->view('p/province',$data);
    }
}