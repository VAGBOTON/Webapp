<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Personne_model extends CI_Model
{
	private $table_name = 'personne';
	
	function __construct()
	{
		parent::__construct();
	}
	
	function login_personne($email, $pwd)
	{
		$this->db->where('ADRESSEMAIL_PERSONNE', $email);
		$this->db->where('MOTDEPASSE_PERSONNE', md5($pwd));
		$query = $this->db->get($this->table_name);
		return $query->result();
	}

	function get_personne_by_id($id)
	{
		$this->db->where('ID_PERSONNE', $id);
		$query = $this->db->get($this->table_name);
		return $query->result();
	}

	function insert_user($data)
	{
		return $this->db->insert($this->table_name, $data);
	}
}?>