<?php
class Category_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function create_category()
	{
		$data = array('name' => $this -> input->post('name'));

		return $this->db->insert('categories', $data);

	}
	public function get_categories()
	{
		$this->db->order_by('name', 'DESC');
		$query = $this->db->get('categories');
		return $query->result_array();
	}

	public function get_category($id)
	{
		// Equivalent to = SELECT * FROM categories WHERE id = $id;
		$query = $this->db->get_where('categories', array('id' => $id));
		return $query->row();
	}

}
