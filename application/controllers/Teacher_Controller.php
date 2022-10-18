<?php
class Teacher_Controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Welcome_Model');
		$this->load->model('Teacher_Model');
		if($this->session->status == "not active"){
			$this->session->set_flashdata("checkLog","Belum Login");
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
		$js1 = base_url('../../../assets/vendors/owl.carousel/owl.carousel.min.js');
		$js2 = base_url('../../../assets/vendors/jquery-mousewheel/jquery.mousewheel.js');
		$js3 = base_url('../../../assets/js/carousel.js');
		$js4 = base_url('../../../assets/vendors/sweetalert2/sweetalert2.min.js');
		$js5 = base_url('assets/js/teacher_content.js');
		$js6 = base_url('../../../assets/vendors/datatables.net/jquery.dataTables.js');
		$js7 = base_url('../../../assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js');
		$js8 = base_url('../../../assets/js/data-table.js');
		// $js9 = base_url('../../../assets/js/sweet-alert.js');

		$data = array(
			'teacher' => $this->Welcome_Model->getTeacher(),
			'tenaga_pendidik' => $this->Teacher_Model->getTenagaPendidik()
		);
		$view = array(
			'content' => strval($this->parser->parse('Contents/Teacher', $data, TRUE)),
			'css' => '<link rel="stylesheet" href=' . $css1 . '><link rel="stylesheet" href=' . $css2 . '><link rel="stylesheet" href=' . $css3 . '><link rel="stylesheet" href=' . $css4 . '>',
			'js' => '<script src=' . $js1 . '></script><script src=' . $js2 . '></script><script src=' . $js3 . '></script><script src=' . $js4 . '></script><script src=' . $js5 . '></script><script src=' . $js6 . '></script><script src=' . $js7 . '></script><script src=' . $js8 . '>'
		);
		$main = $this->load->view('index', '', TRUE);
		$this->parser->parse_string($main, $view);
		// print_r(FCPATH."assets/images");
	}
	public function create()
	{
		$css1 = base_url('../../../assets/vendors/dropify/dist/dropify.min.css');
		$js1 = base_url('../../../assets/vendors/bootstrap-maxlength/bootstrap-maxlength.min.js');
		$js2 = base_url('../../../assets/js/bootstrap-maxlength.js');
		$js3 = base_url('../../../assets/vendors/dropify/dist/dropify.min.js');
		$js4 = base_url('../../../assets/js/dropify.js');
		$js5 = base_url('../../../assets/vendors/tinymce/tinymce.min.js');
		$js6 = base_url('../../../assets/js/tinymce.js');

		$view = array(
			'content' => strval($this->load->view('Contents/Teacher_Create','', TRUE)),
			'css' => '<link rel="stylesheet" href=' . $css1 . '>',
			'js' => '<script src=' . $js1 . '></script><script src=' . $js2 . '></script><script src=' . $js3 . '></script><script src=' . $js4 . '></script><script src=' . $js5 . '></script><script src=' . $js6 . '></script>'
		);
		$main = $this->load->view('index','',TRUE);
		$this->parser->parse_string($main,$view);
	}
	public function editAction($id)
	{

		$css1 = base_url('../../../assets/vendors/dropify/dist/dropify.min.css');
		$js1 = base_url('../../../assets/vendors/bootstrap-maxlength/bootstrap-maxlength.min.js');
		$js2 = base_url('../../../assets/js/bootstrap-maxlength.js');
		$js3 = base_url('../../../assets/vendors/dropify/dist/dropify.min.js');
		$js4 = base_url('../../../assets/js/dropify.js');

		$data = array(
			'news' => $this->Teacher_Model->getTeacherId($id)
		);

		$view = array(
			'content' => strval($this->parser->parse('Contents/Teacher_edit', $data, TRUE)),
			'css' => '<link rel="stylesheet" href=' . $css1 . '>',
			'js' => '<script src=' . $js1 . '></script><script src=' . $js2 . '></script><script src=' . $js3 . '></script><script src=' . $js4 . '></script>'
		);
		$main = $this->load->view('index', '', TRUE);
		$this->parser->parse_string($main, $view);
		// $data = $this->Teacher_Model->getNewsId($id);
		// print_r($data);
		// print_r($id);
	}
	public function update()
	{

		$config['upload_path']          = realpath(APPPATH . '../assets/images/teacher_image');
		$config['allowed_types']        = 'jpg|png|jpeg';

		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if (!$this->upload->do_upload('teacher_image')) {
			$data = $this->input->post(array('id','teacher_name','teacher_caption'),TRUE);
			$data['updated_at']= mdate('%Y-%m-%d %h:%i:%s ',now('Asia/Jakarta'));
			$this->Teacher_Model->updateTeacher($data);
			$this->session->set_flashdata('success', 'Upload Success');
			redirect(base_url('/edit/teacher'));
		} else {
			$file_name = $this->upload->data()['file_name'];
			$data = $this->input->post(array('id','teacher_name','teacher_caption'),TRUE);
			$data['updated_at']= mdate('%Y-%m-%d %h:%i:%s ',now('Asia/Jakarta'));
			$data['teacher_image'] = base_url('assets/images/teacher_image/'.$file_name);
			// $data = array('upload_data' => $this->upload->data());
			$this->Teacher_Model->updateTeacher($data);
			$this->session->set_flashdata('success', 'Upload Success');
			redirect(base_url('/edit/teacher'));
		}
	}
	public function delete($id)
	{
		$this->Teacher_Model->delete($id);
		$this->session->set_flashdata('success', 'Upload Success');
		return redirect(base_url('/edit/teacher'));
	}
	public function createAction()
	{
		// print_r('hehe');
		$config['upload_path']          = realpath(APPPATH . '../assets/images/teacher_image');
		$config['allowed_types']        = 'jpg|png|jpeg';

		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if (!$this->upload->do_upload('teacher_image')) {
			redirect(base_url('404_override'));
		} else {
			$file_name = $this->upload->data()['file_name'];
			// $data = array('upload_data' => $this->upload->data());
			$data = $this->input->post(array('teacher_name','teacher_caption'),TRUE);
			$data['teacher_image'] = base_url('assets/images/teacher_image/'.$file_name);
			$data['updated_at'] = mdate('%Y-%m-%d %h:%i:%s ',now('Asia/Jakarta'));
			$data['created_at'] = mdate('%Y-%m-%d %h:%i:%s ',now('Asia/Jakarta'));
			$this->Teacher_Model->create($data);
			$this->session->set_flashdata('success', 'Upload Success');
			redirect(base_url('/edit/teacher'));
		}
		
	}

	public function getTeacher()
	{
		$res = $this->Welcome_Model->getTeacher();
		return print_r(json_encode($res));
	}

	public function updateJabatan()
	{
		$data = $this->input->post(array('id','teacher_name'),TRUE);
		$data['updated_at'] = mdate('%Y-%m-%d %h:%i:%s ',now('Asia/Jakarta'));
		$this->Teacher_Model->updateJabatan($data);
		$this->session->set_flashdata('success', 'Upload Success');
		redirect(base_url('/edit/teacher'));
	}
}
