<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setup {
	private $CI;
	
	public function __construct(){
		$this->CI =& get_instance();
		$this->CI->load->model('system_model');
		
		$this->user_info();
		$this->set_user_data();
	}
	
	function set_user_data(){
		if(!$this->CI->session->userdata('site_parameter')){
			$this->CI->session->set_userdata('site_parameter', $this->CI->system_model->getParameters());
		}
	}
	
	function user_info(){
		
		$user_info = array(
			"userid" => 0,
			"username" => "Anonymous",
			"template" => "default"
		);
		
		$user_info_ = $this->CI->session->userdata('userinfo');
		
		if(empty($user_info_)){
			$this->CI->session->set_userdata('userinfo', $user_info);
		}
		
	}
}