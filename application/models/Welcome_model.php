<?php
class Welcome_model extends CI_Model {
	public function getSliderImage()
	{
		return $this->db->get('background_slider')->result_array();
	}
	public function getNews()
	{
		return $this->db->get('news')->result_array();
	}
	public function getLimitNews()
	{
		return $this->db->limit(3)->get('news')->result_array();
	}
	public function getExtras()
	{
		return $this->db->get('extra')->result_array();
	}
	public function getLimitExtras()
	{
		return $this->db->limit(3)->get('extra')->result_array();
	}
	public function getAlumni()
	{
		return $this->db->get('alumni')->result_array();
	}
	public function getLimitAlumni()
	{
		return $this->db->limit(3)->get('alumni')->result_array();
	}
	public function getAchievement()
	{
		return $this->db->get('achievement')->result_array();
	}
	public function getLimitAchievement()
	{
		return $this->db->limit(3)->get('achievement')->result_array();
	}

	public function getAchievedetail()
	{
		return $this->db->get('achievement_detail')->result_array();
	}

	public function getTeacher()
	{
		return $this->db->get('teacher')->result_array();
	}
	public function getLimitTeacher()
	{
		return $this->db->limit(3)->get('teacher')->result_array();
	}

	public function authAction($data)
	{
		$this->db->where('username',$data['username']);
		$this->db->where('password',$data['password']);
		return $this->db->get('admin')->result_array();
	} 

	public function getAdmin()
	{
		return $this->db->get('admin')->result_array();
	}

	public function getAdminId($id)
	{
		return $this->db->get_where('admin',array('id'=>$id))->result_array();
	}

	public function updateAdmin($data)
	{
		$this->db->where('id', $data['id']);
		$this->db->update('admin', $data);
	}

	public function insertAdmin($data)
	{
		$this->db->insert('admin', $data);
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('admin');
	}

	public function getSensor()
	{
		return $this->db->get('sensor')->result_array();
	}

	public function updateSensor($data)
	{
		$this->db->where('id',1);
		$this->db->update('sensor',$data);
	}
}
?>
