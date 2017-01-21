<?php
class profile extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','html'));
		$this->load->library('session');
		$this->load->database();
		$this->load->model('personne_model');
		
		if (!$this->session->userdata('login'))
		{
			redirect("home");
		}
	}
	
	function index()
	{
		$this->load->view('templates/header');
		$this->load->view('profile/index');
		$this->load->view('templates/footer');
	}
}
