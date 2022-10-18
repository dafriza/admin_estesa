<?php
class SliderImages_Model extends CI_Model {
	public function updateImage($id,$path,$title)
	{
		$data = array(
			'source_img' => $path,
			'title_img' => $title,
			'updated_at' => mdate('%Y-%m-%d %h:%i:%s ',now('Asia/Jakarta'))
		);
		$this->db->where('id',$id);
		return $this->db->update('background_slider',$data);
	}
}
?>
