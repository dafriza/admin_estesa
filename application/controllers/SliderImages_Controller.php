<?php
class SliderImages_Controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('SliderImages_Model');
		$this->load->model('Welcome_Model');
		if($this->session->status == "not active"){
			$this->session->set_flashdata("checkLog","Belum Login");
			redirect(base_url('/'));
		}
	}
	public function editPage()
	{
		// $this->output->cache(5);
		$css = base_url('../../../assets/vendors/dropify/dist/dropify.min.css');
		$css2 = base_url('../../../assets/vendors/sweetalert2/sweetalert2.min.css');
		$js1 = base_url('../../../assets/vendors/dropify/dist/dropify.min.js');
		$js2 = base_url('../../../assets/js/dropify.js');
		$js3 = base_url('../../../assets/vendors/bootstrap-maxlength/bootstrap-maxlength.min.js');
		$js4 = base_url('../../../assets/js/bootstrap-maxlength.js');
		// $js5 = base_url('../../../assets/vendors/sweetalert2/sweetalert2.min.js');
		$js6 = base_url('../../../assets/js/sweet-alert.js');

		$data = array(
			'image' => $this->Welcome_Model->getSliderImage(),
		);
		$view = array(
			'content' => strval($this->parser->parse('Contents/SliderImages', $data, TRUE)),
			'css' => '<link rel="stylesheet" href=' . $css . '><link rel="stylesheet" href=' . $css2 . '>',
			'js' => '<script src=' . $js1 . '></script><script src=' . $js2 . '></script><script src=' . $js3 . '></script><script src=' . $js4 . '></script><script src=' . $js6 . '></script>'
		);
		$main = $this->load->view('index', '', TRUE);
		$this->parser->parse_string($main, $view);
		// print_r(FCPATH."assets/images");
	}
	public function uploadImage()
	{
		$config['upload_path']          = realpath(APPPATH . '../assets/images/bg_slide');
		$config['allowed_types']        = 'jpg|png|jpeg';

		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if (!$this->upload->do_upload('image')) {
			print_r($this->upload->display_errors());
			// redirect(base_url('/404_override'));
			// $this->load->view('upload_form', $error);
		} else {
			$file_name = $this->upload->data()['file_name'];
			// $data = array('upload_data' => $this->upload->data());
			$this->SliderImages_Model->updateImage($_POST['id'], base_url('assets/images/bg_slide/' . $file_name), $_POST['title']);
			// print_r("ini id -> ".$_POST['id']);
			$this->session->set_flashdata('success','Upload Success');
			redirect(base_url('/edit/slider_images'));
		}
	}
}
