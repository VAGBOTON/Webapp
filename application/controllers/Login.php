<?php
class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url','html'));
		$this->load->helper('security');
		$this->load->library(array('session', 'form_validation'));
		$this->load->database();
		$this->load->model('personne_model');
	}
	public function index()
	{
		$email = $this->input->post("email");
		$password = $this->input->post("password");

		$this->form_validation->set_rules("email", "Email", "trim|required|xss_clean");
		$this->form_validation->set_rules("password", "Password", "trim|required|xss_clean");
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('templates/header');
			$this->load->view('home/login');
			$this->load->view('templates/footer');
		}
		else
		{
			$result = $this->personne_model->login_personne($email, $password);
			if (count($result) > 0)
			{
				$sess_data = array('login' => TRUE, 'role' => $result[0]->ID_ROLE,'name' => $result[0]->NOM_PERSONNE, 'id' => $result[0]->ID_PERSONNE);
				$this->session->set_userdata($sess_data);
				redirect("profile");
			}
			else
			{
				$this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Erreur lors de la saisie de l\'Adresse Mail ou du Mot de Passe!</div>');
				redirect('login');
			}
		}
	}
}
