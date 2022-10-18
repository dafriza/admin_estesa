<?php
class Login
{
	public function __construct()
	{
		$this->CI =& get_instance();
	}
	function loginCheck()
	{
		$session = $this->CI->session->status;
		if($session == ""){
			$this->CI->session->set_userdata('status','not active');
			// print_r($session);
		}else{
			return;
			// print_r($session);
		}
	}
}
