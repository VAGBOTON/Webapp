<?php
class profile extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','html'));
		$this->load->library('session');
		$this->load->database();
		$this->load->model('user_model');
	}
	
	function index()
	{
		$details = $this->user_model->get_user_by_id($this->session->userdata('uid'));
		$data['urole'] = $details[0]->ID_ROLE;
		$data['uname'] = $details[0]->NOM_PERSONNE;
		$data['uemail'] = $details[0]->ADRESSEMAIL_PERSONNE;
		$this->load->view('profile_view', $data);
	}
}