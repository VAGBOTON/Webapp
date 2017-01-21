<?php
class Theme_model extends CI_Model {
	private $table_name = 'theme';
	private $table_id = 'ID_THEME';
 
	public function __construct()
	{
		$this->load->database();
	}
	
	function get_theme_by_id($id)
	{
		$this->db->where($this->table_id, $id);
		$query = $this->db->get($this->table_name);
		return $query->result();
	}

	function insert_theme($data)
	{
		return $this->db->insert($this->table_name, $data);
	}
	
	function get_all_theme()
	{
		$result = $this->db->get($this->table_name);
		return $result->result_array();
	}
	
	function update_theme($id, $theme){
		$this->db->where($this->table_id, $id);
		$this->db->update($this->table_name, $theme);
	}
	
	function delete_theme($id){
		$this->db->where($this->table_id, $id);
		$this->db->delete($this->table_name);
	}
}