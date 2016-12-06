<!--**This is controller for homepage or welcome page*-->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 
	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->library(array('ion_auth','form_validation'));
		$this->load->helper(array('url','language'));
		
		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('auth');
	}
	
	public function index()
	{		
		$this->load->model('Welcome_model');
		$this->data['money'] = $this->Welcome_model->get_process();
		$this->data['results'] = $this->Welcome_model->get_datatables();
		$this->data['lgn'] = $this->ion_auth->logged_in();
		
		$this->load->view('p/html/head');
		$this->load->view('p/html/header');
		/*for view homepage*/
		$this->load->view('welcome_message', $this->data);
	}
}
