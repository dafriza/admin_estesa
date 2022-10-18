<?php
class AchieveDetail_Controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Achievedetail_Model');
		$this->load->model('Welcome_Model');
		if ($this->session->status == "not active") {
			$this->session->set_flashdata("checkLog", "Belum Login");
			redirect(base_url('/'));
		}
	}
	public function editPage()
	{
		// $this->output->cache(5);
		$css1 = base_url('../../../assets/vendors/owl.carousel/owl.carousel.min.css');
		$css2 = base_url('../../../assets/vendors/owl.carousel/owl.theme.default.min.css');
		$css3 = base_url('../../../assets/vendors/sweetalert2/sweetalert2.min.css');
		$css4 = base_url('../../../assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css');
		$css5 = base_url('../../../assets/vendors/mdi/css/materialdesignicons.min.css');
		$js1 = base_url('../../../assets/vendors/owl.carousel/owl.carousel.min.js');
		$js2 = base_url('../../../assets/vendors/jquery-mousewheel/jquery.mousewheel.js');
		$js3 = base_url('../../../assets/js/carousel.js');
		$js4 = base_url('../../../assets/vendors/sweetalert2/sweetalert2.min.js');
		$js5 = base_url('assets/js/achievement_content.js');
		$js6 = base_url('../../../assets/vendors/datatables.net/jquery.dataTables.js');
		$js7 = base_url('../../../assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js');
		$js8 = base_url('../../../assets/js/data-table.js');
		// $js9 = base_url('../../../assets/js/sweet-alert.js');

		$data = array(
			'achievement' => $this->Welcome_Model->getAchievedetail(),
		);
		$view = array(
			'content' => strval($this->parser->parse('Contents/AchieveDetail', $data, TRUE)),
			'css' => '<link rel="stylesheet" href=' . $css1 . '><link rel="stylesheet" href=' . $css2 . '><link rel="stylesheet" href=' . $css3 . '><link rel="stylesheet" href=' . $css4 . '><link rel="stylesheet" href=' . $css5 . '>',
			'js' => '<script src=' . $js1 . '></script><script src=' . $js2 . '></script><script src=' . $js3 . '></script><script src=' . $js4 . '></script><script src=' . $js5 . '></script><script src=' . $js6 . '></script><script src=' . $js7 . '></script><script src=' . $js8 . '></script>'
		);
		$main = $this->load->view('index', '', TRUE);
		$this->parser->parse_string($main, $view);
	}
	public function editAction($id)
	{
		$css1 = base_url('../../../assets/vendors/mdi/css/materialdesignicons.min.css');
		$css2 = base_url('../../../assets/vendors/dropify/dist/dropify.min.css');
		$js1 = base_url('../../../assets/vendors/bootstrap-maxlength/bootstrap-maxlength.min.js');
		$js2 = base_url('../../../assets/js/bootstrap-maxlength.js');
		$js3 = base_url('../../../assets/vendors/tinymce/tinymce.min.js');
		$js4 = base_url('../../../assets/js/tinymce.js');
		$js5 = base_url('assets/js/achievement_content.js');
		$js6 = base_url('../../../assets/vendors/dropify/dist/dropify.min.js');
		$js7 = base_url('../../../assets/js/dropify.js');

		$data = array(
			'achievement' => $this->Achievedetail_Model->getAchievementId($id)
		);

		$view = array(
			'content' => strval($this->parser->parse('Contents/AchieveDetail_edit', $data, TRUE)),
			'css' => '<link rel="stylesheet" href=' . $css1 . '><link rel="stylesheet" href=' . $css2 . '>',
			'js' => '<script src=' . $js1 . '></script><script src=' . $js2 . '></script><script src=' . $js3 . '></script><script src=' . $js4 . '></script><script src=' . $js5 . '></script><script src=' . $js6 . '></script><script src=' . $js7 . '></script>'
		);
		$main = $this->load->view('index', '', TRUE);
		$this->parser->parse_string($main, $view);
	}
	public function update()
	{

		$config['upload_path']          = realpath(APPPATH . '../assets/images/achievedetail_image');
		$config['allowed_types']        = 'jpg|png';

		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if (!$this->upload->do_upload('achieve_img')) {
			$data = $this->input->post(array('achieve_name', 'tag'), true);
			$this->Achievedetail_Model->updateAchievement($data);
			$this->session->set_flashdata('success', 'Upload Success');
			redirect(base_url('/edit/achievedetail'));
		} else {
			// print_r($_FILES('achievement_image'));
			$file_name = $this->upload->data()['file_name'];
			$data = $this->input->post(array('achieve_name', 'tag'), true);
			$data['achieve_img'] = base_url('assets/images/achievedetail_image/' . $file_name);
			$this->Achievedetail_Model->updateAchievement($data);
			$this->session->set_flashdata('success', 'Upload Success');
			redirect(base_url('/edit/achievement'));
		}
	}

	public function create()
	{
		$css1 = base_url('../../../assets/vendors/mdi/css/materialdesignicons.min.css');
		$css2 = base_url('../../../assets/vendors/dropify/dist/dropify.min.css');
		$js1 = base_url('../../../assets/vendors/bootstrap-maxlength/bootstrap-maxlength.min.js');
		$js2 = base_url('../../../assets/js/bootstrap-maxlength.js');
		$js3 = base_url('../../../assets/vendors/tinymce/tinymce.min.js');
		$js4 = base_url('../../../assets/js/tinymce.js');
		$js5 = base_url('assets/js/achievement_content.js');
		$js6 = base_url('../../../assets/vendors/dropify/dist/dropify.min.js');
		$js7 = base_url('../../../assets/js/dropify.js');

		$view = array(
			'content' => strval($this->load->view('Contents/AchieveDetail_Create', '', TRUE)),
			'css' => '<link rel="stylesheet" href=' . $css1 . '><link rel="stylesheet" href=' . $css2 . '>',
			'js' => '<script src=' . $js1 . '></script><script src=' . $js2 . '></script><script src=' . $js3 . '></script><script src=' . $js4 . '></script><script src=' . $js5 . '></script><script src=' . $js6 . '></script><script src=' . $js7 . '></script>'
		);
		$main = $this->load->view('index', '', TRUE);
		$this->parser->parse_string($main, $view);
	}

	public function insert()
	{
		$config['upload_path']          = realpath(APPPATH . '../assets/images/achievedetail_image');
		$config['allowed_types']        = 'jpg|png|jpeg';

		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if (!$this->upload->do_upload('achieve_img')) {
			$data = $this->input->post(array('achieve_name', 'tag'), true);
			$this->Achievedetail_Model->insertAchievement($data);
			$this->session->set_flashdata('success', 'Upload Success');
			redirect(base_url('/edit/achievedetail'));
		} else {
			// print_r($_FILES('achievement_image'));
			$file_name = $this->upload->data()['file_name'];
			$data = $this->input->post(array('achieve_name', 'tag'), true);
			$data['achieve_img'] = base_url('assets/images/achievedetail_image/' . $file_name);
			print_r("jalan 2");
			$this->Achievedetail_Model->insertAchievement($data);
			$this->session->set_flashdata('success', 'Upload Success');
			redirect(base_url('/edit/achievedetail'));
		}
	}

	public function delete($id)
	{
		$this->Achievedetail_Model->delete($id);
		$this->session->set_flashdata('success', 'Delete Success');
		redirect(base_url('edit/achievedetail'));
	}
}
