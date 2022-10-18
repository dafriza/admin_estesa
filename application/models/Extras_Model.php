<?php
class Extras_Model extends CI_Model {

	public function __construct()
	{
			parent::__construct();
	}
	public function getExtraId($id)
	{
		return $this->db->get_where('extra', array('id' => $id))->result_array();
	}
	public function updateExtra($data)
	{
		$this->db->where('id', $data['id']);
		$this->db->update('extra', $data);		
	}
	public function insertExtra($data)
	{
		$data['created_at'] = mdate('%Y-%m-%d %h:%i:%s ',now('Asia/Jakarta'));
		$data['updated_at'] = mdate('%Y-%m-%d %h:%i:%s ',now('Asia/Jakarta'));
		$this->db->insert('extra', $data);
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('extra');
	}
}
