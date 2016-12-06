<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
		$this->load->model('Dashboard_model');
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
			$data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
			$data['user'] = $this->ion_auth->user($userid)->row();

			$data['money'] = $this->Dashboard_model->get_process();

			$data['photo'] = $this->Profile_model->getphoto($userid);

			$data['num_project'] = $this->Project_model->getcountprojectbyuserid($userid);
			$data['num_donated_project'] = $this->Project_model->getcountdonatedprojecttablebyuserid($userid);
			
			$collected_donation = $this->Project_model->getcollecteddoantionbyuserid($userid);
			$i = 0;
			foreach($collected_donation as $m){
				$i = $i + $m->value;
			};
			$data['collected_donation'] = $i;

			$total_donation= $this->Project_model->getdonatetablebyuserid($userid);
			$i = 0;
			foreach($total_donation as $m){
				$i = $i + $m->value;
			};
			$data['total_donation'] = $i;

			$this->load->view('p/html/leftpanel', $data);
			$this->load->view('p/userstatistic', $data);
			$this->load->view('p/html/footer');
		}
	}
}