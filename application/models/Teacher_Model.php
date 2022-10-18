<?php
class Teacher_Model extends CI_Model
{
	public function getTeacherId($id)
	{
		return $this->db->get_where('teacher', array('id' => $id))->result_array();
	}
	public function updateTeacher($data)
	{
		$this->db->where('id', $data['id']);
		$this->db->update('teacher', $data);
	}
	public function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('teacher');
	}
	public function create($data)
	{
		$this->db->insert('teacher', $data);
	}

	public function getTenagaPendidik()
	{
		$this->db->like('tenaga_pendidik', 'jabatan');
		return $this->db->get('teacher')->result_array();
	}

	public function updateJabatan($data)
	{
		$this->db->where('teacher_name', $data['teacher_name']);
		$this->db->update('teacher', array('tenaga_pendidik' => 'jabatan'));


		$this->db->where('id', $data['id']);
		$this->db->update('teacher', array('tenaga_pendidik' => 'tenaga_pendidik'));
	}
}
