<?php
class News_Model extends CI_Model
{
	public function getNewsId($id)
	{
		return $this->db->get_where('news', array('id' => $id))->result_array();
	}
	public function updateNews($data)
	{
		$this->db->where('id', $data['id']);
		$this->db->update('news', $data);
	}
	public function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('news');
	}
	public function create($data)
	{
		$this->db->insert('news', $data);
	}
}
