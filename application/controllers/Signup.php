<?php
class Signup extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->helper('security');
		$this->load->library(array('session', 'form_validation'));
		$this->load->database();
		$this->load->model('user_model');
	}
	
	function index()
	{
		// set form validation rules
		$this->form_validation->set_rules('name', 'Nom', 'trim|required|min_length[3]|max_length[30]|xss_clean');
		$this->form_validation->set_rules('email', 'Adresse Mail', 'trim|required|valid_email|is_unique[PERSONNE.ADRESSEMAIL_PERSONNE]');
		$this->form_validation->set_rules('password', 'Mot de Passe', 'trim|required|md5');
		$this->form_validation->set_rules('cpassword', 'Confirmation Mot de Passe', 'trim|required|md5|matches[password]');
		
		// submit
		if ($this->form_validation->run() == FALSE)
        {
			// fails
			$this->load->view('signup_view');
        }
		else
		{
			//insert user details into db
			$data = array(
				'NOM_PERSONNE' => $this->input->post('name'),
				'ID_ROLE' => $this->input->post('role'),
				'ADRESSEMAIL_PERSONNE' => $this->input->post('email'),
				'MOTDEPASSE_PERSONNE' => $this->input->post('password')
			);
			
			if ($this->user_model->insert_user($data))
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success text-center">Vous avez bien été enregistré! Veuillez vous connecter sur votre profil!</div>');
				redirect('signup/index');
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Erreur.  Réessayez plus tard!!!</div>');
				redirect('signup/index');
			}
		}
	}
}