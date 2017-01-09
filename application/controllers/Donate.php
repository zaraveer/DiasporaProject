<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donate extends CI_Controller {
	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
		$this->load->model('Profile_model');
		$this->load->model('Project_model');
	}
	
	public function index()
	{
		if (!$this->ion_auth->logged_in()){
			// redirect them to the login page
			redirect('/', 'refresh');
		}else{
			$this->load->view('p/html/head');
			$this->load->view('p/html/header');
		
			$userid = $this->session->userdata('user_id');
			$data['user'] = $this->ion_auth->user($userid)->row();
			$data['photo'] = $this->Profile_model->getphoto($userid);
			
			$data['r_uang'] = $this->Project_model->get_updated_donatetables('uang', $userid);
			$data['r_barang'] = $this->Project_model->get_donatetables('barang', $userid);
			$data['r_tenaga'] = $this->Project_model->get_donatetables('tenaga', $userid);
			
			//$this->load->view('p/html/leftpanel');
			
			$this->load->view('p/donate', $data);
			$this->load->view('p/html/footer');
		}
	}
	
	public function success()
	{
		if (!$this->ion_auth->logged_in()){
			// redirect them to the login page
			redirect('/', 'refresh');
		}else{
			$this->load->view('p/html/head');
			$this->load->view('p/html/header');
			
			$userid = $this->session->userdata('user_id');
			$data['user'] = $this->ion_auth->user($userid)->row();
			$data['photo'] = $this->Profile_model->getphoto($userid);
			//$this->load->view('p/html/leftpanel', $data);
			
			$this->load->view('p/donatesuccess');
			$this->load->view('p/html/footer');
		}
	}
	
	public function status($id, $st)
	{
		if($this->ion_auth->is_admin()){
			if($st == 'acc'){ $st = 1; }
			if($st == 'dec'){ $st = 2; }
			$data = array( 'donationstatus' => $st );
			$this->Project_model->setstatusdonate($id, $data);
		}
		redirect('donate', 'refresh');
	}
}