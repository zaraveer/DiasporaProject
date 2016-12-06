<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	 
	function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->library(array('ion_auth','form_validation'));
		$this->load->helper(array('url','language'));
		
		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('auth');
	}
	
	function index()
	{
		$this->load->view('p/html/head');
		$this->load->view('p/html/header');
		
		$this->load->library('form_validation');
 
		//validate form input
		$this->form_validation->set_rules('usernamereg','Username','trim|required|is_unique[users.username]');
		$this->form_validation->set_rules('emailreg', 'Email', 'trim|required');
		$this->form_validation->set_rules('passwordreg', 'Password', 'trim|min_length[6]|max_length[20]|required');

		if ($this->form_validation->run() == true)
		{
			if ($this->ion_auth->register($this->input->post('usernamereg'), $this->input->post('passwordreg'), $this->input->post('emailreg')))
			{
				//$_SESSION['auth_message'] = 'The account has been created. Check your email to activate.';
                //$this->session->mark_as_flash('auth_message');
				$this->session->set_flashdata('message','The account has been created. Please wait to activate the account.');
                redirect('register', 'refresh');
			}
			else
			{
				$this->session->set_flashdata('message', $this->ion_auth->errors());
				if($this->session->flashdata('message') == 'Unable to Send Activation Email '){
					$this->session->set_flashdata('message', 'success');
				}
				redirect('register', 'refresh'); // use redirects instead of loading views for compatibility with MY_Controller libraries
			}
		}

		$this->data['usernamereg'] = array('name' => 'usernamereg',
			'id'    => 'usernamereg',
			'type'  => 'text',
			'value' => $this->form_validation->set_value('usernamereg'),
		);
		$this->data['emailreg'] = array('name' => 'emailreg',
			'id'    => 'emailreg',
			'type'  => 'text',
			'value' => $this->form_validation->set_value('emailreg'),
		);
		$this->data['passwordreg'] = array('name' => 'passwordreg',
			'id'   => 'passwordreg',
			'type' => 'password',
		);

		$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
		$this->load->view('register', $this->data);
		
		$this->load->view('p/html/footer');
	}
}
