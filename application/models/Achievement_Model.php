<?php
class Achievement_Model extends CI_Model {

	public function __construct()
	{
			parent::__construct();
	}
	public function getAchievementId($id)
	{
		return $this->db->get_where('achievement', array('id' => $id))->result_array();
	}
	public function updateAchievement($data)
	{
		$this->db->where('id', $data['id']);
		$this->db->update('achievement', $data);		
	}
	public function insertAchievement($data)
	{
		$data['created_at'] = mdate('%Y-%m-%d %h:%i:%s ',now('Asia/Jakarta'));
		$data['updated_at'] = mdate('%Y-%m-%d %h:%i:%s ',now('Asia/Jakarta'));
		$this->db->insert('achievement', $data);
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('achievement');
	}
}
