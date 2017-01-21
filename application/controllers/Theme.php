<?php
class Theme extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'security', 'url', 'html'));
		$this->load->library(array('session', 'form_validation', 'table'));
		$this->load->database();
		$this->load->model(array('theme_model', 'personne_model'));
		
		if ($this->session->userdata('login'))
		{
			$this->load->view('templates/header');
		}
		
		else
		{
			redirect("home");
		}
	}
	
	function index()
	{
		$this->table->set_heading('Id', 'Nom', 'Modifier', 'Supprimer');
		$data['themes'] = $this->theme_model->get_all_theme();
		foreach ($data['themes'] as $theme) {
			$this->table->add_row($theme['ID_THEME'], $theme['NOM_THEME'],
			'<a href="'.base_url().'index.php/theme/modify/'.$theme['ID_THEME'].'" class="btn btn-info" role="button">Modifier</a>',
			'<a href="'.base_url().'index.php/theme/delete/'.$theme['ID_THEME'].'" class="btn btn-info" role="button">Supprimer</a>');
		}
		
		$template = array(
			'table_open' => '<table class="table">'
		);
		$this->table->set_template($template);
		$data['table'] = $this->table->generate();
		$this->load->view('theme/index', $data);
		$this->load->view('templates/footer');
	}
	
	function create()
	{
		$this->form_validation->set_rules('name', 'Nom', 'trim|required|min_length[3]|max_length[30]|xss_clean');
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('theme/create');
			$this->load->view('templates/footer');
		}
		else
		{
			$data = array(
				'NOM_THEME' => $this->input->post('name')
			);
			
			if ($this->theme_model->insert_theme($data))
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success text-center">Le thème a bien été ajouté ! </div>');
				redirect('theme/create');
			}
			else
			{
				$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Erreur.  Réessayez plus tard!!!</div>');
				redirect('theme/create');
			}
		}
	}
	
	function modify($id)
	{
		$this->form_validation->set_rules('name', 'Nom', 'trim|required|min_length[3]|max_length[30]|xss_clean');
		
		if ($this->form_validation->run() == FALSE)
		{
			$themes = $this->theme_model->get_theme_by_id($id);
			$data['theme'] = $themes[0];
			$data['id'] = $id;
			$this->load->view('theme/modify', $data);
			$this->load->view('templates/footer');
		}
		else
		{
			$data = array(
				'NOM_THEME' => $this->input->post('name')
			);
			
			$this->theme_model->update_theme($id, $data);
			
			redirect('theme');
		}
	}
	
	function delete($id)
	{
		$this->theme_model->delete_theme($id);
		redirect('theme');
	}
}
