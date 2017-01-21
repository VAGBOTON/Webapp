<?php
class Home extends CI_Controller
{
	public $data = array();
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url', 'html'));
		$this->load->library('session');
		$this->load->database();
		$this->load->model('personne_model');
	}
	
	function index()
	{
		$this->load->view('templates/header');
		$this->load->view('home/index');
		$this->load->view('templates/footer');
	}
	
	function logout()
	{
		$data = array('login' => '', 'role' => '', 'name' => '', 'id' => '');
		$this->session->unset_userdata($data);
		$this->session->sess_destroy();
		redirect('home');
	}
}
