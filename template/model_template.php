<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class NAMETOP extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function get($id)
	{
		$this->db->where('id', $id);
		return $this->db->get('table_name');
	}

	public function get_all()
	{
		return $this->db->get('table_name');
	}

	public function update($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update('table_name', $data);
		return TRUE;
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('table_name');
		return TRUE;
	}
}

/* End of file NAMEBOTTOM.php */
/* Location: ./application/models/NAMEBOTTOM.php */