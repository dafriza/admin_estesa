<?php
class Alumni_Model extends CI_Model {

	public function __construct()
	{
			parent::__construct();
	}
	public function getAlumniId($id)
	{
		return $this->db->get_where('alumni', array('id' => $id))->result_array();
	}
	public function updateAlumni($data)
	{
		$this->db->where('id', $data['id']);
		$this->db->update('alumni', $data);		
	}
	public function insertAlumni($data)
	{
		// $data['created_at'] = mdate('%Y-%m-%d %h:%i:%s ',now('Asia/Jakarta'));
		// $data['updated_at'] = mdate('%Y-%m-%d %h:%i:%s ',now('Asia/Jakarta'));
		$this->db->insert('alumni', $data);
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('alumni');
	}
}
