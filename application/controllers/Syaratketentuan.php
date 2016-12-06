<!--*This is for controller syarat dan ketentuan*/-->

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Syaratketentuan extends CI_Controller {
	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
		//$this->load->model('Apaitu_model');
		//$this->load->model('Profile_model');
	}
	
	public function index()
	{
		$this->load->view('p/html/head');
		$this->load->view('p/html/header');
		$this->load->view('p/syaratketentuan');
		$this->load->view('p/html/footer');
		
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
	
}
	
?>