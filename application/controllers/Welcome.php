<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Welcome_model');
		// if($this->session->status == "not active"){
		// 	redirect(base_url('/'));
		// }
	}
	public function index()
	{
		if ($this->session->status == "not active") {
			$this->session->set_flashdata("checkLog", "Belum Login");
			redirect(base_url('/'));
		}
		// $this->output->cache(5);
		$css1 = base_url('../../../assets/vendors/owl.carousel/owl.carousel.min.css');
		$css2 = base_url('../../../assets/vendors/owl.carousel/owl.theme.default.min.css');
		$css3 = base_url('../../../assets/vendors/mdi/css/materialdesignicons.min.css');
		$js1 = base_url('../../../assets/vendors/owl.carousel/owl.carousel.min.js');
		$js2 = base_url('../../../assets/vendors/jquery-mousewheel/jquery.mousewheel.js');
		$js3 = base_url('../../../assets/js/carousel.js');
		$js4 = base_url('assets/js/news_content.js');
		$js5 = base_url('assets/js/suhu.js');

		$img = array(
			'image' => $this->Welcome_model->getSliderImage(),
			'news' => $this->Welcome_model->getLimitNews(),
			'extra' => $this->Welcome_model->getLimitExtras(),
			'alumni' => $this->Welcome_model->getLimitAlumni(),
			'achievement' => $this->Welcome_model->getLimitAchievement(),
			'teacher' => $this->Welcome_model->getLimitTeacher(),
		);
		$view = array(
			'content' => strval($this->parser->parse('Contents/Dashboard', $img, true)),
			'css' => '<link rel="stylesheet" href=' . $css1 . ' /><link rel="stylesheet" href=' . $css2 . ' /><link rel="stylesheet" href=' . "$css3" . ' type="text/css" />',
			'js' => '<script src=' . $js1 . '></script><script src=' . $js2 . '></script><script src=' . $js3 . '></script></script><script src=' . $js4 . '></script><script src=' . $js5 . '></script>'
		);
		$main = $this->load->view('index', '', TRUE);
		// print_r($img);
		$this->parser->parse_string($main, $view);
	}
	public function Page404()
	{
		$data = array(
			'status_code' => '404',
			'message_status_code' => 'Error Page',
			'error_message' => 'Oopps!! Error your request'
		);
		$this->parser->parse('404', $data);
	}

	public function auth()
	{
		$this->load->view('Contents/Auth/login');
	}

	public function authAction()
	{
		$data = $this->input->post(array('username', 'password'), TRUE);
		$res = $this->Welcome_model->authAction($data);
		if ($res) {
			$data = [
				'name' => $res[0]['username'],
				'status' => 'active',
				'akses' => $res[0]['akses']
			];
			// print_r($res[0]['username']);
			$this->session->set_userdata($data);
			redirect(base_url('dashboard'));
		} else {
			$this->session->set_flashdata('fail', 'username atau password salah!');
			redirect(base_url('/'));
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();

		$this->session->set_flashdata('logout', 'logout success');
		redirect(base_url('/'));
	}

	public function superAdmin()
	{
		$css1 = base_url('../../../assets/vendors/sweetalert2/sweetalert2.min.css');
		$css2 = base_url('../../../assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css');
		$js1 = base_url('../../../assets/vendors/sweetalert2/sweetalert2.min.js');
		$js2 = base_url('../../../assets/vendors/datatables.net/jquery.dataTables.js');
		$js3 = base_url('../../../assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js');
		$js4 = base_url('../../../assets/js/data-table.js');

		$data = array(
			'admin' => $this->Welcome_model->getAdmin()
		);

		$view = array(
			'content' => strval($this->parser->parse('Contents/Auth/superadmin', $data, TRUE)),
			'css' => '<link rel="stylesheet" href=' . $css1 . '><link rel="stylesheet" href=' . $css2 . '>',
			'js' => '<script src=' . $js1 . '></script><script src=' . $js2 . '></script><script src=' . $js3 . '></script><script src=' . $js4 . '></script>'
		);
		$main = $this->load->view('index', '', TRUE);
		$this->parser->parse_string($main, $view);
	}

	public function editAction($id)
	{

		$css1 = base_url('../../../assets/vendors/dropify/dist/dropify.min.css');
		$js1 = base_url('../../../assets/vendors/bootstrap-maxlength/bootstrap-maxlength.min.js');
		$js2 = base_url('../../../assets/js/bootstrap-maxlength.js');

		$data = array(
			'admin' => $this->Welcome_model->getAdminId($id)
		);

		$view = array(
			'content' => strval($this->parser->parse('Contents/Auth/superadmin_edit', $data, TRUE)),
			'css' => '<link rel="stylesheet" href=' . $css1 . '>',
			'js' => '<script src=' . $js1 . '></script><script src=' . $js2 . '></script>'
		);
		$main = $this->load->view('index', '', TRUE);
		$this->parser->parse_string($main, $view);
		// $data = $this->Teacher_Model->getNewsId($id);
		// print_r($data);
		// print_r($id);
	}

	public function updateAdmin()
	{
		$data = $this->input->post(array('id', 'username', 'password', 'akses'), TRUE);
		$data['updated_at'] = mdate('%Y-%m-%d %h:%i:%s ', now('Asia/Jakarta'));
		$this->Welcome_model->updateAdmin($data);
		$this->session->set_flashdata('success', 'Upload Success');
		redirect(base_url('edit/superadmin'));
	}

	public function create()
	{
		$css1 = base_url('../../../assets/vendors/dropify/dist/dropify.min.css');
		$js1 = base_url('../../../assets/vendors/bootstrap-maxlength/bootstrap-maxlength.min.js');
		$js2 = base_url('../../../assets/js/bootstrap-maxlength.js');

		$view = array(
			'content' => strval($this->load->view('Contents/Auth/superadmin_create', '', TRUE)),
			'css' => '<link rel="stylesheet" href=' . $css1 . '>',
			'js' => '<script src=' . $js1 . '></script><script src=' . $js2 . '></script>'
		);
		$main = $this->load->view('index', '', TRUE);
		$this->parser->parse_string($main, $view);
	}

	public function insert()
	{
		$data = $this->input->post(array('username', 'password', 'akses'), TRUE);
		$data['created_at'] = mdate('%Y-%m-%d %h:%i:%s ', now('Asia/Jakarta'));
		$data['updated_at'] = mdate('%Y-%m-%d %h:%i:%s ', now('Asia/Jakarta'));
		$this->Welcome_model->insertAdmin($data);
		$this->session->set_flashdata('success', 'Upload Success');
		redirect(base_url('edit/superadmin'));
	}

	public function delete($id)
	{
		$this->Welcome_model->delete($id);
		$this->session->set_flashdata('success', 'Upload Success');
		redirect(base_url('edit/superadmin'));
	}
	public function suhu()
	{
		$data = $this->Welcome_model->getSensor();
		$data = json_encode($data);
		print_r($data);
	}
	public function sensorUpdate($suhu,$kelembaban)
	{
		$data = array(
			'suhu' => $suhu,
			'kelembaban' => $kelembaban
		);
		$this->Welcome_model->updateSensor($data);
	}
}
